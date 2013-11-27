<?php

/**
 * Repository of ProgramWeek document.
 */
class ProgramWeekRepository extends \BaseProgramWeekRepository
{
    /**
     * ��ȡһ��Ľ�Ŀ�б�
     * @author lifucang 2013-09-06
     */
    public function getDayPrograms($channel_code, $date) {
        $programs=$this->find(
                    array(
                        'query' => array(
                            'channel_code' => $channel_code,
                            'date' => $date
                        ),
                        'sort' => array('time' => 1)
                    )
        );
        return $programs;
    }
    /**
     * ɾ��һ��Ľ�Ŀ�б�
     * @editor 2013-09-09
     * @author lifucang
     */
    public function removeDayPrograms($channel_code, $date) {
        return $this->remove(
                     array(
                            'channel_code' => $channel_code,
                            'date' => $date
                        )
                );

    } 
    /**
     * ͳ��ĳƵ��ĳһ���Ƿ��н�Ŀ
     * @param <string> $channel_code,$date
     * @param <string> $date 2013-09-09
     * @author lifucang
     */
    public function countDayPrograms($channel_code, $date,$isWiki=false) {
        if($isWiki){
            $query=array(
                            'channel_code' => $channel_code,
                            'date' => $date,
                            'wiki_id' => array('$exists' => true)
                        );
        }else{
            $query=array(
                            'channel_code' => $channel_code,
                            'date' => $date
                        );
        }
        return $this->count($query);
    }
}