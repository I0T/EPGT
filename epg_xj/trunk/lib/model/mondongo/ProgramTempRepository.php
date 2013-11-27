<?php

/**
 * Repository of ProgramTemp document.
 */
class ProgramTempRepository extends \BaseProgramTempRepository
{
     /**
     * ��ȡһ��Ľ�Ŀ�б�
     * @param <string> $channel_code
     * @param <string> $date e: 2012-12-12
     * @return <array>
     * @author lifucang
     */
    public function getDayPrograms($channel_code, $date) {
        return $this->find(
                    array(
                        'query' => array(
                            'channel_code' => $channel_code,
                            'date' => $date
                        ),
                        'sort' => array('time' => 1)
                    )
                );

    }
    /**
     * ��ȡ���켰�Ժ�Ľ�Ŀ�б�
     * @param <string> $channel_code
     * @param <string> $date e: 2012-12-12
     * @return <array>
     * @author lifucang
     */
    public function getDaysPrograms($channel_code, $date) {
        return $this->find(
                    array(
                        'query' => array(
                            'channel_code' => $channel_code,
                            'date' => array('$gte'=>$date)
                        ),
                        'sort' => array('time' => 1)
                    )
                );

    }
    /**
     * ɾ��һ��Ľ�Ŀ�б�
     * @param <string> $channel_code
     * @param <string> $date e: 2012-09-20
     * @return <array>
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
     * ɾ�����켰�Ժ�Ľ�Ŀ�б�
     * @param <string> $channel_code
     * @param <string> $date e: 2012-09-20
     * @return <array>
     * @author lifucang
     */
    public function removeDaysPrograms($channel_code, $date) {
        return $this->remove(
                     array(
                            'channel_code' => $channel_code,
                            'date' => array('$gte'=>$date)
                        )
                );

    } 
}