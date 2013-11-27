<?php

/**
 * program actions.
 *
 * @package    epg2.0
 * @subpackage program
 * @author     Huan Tek
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
sfContext::getInstance()->getConfiguration()->loadHelpers('GetFileUrl'); 
class programActions extends sfActions
{
    
    public static $typea = array("Series" => array('电视剧'),
                                "Movie" => array('电影'),
                                "Sports" => array('体育','田径','足球','篮球'),
                                "Entertainment" => array('综艺','娱乐','戏剧'),
                                "Cartoon" => array('少儿','动漫','动画'),
                                "Culture" => array('教育','科教','人文','文化','科学'),
                                "News" => array('综合','民生','财经'));
   /**
    * Executes index action
    *
    * @param sfRequest $request A request object
    */
    public function executeIndex(sfWebRequest $request)
    {
        $this->forward('default', 'module');
    }
    
    public function executeGetCurrentProgramByChannelname(sfWebRequest $request)
    {
        $mongo = sfContext::getInstance()->getMondongo();
        $channelname = $request->getParameter("channelname");
        if(!$channelname) {
            return $this->renderText(json_encode(null));
        } 
        $channel = $mongo->getRepository('SpService')->getSpByname($channelname);
        if(!$channel){
            return $this->renderText(json_encode(null));
        } 
        $program_repo = $mongo->getRepository('program');
        $program = $program_repo->getLiveProgramByChannel($channel->getChannelCode());
        if(!$program){
            return $this->renderText(json_encode(null));
        }        
        $wiki  = $program->getWiki();
        if(!$wiki){
            return $this->renderText(json_encode(null));
        } 
        $tag='';
        foreach($wiki['tags'] as $wikitag){
            foreach(self::$typea as $key=>$value){
                if(in_array($wikitag,$value)){
                    $tag = $key;
                    break 2; 
                }
            }
        }
        $nodeArray = array(
                    'name' => $program['name'],
                    'date' => $program['date'],
                    'start_time' => strtotime($program['date']." ".date("H:i",$program['start_time']->getTimestamp())),
                    'end_time' => strtotime($program['date']." ".date("H:i",$program['end_time']->getTimestamp())),
                    'wiki_id' => $program['wiki_id'],
                    'wiki_slug' => $wiki['slug'],
                    'wiki_cover' => file_url($wiki['cover']),
                    'channel_logo' => thumb_url($channel->getChannelLogo(),65,68),
                    'tags' => $wiki['tags'],
                    'tag' => $tag  //用于list页面获取当前节目类型
                ); 
        return $this->renderText(json_encode($nodeArray));            
    }
    public function executeGetCurrentProgramTagsByChannelname(sfWebRequest $request)
    {  
        $mongo = sfContext::getInstance()->getMondongo();
        $channelname = $request->getParameter("channelname");
        if(!$channelname) {
            return $this->renderText(json_encode(null));
        } 
        $channel = $mongo->getRepository('SpService')->getSpByname($channelname);
        if(!$channel){
            return $this->renderText(json_encode(null));
        } 
        $program_repo = $mongo->getRepository('program');
        $program = $program_repo->getLiveProgramByChannel($channel->getChannelCode());
        $tags=array();
        if($program){
            $wiki  = $program->getWiki();
            $tags = $wiki->getDirector() ? array_merge($wiki->getDirector(),$wiki['tags']) : $wiki['tags'];
            $tags = $wiki->getStarring() ? array_merge($wiki->getStarring(),$tags) : $tags;
        }
        if(count($tags)==0){
            $keyWord = $request->getParameter("keyword");
            if($keyWord!=''&&$keyWord!=null){
                $wikiRep = $mongo->getRepository('wiki');
                $wiki=$wikiRep->getWikiBySlug($keyWord);
                
                $wikitags=$wiki->getTags() ? implode(',', $wiki->getTags()):'';
                $directors=$wiki->getDirector()?implode(',', $wiki->getDirector()):'';
                $actors=$wiki->getStarring()?implode(',', $wiki->getStarring()):'';
                
                $mytags=$wikitags.','.$directors.','.$actors;
                $tags=explode(',',$mytags);
                $tags=array_filter($tags);  //去除空元素
                if (count($tags) > 1) {
                    shuffle($tags);                     //打乱标签
                    $tags = array_slice($tags, 0, 6);  //取两个相关的标签
                }  
            }
        }
        return $this->renderPartial('tags', array('tags'=>$tags));
    }    
}
