<?php

/**
 * WikiLiverecommend document.
 */
class WikiLiverecommend extends \BaseWikiLiverecommend
{
    /**
     * ���ݱ����
     * @author zhigang
     */
    public function postSave() 
    {        
        $memcache = tvCache::getInstance();
        $memcache_key = "Wiki_findAllLiveRec";
        $memcache->delete($memcache_key);
    }
    
    /**
     * ���ݸ��º�
     * @author wangnan
     */   
	public function postUpdate() 
	{     
        $memcache = tvCache::getInstance();
        $memcache_key = "Wiki_findAllLiveRec";
        $memcache->delete($memcache_key);
	}
    
    /**
     * ����ɾ����
     */
    public function postDelete() 
    {         
        $memcache = tvCache::getInstance();
        $memcache_key = "Wiki_findAllLiveRec";
        $memcache->delete($memcache_key);
    }
}