<?php
/**
 *  @todo  : ÿ��1:00��ʱɾ����Ӫ����ftp��Ŀ�����ļ����ɼƻ�����ִ�У�
 *  @author: lifucang
 */
class tvDelHdFtpTask extends sfMondongoTask
{
  protected function configure()
  {
    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name','stba'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'mondongo'),
      new sfCommandOption('date', null, sfCommandOption::PARAMETER_OPTIONAL, 'date'),
    ));

    $this->namespace        = 'tv';
    $this->name             = 'DelHdFtp';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [tv:DelHdFtp|INFO] task does things.
Call it with:

  [php symfony tv:DelHdFtp|INFO]
EOF;
  }

    protected function execute($arguments = array(), $options = array())
    {
        $mongo = $this->getMondongo();
        //�ȼ�¼��־
        $crontabStartTime=date("Y-m-d H:i:s");
        $crontabLog=new CrontabLog();
        $crontabLog->setTitle('DelHdFtp');
        $crontabLog->setContent('');
        $crontabLog->setState(0);
        $crontabLog->setStartTime($crontabStartTime);
        $crontabLog->save();
        //��ʼ
        $ftpIp = sfConfig::get('app_centerFtp_host');
        $ftpPort = sfConfig::get('app_centerFtp_port');
        $ftpUser = sfConfig::get('app_centerFtp_username');
        $ftpPass = sfConfig::get('app_centerFtp_password');
        
        $ftp_conn = ftp_connect($ftpIp,$ftpPort) or die("FTP����������ʧ��"); 
        ftp_login($ftp_conn ,$ftpUser,$ftpPass) or die("FTP��������½ʧ��");
        ftp_pasv($ftp_conn,TRUE);  //����ģʽ����������

        $ftp_files = ftp_nlist($ftp_conn,"./");
        if(count($ftp_files) > 0) {
            if(isset($options['date'])){
                $date = $options['date'];
            }else{
                $date = date("Y-m-d",mktime(0,0,0,date("m"),date("d")-4,date("Y")));
            }
            echo $date,"\n";
            foreach($ftp_files as $file) { 
                //echo $file,"\n";
                if(strpos($file,$date)){
                    ftp_delete($ftp_conn,$file);  //ɾ��ftp�������ϵ�����ļ�
                }
            }
        }
        ftp_close($ftp_conn);
        echo "finished\n";
        $content="date:$date is delete";
        //���¼ƻ�������־
        $crontabLog_repo = $mongo->getRepository("CrontabLog");  
        $crontabLoga=$crontabLog_repo->findOneById($crontabLog->getId());
        $crontabLoga->setContent($content);
        $crontabLoga->setState(1);
        $crontabLoga->save();
    }
}
