<?php

/**
 * BaseChannel
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $code
 * @property string $name
 * @property string $memo
 * @property string $type
 * @property string $province
 * @property string $city
 * @property string $logo
 * @property integer $tv_station_id
 * @property integer $sort_id
 * @property integer $publish
 * @property enum $autosyn
 * @property string $config
 * @property integer $hot
 * @property timestamp $tvsou_update
 * @property timestamp $editor_update
 * @property integer $tvsou_get
 * @property timestamp $epg_update
 * @property integer $epg_get
 * @property integer $recommend
 * @property integer $like_num
 * @property integer $dislike_num
 * @property TvStation $TvStation
 * 
 * @method string    getCode()          Returns the current record's "code" value
 * @method string    getName()          Returns the current record's "name" value
 * @method string    getMemo()          Returns the current record's "memo" value
 * @method string    getType()          Returns the current record's "type" value
 * @method string    getProvince()      Returns the current record's "province" value
 * @method string    getCity()          Returns the current record's "city" value
 * @method string    getLogo()          Returns the current record's "logo" value
 * @method integer   getTvStationId()   Returns the current record's "tv_station_id" value
 * @method integer   getSortId()        Returns the current record's "sort_id" value
 * @method integer   getPublish()       Returns the current record's "publish" value
 * @method enum      getAutosyn()       Returns the current record's "autosyn" value
 * @method string    getConfig()        Returns the current record's "config" value
 * @method integer   getHot()           Returns the current record's "hot" value
 * @method timestamp getTvsouUpdate()   Returns the current record's "tvsou_update" value
 * @method timestamp getEditorUpdate()  Returns the current record's "editor_update" value
 * @method integer   getTvsouGet()      Returns the current record's "tvsou_get" value
 * @method timestamp getEpgUpdate()     Returns the current record's "epg_update" value
 * @method integer   getEpgGet()        Returns the current record's "epg_get" value
 * @method integer   getRecommend()     Returns the current record's "recommend" value
 * @method integer   getLikeNum()       Returns the current record's "like_num" value
 * @method integer   getDislikeNum()    Returns the current record's "dislike_num" value
 * @method TvStation getTvStation()     Returns the current record's "TvStation" value
 * @method Channel   setCode()          Sets the current record's "code" value
 * @method Channel   setName()          Sets the current record's "name" value
 * @method Channel   setMemo()          Sets the current record's "memo" value
 * @method Channel   setType()          Sets the current record's "type" value
 * @method Channel   setProvince()      Sets the current record's "province" value
 * @method Channel   setCity()          Sets the current record's "city" value
 * @method Channel   setLogo()          Sets the current record's "logo" value
 * @method Channel   setTvStationId()   Sets the current record's "tv_station_id" value
 * @method Channel   setSortId()        Sets the current record's "sort_id" value
 * @method Channel   setPublish()       Sets the current record's "publish" value
 * @method Channel   setAutosyn()       Sets the current record's "autosyn" value
 * @method Channel   setConfig()        Sets the current record's "config" value
 * @method Channel   setHot()           Sets the current record's "hot" value
 * @method Channel   setTvsouUpdate()   Sets the current record's "tvsou_update" value
 * @method Channel   setEditorUpdate()  Sets the current record's "editor_update" value
 * @method Channel   setTvsouGet()      Sets the current record's "tvsou_get" value
 * @method Channel   setEpgUpdate()     Sets the current record's "epg_update" value
 * @method Channel   setEpgGet()        Sets the current record's "epg_get" value
 * @method Channel   setRecommend()     Sets the current record's "recommend" value
 * @method Channel   setLikeNum()       Sets the current record's "like_num" value
 * @method Channel   setDislikeNum()    Sets the current record's "dislike_num" value
 * @method Channel   setTvStation()     Sets the current record's "TvStation" value
 * 
 * @package    epg2.0
 * @subpackage model
 * @author     Huan Tek
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseChannel extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('channel');
        $this->hasColumn('code', 'string', 50, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 50,
             ));
        $this->hasColumn('name', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('memo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('type', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('province', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('city', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('logo', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'default' => 0,
             'length' => 100,
             ));
        $this->hasColumn('tv_station_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('sort_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('publish', 'integer', 1, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 1,
             'length' => 1,
             ));
        $this->hasColumn('autosyn', 'enum', 1, array(
             'type' => 'enum',
             'length' => 1,
             'values' => 
             array(
              0 => 0,
              1 => 1,
             ),
             'default' => 0,
             ));
        $this->hasColumn('config', 'string', 4000, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 4000,
             ));
        $this->hasColumn('hot', 'integer', 11, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             'length' => 11,
             ));
        $this->hasColumn('tvsou_update', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('editor_update', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('tvsou_get', 'integer', 1, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('epg_update', 'timestamp', 25, array(
             'type' => 'timestamp',
             'length' => 25,
             ));
        $this->hasColumn('epg_get', 'integer', 1, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('recommend', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('like_num', 'integer', 1, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 1,
             ));
        $this->hasColumn('dislike_num', 'integer', 1, array(
             'type' => 'integer',
             'default' => 0,
             'length' => 1,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('TvStation', array(
             'local' => 'tv_station_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}