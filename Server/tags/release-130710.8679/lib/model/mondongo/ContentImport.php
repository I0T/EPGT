<?php

/**
 * ContentImport document.
 */
class ContentImport extends \BaseContentImport
{
    protected $wiki = null;
     /**
     * �ֶ�set����
     * @param <type> $field
     * @param <type> $value
     */     
    public function setPropety($field, $value) {
        if (null == $value && null == $this->data["fields"][$field]) {
            return ;
        }
        if (!array_key_exists($field, $this->fieldsModified)) {
            $this->fieldsModified[$field] = $this->data['fields'][$field];
        } elseif ($value === $this->fieldsModified[$field]) {
            unset($this->fieldsModified[$field]);
        }
        $this->data["fields"][$field]   = $value;
    }
	
 	/**
     * ��ȡ������wiki����
     * @return <obj>
     * @author pjl
     */
    public function getWiki() {
        if (!isset($this->wiki)) {
            $wiki_id = $this->getWikiId();
            if($wiki_id) {
                $mondongo = $this->getMondongo();
                $wiki_repository = $mondongo->getRepository('Wiki');
                $this->wiki = $wiki_repository->findOneById(new MongoID($wiki_id));
            }
        }
        return $this->wiki;
    }
 	/**
     * ��ȡ������inject����
     * @return <obj>
     * @author lifucang 2013-06-04
     */
    public function getInject() {
        $inject_id = $this->getInjectId();
        if($inject_id) {
            $mondongo = $this->getMondongo();
            $inject_repository = $mondongo->getRepository('ContentInject');
            $inject = $inject_repository->findOneById(new MongoId($inject_id));
        }
        if($inject){
            return $inject->getContent();
        }else{
            return null;
        }
    }      
    /**
     * ��ȡwiki����
     * @return <string>
     * @author pjl
     */
    public function getWikiTitle() {
        $wiki_title = '';
        $this->wiki = $this->getWiki();
        if($this->wiki) {
            $wiki_title = $this->wiki->getTitle();
        }
        return $wiki_title;
    }
}