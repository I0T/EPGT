<?php

/**
 * Programe_user document.
 */
class Programe_user extends \BasePrograme_user
{
	/*
     * ���ԤԼ��Ŀ
     * @author lifucang 
     */
    public function add($user_id,$channel_code,$name,$start_time) {
        
    	$this->setUserId($user_id);
        $this->setChannelCode($channel_code);
        $this->setName($name);
        $this->setStartTime($start_time);
        parent::save();

    }
}