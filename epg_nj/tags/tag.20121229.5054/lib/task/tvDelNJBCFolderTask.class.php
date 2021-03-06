<?php
/**
 *  @todo  : 每天23:50定时删除tmp/epg中的本地节目数据文件（由计划任务执行）
 *  @author: lifucang
 */
class tvDelNJBCFolderTask extends sfMondongoTask
{
  protected function configure()
  {
    // // add your own arguments here
    // $this->addArguments(array(
    //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
    // ));

    $this->addOptions(array(
      new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name'),
      new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
      new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'mondongo'),
      // add your own options here
    ));

    $this->namespace        = 'tv';
    $this->name             = 'DelNJBCFolder';
    $this->briefDescription = '';
    $this->detailedDescription = <<<EOF
The [tv:DelNJBCFolder|INFO] task does things.
Call it with:

  [php symfony tv:DelNJBCFolder|INFO]
EOF;
  }

    protected function execute($arguments = array(), $options = array())
    {
        $fsc=new FSC();
        $fsc->delfolderOne('./tmp/epg/');
        echo "finished\n";
    }
}
