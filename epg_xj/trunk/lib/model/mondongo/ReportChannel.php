<?php

/**
 * ReportChannel document.
 */
class ReportChannel extends \BaseReportChannel
{
	/*
     * ���Ƶ������
     * @author lifucang 
     */
    public function add($dtvsp,$name) {
    	$this->setDtvsp($dtvsp);
        $this->setName($name);
        $this->setState(false);
        parent::save();

    }  
}