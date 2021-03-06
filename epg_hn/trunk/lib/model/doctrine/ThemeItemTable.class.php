<?php

/**
 * ThemeItemTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class ThemeItemTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object ThemeItemTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('ThemeItem');
    }
    /**
     * 根据专题ID获取items.
     *	
     * @return object 
     * author wangnan
     */    
    public static function getItemsByThemeId($tid)
    {
		$items    = Doctrine::getTable('ThemeItem')->createQuery()
					->where('theme_id=?', $tid)
					->execute();
		return $items;         
    }  
    /**
     * 查找专题下所有Wiki
     * @return object 
     * author lifucang
     */
    public static function getWikis($tid,$page=1,$size=10)
    {
    	$offset = $size * ($page-1);
    	if($offset<0)$offset = 0;
        $arr=array();
        $mongo = sfContext::getInstance()->getMondongo();
		$WikiRepository = $mongo->getRepository('Wiki');
		$items    = Doctrine::getTable('ThemeItem')->createQuery()
					->where('theme_id=?', $tid)
                    ->offset(intval($offset))
                    ->limit(intval($size))                    
					->execute();
		$theme    = Doctrine::getTable('Theme')->findOneById($tid);                    
        $i=0;            
        foreach($items as $item){
            $arr[$i]['remark']=$item->getRemark();
            $arr[$i]['title']=$theme->getTitle();
            $wiki = $WikiRepository->findOneById(new MongoId($item->getWikiId()));
            $arr[$i]['wiki']=array(
                'id'      => (string)$wiki->getId(),
                'title'   => $wiki->getTitle(),
                'slug'   => $wiki->getSlug(),
                "area"    => $wiki->getCountry() ? $wiki->getCountry():'',
                "type"    => $wiki->getTags() ? implode(',', $wiki->getTags()):'',
                "actors"  => $wiki->getStarring() ? implode(',', $wiki->getStarring()): '',
                "playdate"=> $wiki->getReleased() ? $wiki->getReleased():'',
                "cover"   => $wiki->getCover() ? $wiki->getCover() :'',
                "screens" => $wiki->getScreenshots() ? $wiki->getScreenshotUrls(167,125) : NULL,
            );
            $i++;
        }            
		return $arr; 
    }            
}