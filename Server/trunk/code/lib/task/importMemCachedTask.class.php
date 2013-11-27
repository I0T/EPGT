<?php
/**
 * ����wiki��memcache���棨ͣ�ã�
 * 
 * @author superwen
 */
class importMemCachedTask extends sfMondongoTask
{
    protected function configure()
    {
        $this->addOptions(array(
            new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name', 'frontend'),
            new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'prod'),
            new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'mondongo'),
            // add your own options here
        ));

        $this->namespace    = 'tv';
        $this->name         = 'importMemCached';
        $this->briefDescription = '';
        $this->detailedDescription = <<<EOF
The [importMemCached|INFO] task does things.
Call it with:

    [php symfony importMemCached|INFO]
EOF;
    }

    protected function execute($arguments = array(), $options = array())
    {
        // initialize the database connection
        $databaseManager = new sfDatabaseManager($this->configuration);
        $connection = $databaseManager->getDatabase($options['connection'])->getConnection();
        $mcache = tvCache::getInstance();
        $mongo = $this->getMondongo();
        $dict_repository = $mongo->getRepository('dict');
        $options['query'] = array('keyword'=>array('$ne'=>NULL));
        $options['fields'] = array('keyword','wiki_id');
        $options['limit'] = 100;
        $options['sort'] = array("created_at" => 1);
        $dictCount = $dict_repository->count($options['query']);
        for($i=0; $i< $dictCount; $i=$i+$options['limit']){
                $options['skip'] = $i;
                $dictRes = $dict_repository->find($options);
                foreach($dictRes as $obj){
                        $wikiId = $obj->getWikiId();
                        $keyword = $obj->getKeyword();
                        $id = (string)$obj->getId();
                        if(empty($keyword)) continue;
                        print_r($wikiId."\t");
                        $mcache->set($keyword, $wikiId);
                        print_r($keyword."\t");
                        print_r($mcache->get($keyword)."\n");
                }
                if($i==100) break;

        }        
    }
}
