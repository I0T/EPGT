<?php

/**
 * json actions.
 *
 * @package    epg
 * @subpackage json
 * @author     superwen
 */

class injectActions extends sfActions
{		
    /*
    * �÷���δ��
    * @param sfRequest $request
    * @author superwen
    * @final 2012-07-09
    */
    public function executeIndex(sfWebRequest $request) 
	{
        if ($request->getMethod() == 'POST') {
			if($request->getPostParameter('xmlString')){
				$jsonstr = $request->getPostParameter('xmlString');
			}else {
				$jsonstr = file_get_contents('php://input');
			}
            file_put_contents("../log/inject.".date("YmdHis").".txt", $jsonstr, FILE_APPEND);
            
            $this->getResponse()->setContentType('text/plain');
            return $this->renderText("{'stats' : 'ok'}");            
        } else {
            //$this->getResponse()->setContentType('text/plain');
            //return $this->renderText('The Json Server accepts POST requests only.');
        }     
    }
    /*
    * �÷���δ��
    * @param sfRequest $request
    * @author superwen
    * @final 2012-07-09
    */
    public function executeEpg(sfWebRequest $request) 
	{
         if ($request->getMethod() == 'POST') {
			if($request->getPostParameter('xmlString')){
				$jsonstr = $request->getPostParameter('xmlString');
			}else {
				$jsonstr = file_get_contents('php://input');
			}
            file_put_contents("../log/inject.".date("YmdHis").".txt",$jsonstr);
            
            $this->getResponse()->setContentType('text/plain');
            return $this->renderText("{'stats' : 'ok'}");            
        }   
    }
    
    /**
     * cdi������
     * @param sfRequest $request
     * @author lifucang
     * @update 2013-07-26
     */
    public function executeCdi(sfWebRequest $request) 
	{
        if ($request->getMethod() == 'POST') { 
			if($request->getPostParameter('xmlString')){
				$jsonstr = $request->getPostParameter('xmlString');
			}else {
				$jsonstr = file_get_contents('php://input');
			}

            $mongo = $this->getMondongo();
            $importImport_repo = $mongo->getRepository("ContentImport"); 
            
            $cdi = new ContentCdi();
            $cdi->setFrom("cms");
            $cdi->setState(0);
            $cdi->setContent($jsonstr);            
            $cdi->save();
            $content = @simplexml_load_string(trim($jsonstr));     
            $header=$content->header->attributes();
            $this->getResponse()->setContentType('text/plain');
            if($header['command']=='ONLINE_TASK_DONE'){
                foreach($content->body->tasks->task as $val){
                    $attr=$val->attributes();
                    $children_id=(string)$attr['subcontent-id'];
                    $page_id=(string)$attr['page-id'];
                    break;
                }
                $importImport = $importImport_repo->findOne(array('query'=>array('children_id.ID'=>$children_id,'wiki_id'=>array('$exists'=>true,'$ne'=>'')),'sort'=>array('_id'=>-1)));
                if($importImport){
                    //��������״̬
                    $this->videoSave($importImport,$children_id,$page_id); //ֻ����һ��task���򲻻��ж��task�����
                    $importImport->setStateEdit(1); //��¼�Ƿ���Ҳ�����Ƿ��뵽video��
                    $importImport->setState(1);     //state=1Ϊ����
                    $importImport->save();
                    //�ڶ���,������������ߵ�tasks���ж��task�������Ŀǰ������
                    /*
                    foreach($content->body->tasks->task as $val){
                        $attr=$val->attributes();
                        $children_id=(string)$attr['subcontent-id'];
                        $page_id=(string)$attr['page-id'];
                        $this->videoSave($importImport,$children_id,$page_id);
                    } 
                    */
                } 
                usleep(100); //��ʱ100΢������ѯ��������������δͬ����ȥ
                //ContentCdi�����������Ϣ
                $cdi_repo = $mongo->getRepository("ContentCdi"); 
                $cdia = $cdi_repo->findOne(array('query'=>array('_id'=>$cdi->getId())));
                if($cdia){
                    $cdia -> setCommand('ONLINE_TASK_DONE');
                    $cdia -> setSubcontentId($children_id);
                    $cdia -> setPageId($page_id);
                    $cdia -> save();
                }
                $backxmlstring=$this->getBackCdiString($header['sequence'],$header['component-id'],'ONLINE_TASK_DONE');
                return $this->renderText($backxmlstring);
            }elseif($header['command']=='CONTENT_OFFLINE'){
                foreach($content->body->contents->content as $val){
                    $attr=$val->attributes();
                    $this -> videoDel($attr['subcontent-id']);
                    $children_id=(string)$attr['subcontent-id'];
                }
                //��������״̬
                $importImport = $importImport_repo->findOne(array('query'=>array('children_id.ID'=>$children_id)));
                if($importImport){
                    $importImport->setState(0);
                    $importImport->save();
                }
                //ContentCdi�����������Ϣ
                $cdi_repo = $mongo->getRepository("ContentCdi"); 
                $cdia = $cdi_repo->findOne(array('query'=>array('_id'=>$cdi->getId())));
                if($cdia){
                    $cdia -> setCommand('CONTENT_OFFLINE');
                    $cdia -> setSubcontentId($children_id);
                    $cdia -> save();
                }
                $backxmlstring=$this->getBackCdiString($header['sequence'],$header['component-id'],'CONTENT_STATUS_UPDATED');
                return $this->renderText($backxmlstring);
            }elseif($header['command']=='DELIVERY_TASK_DONE'){
                //ContentCdi�����������Ϣ
                foreach($content->body->tasks->task as $val){
                    $attr=$val->attributes();
                    $children_id=(string)$attr['subcontent-id'];
                    break;
                }
                usleep(100); //��ʱ100΢������ѯ��������������δͬ����ȥ
                $cdi_repo = $mongo->getRepository("ContentCdi"); 
                $cdia = $cdi_repo->findOne(array('query'=>array('_id'=>$cdi->getId())));
                if($cdia){
                    $cdia -> setCommand('DELIVERY_TASK_DONE');
                    $cdia -> setSubcontentId($children_id);
                    $cdia -> save();
                }
                $backxmlstring=$this->getBackCdiString($header['sequence'],$header['component-id'],'DELIVERY_TASK_DONE');
                return $this->renderText($backxmlstring);
            }
            //return sfView::NONE; 
            $backxmlstring=$this->getBackCdiString($header['sequence'],$header['component-id'],$header['command']);
            return $this->renderText($backxmlstring);
        } 
    }
    //����
    private function videoDel($asset_id) {
        $mongo = $this->getMondongo();
        $video_repo = $mongo->getRepository("Video");  
        $wiki_repository = $mongo->getRepository("Wiki");
        $video = $video_repo->findOne(array('query'=>array('config.asset_id'=>(string)$asset_id)));
        if($video){
            $wiki_id=$video->getWikiId();
            //��ɾ����Ƶ�����¸�����Ƶ��
            $video -> delete();
            $wiki = $wiki_repository->findOneById(new MongoId($wiki_id));
            if($wiki){
                //$video_count = $wiki->getVideoCount();
                $video_count =  $video_repo->countVideosByWikiId($wiki_id);
                $wiki->setHasVideo($video_count);
                $wiki->save();
            }
        }
    }
    //����
    private function videoSave(&$importTemp,$children_id,$page_id) 
    {
        $mongo = $this->getMondongo();
        $video_repo = $mongo->getRepository("Video"); 
        $videoplaylist_repo = $mongo->getRepository("VideoPlaylist");
        $wikiRes = $mongo->getRepository('wiki');
        $wiki = $wikiRes->findOneById(new MongoId($importTemp->getWikiId()));
        if(!$wiki) return false;
        $title = $wiki->getTitle();
        $add_num=0;
        $update_num=0;
        if($wiki->getModel()=='film'){ 
            //��Ӱ
            $childrenids = $importTemp->getChildrenId();
            $childrenid = $childrenids[0]["ID"];
            $hdContent = $childrenids[0]["HD_Content"]?$childrenids[0]["HD_Content"]:'N';
            $fromId = $importTemp->getFromId();
            $url = ""; 
            $config = array("asset_id" => $childrenid,"from_id"=>$fromId,"hd_content"=>$hdContent);
            //�Ȳ�ѯ�Ƿ��ظ�,����ֻ����
            $query = array('referer'=>$importTemp->getProviderId(),'config.asset_id'=>$childrenid);
            $video=$video_repo->findOne(array('query'=>$query));
            if(!$video){
                $video = new Video();
                $add_num++;
            }else{
                $update_num++;
            }    
            $video->setWikiId((string)$wiki->getId());
            $video->setModel($wiki->getModel());
            $video->setTitle($childrenids[0]['Title']);
            $video->setUrl($url);
            $video->setConfig($config);
            $video->setReferer($importTemp->getProviderId());
            $video->setPublish(true);
            $video->setPageId($page_id);
            //$video->setVideoPlaylistId($videoPlaylistId);
            //$video->setTime();
            //$video->setMark(1);
            $video->save();
        }else{  
            //���Ӿ磬��Ŀ��
            //д��videoPlayList��,�Ȳ�ѯ�Ƿ��ظ�
            $fromId = $importTemp->getFromId();
            //$query = array('referer'=>$importTemp->getProviderId(),'wiki_id'=>(string)$wiki->getId());
            $query = array('referer'=>$importTemp->getProviderId(),'from_id'=>$fromId);
            $VideoPlaylist = $videoplaylist_repo->findOne(array('query'=>$query));
            if(!$VideoPlaylist){
                $VideoPlaylist = new VideoPlaylist();
                $VideoPlaylist->setTitle($title);
                //$VideoPlaylist->setUrl('');
                $VideoPlaylist->setReferer($importTemp->getProviderId());
                $VideoPlaylist->setWikiId((string)$wiki->getId());
                $VideoPlaylist->setFromId($fromId);
                $VideoPlaylist->save();
            }
            //����д��video��
            $videoPlaylistId = (string)$VideoPlaylist->getId();
            $childrenids = $importTemp->getChildrenId();
            foreach($childrenids as $childrenid)
            {
                //ֻ�ж�һ�����ɣ�Ŀǰ���ߵ�tasks�ﲻ���ж��task
                if($children_id==$childrenid['ID']){
                    $url = '';
                    $hdContent = $childrenid["HD_Content"]?$childrenid["HD_Content"]:'N';
                    $config = array("asset_id" => $childrenid['ID'],"from_id"=>$fromId,"hd_content"=>$hdContent);
                    $mark = $childrenid['Chapter'] ? $childrenid['Chapter'] : 0;
                    
                    $querya = array('referer'=>$importTemp->getProviderId(),'config.asset_id'=>$childrenid['ID']);
                    //��һ�֣���ɾ�������½���֮���Բ���remove�ķ�������Ϊ���������wiki��has_videoֵ��
                    /*
                    $videos=$video_repo->find(array('query'=>$querya));
                    foreach($videos as $rs){
                        $rs->delete();
                    }
                    $video = new Video();       
                    */             
                    //�ڶ���
                    $video=$video_repo->findOne(array('query'=>$querya));
                    if(!$video){
                        $video = new Video();
                        $add_num++;
                    }else{
                        $update_num++;
                    }
                    $video->setWikiId((string)$wiki->getId());
                    $video->setModel($wiki->getModel());
                    $video->setTitle($childrenid['Title']);
                    $video->setUrl($url);
                    $video->setConfig($config);
                    $video->setReferer($importTemp->getProviderId());
                    $video->setPublish(true);
                    $video->setVideoPlaylistId($videoPlaylistId);
                    //$video->setTime();
                    $video->setMark($mark);
                    $video->setPageId($page_id);
                    $video->save(); 
                }
            } 
        }
        $num=array('add'=>$add_num,'update'=>$update_num);
        return $num;
    }
    /**
     * ADI���ݽ���
     * @param sfRequest $request
     * @author lifucang
     * @update 2013-03-07
     */
    public function executeVod(sfWebRequest $request) 
	{
        if ($request->getMethod() == 'POST') { 
			if($request->getPostParameter('xmlString')){
				$jsonstr = $request->getPostParameter('xmlString');
			}else {
				$jsonstr = file_get_contents('php://input');
			}
            //$mongo = $this->getMondongo();
            $inject = new ContentInject();
            $inject->setFrom("cms");
            $inject->setState(0);
            $inject->setContent($jsonstr);            
            $inject->save();
            
            $execPath = sfConfig::get('app_exec_path');
            exec($execPath." tv:ContentImport");
            sleep(1);  //��ֹ��������̫�죬����exec($execPath." tv:ContentImport");������
            
            $content = @simplexml_load_string(trim($jsonstr));                
            $adi_md = $this->getMetadata($content->Metadata);
            $asset_md = $this->getMetadata($content->Asset->Metadata);
            //�첽����
            $backxmlstring = $this->getBackXmlString($adi_md['Asset_ID'], $adi_md['Asset_ID'], $asset_md['Show_Type'], 0, 'ok'); 
            $this->postCallBack($backxmlstring);  
            //ͬ����Ӧ
            $this->getResponse()->setContentType('text/plain');
            return $this->renderText('0 | ok');
            //return $this->renderText("{'stats' : 'ok'}");
        }
    }
    



    //ADI�첽����
    private function postCallBack($data) {
        $opts = array('http'=>array('method'=>"POST",
                                    'header'=>"Content-Type:text/plain\r\n",
                                    'content'=> $data));
        $bkUrl = sfConfig::get('app_cmsCenter_bkjsonVod');
        $url = "$bkUrl?action=adi1synccallback";
        return @file_get_contents($url, false, stream_context_create($opts));
    }
    //ADI�첽��������
    private function getBackXmlString($asset_id, $import_id, $type, $status, $desc = '') {
        $xml = "<?xml version = \"1.0\" encoding=\"utf-8\"?>";
        $xml .= "<SyncContentsResult Time_Stamp=\"".date("Y-m-d H:i:s")."\"  System_ID=\"epgdb\">"; 
        $xml .= "<Asset ID=\"".$asset_id."\"  Current_ID=\"".$import_id."\" Type=\"".$type."\"  Status=\"".$status."\" Desc=\"".$desc."\"></Asset>";
        $xml .= "</SyncContentsResult>";
        return $xml;
    }
    //������ͬ����������
    private function getBackCdiString($sequence, $componentid, $command) {
        $xml  = '<?xml version="1.0" encoding="UTF-8"?>';
        $xml .= '<message module="iCMS" version="1.0">'; 
        $xml .= '<header timestamp="'.date("Y-m-d H:i:s").'" sequence="'.$sequence.'" component-id="'.$componentid.'" component-type="iCMS" action="RESPONSE" command="'.$command.'" />';
        $xml .= '<body>';
        $xml .= '<result code="1" description="OK" />';
        $xml .= '</body>';
        $xml .= '</message>';
        return $xml;
    }
    

    //��ȡMeta��Ϣ
    private function getMetadata($Metadata) {
        $p = array();
        if(isset($Metadata)){
            $p = $this->getAttrs($Metadata->AMS);
            if(isset($Metadata->App_Data)){
                foreach($Metadata->App_Data as $key => $val) {
                    list($name,$value) = $this->getArrayByAttrs($val);
                    $p[$name] = $value;
                }  
            }
        }
        return $p;
    }

    //������д��������
    private function getArrayByAttrs($s) {
        foreach($s->attributes() as $key => $val) {
            if($key == "Name"){
                $Name = (string)$val;
            }
            if($key == "Value"){
                $Value = (string)$val;
            }
        }
        return array($Name,$Value);
    }

    private function getAttrs($s) {
        $arr=array();
        if(isset($s)){
            foreach($s->attributes() as $key => $val) {
               $arr[$key] = (string)$val;
            }  
        }
        return $arr;
    } 
}    
?>
