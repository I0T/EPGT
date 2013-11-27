<?php

/**
 * BaseIp
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $ip1
 * @property integer $ip2
 * @property string $province
 * @property string $city
 * @property string $code
 * 
 * @method integer getIp1()      Returns the current record's "ip1" value
 * @method integer getIp2()      Returns the current record's "ip2" value
 * @method string  getProvince() Returns the current record's "province" value
 * @method string  getCity()     Returns the current record's "city" value
 * @method string  getCode()     Returns the current record's "code" value
 * @method Ip      setIp1()      Sets the current record's "ip1" value
 * @method Ip      setIp2()      Sets the current record's "ip2" value
 * @method Ip      setProvince() Sets the current record's "province" value
 * @method Ip      setCity()     Sets the current record's "city" value
 * @method Ip      setCode()     Sets the current record's "code" value
 * 
 * @package    epg2.0
 * @subpackage model
 * @author     Huan Tek
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseIp extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('ip');
        $this->hasColumn('ip1', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('ip2', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('province', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('city', 'string', 10, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 10,
             ));
        $this->hasColumn('code', 'string', 32, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 32,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}