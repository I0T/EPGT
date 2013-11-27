<?php

/**
 * Repository of ChannelUpdate document.
 */
class ChannelUpdateRepository extends \BaseChannelUpdateRepository
{
    /**
     * ͳ��ĳһʱ��εĸ���Ƶ��
     * @param <string> $start_time,$end_time��
     * @author lifucang
     */
    public function getChannels($start_time, $end_time ) {
        $start_time = new MongoDate(strtotime($start_time));
        $end_time   = new MongoDate(strtotime($end_time));  
        return $this->find(
                    array(
                        'query' => array(
                            'time' => array('$gte' => $start_time,'$lt' => $end_time),
                        )
                    )
                );        
    }    
}