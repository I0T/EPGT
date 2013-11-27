<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('UserExt', 'master');

/**
 * BaseUserExt
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $user_id
 * @property string $user_key
 * @property string $user_value
 * @property timestamp $created_at
 * @property timestamp $updated_at
 * 
 * @method integer   getId()         Returns the current record's "id" value
 * @method integer   getUserId()     Returns the current record's "user_id" value
 * @method string    getUserKey()    Returns the current record's "user_key" value
 * @method string    getUserValue()  Returns the current record's "user_value" value
 * @method timestamp getCreatedAt()  Returns the current record's "created_at" value
 * @method timestamp getUpdatedAt()  Returns the current record's "updated_at" value
 * @method UserExt   setId()         Sets the current record's "id" value
 * @method UserExt   setUserId()     Sets the current record's "user_id" value
 * @method UserExt   setUserKey()    Sets the current record's "user_key" value
 * @method UserExt   setUserValue()  Sets the current record's "user_value" value
 * @method UserExt   setCreatedAt()  Sets the current record's "created_at" value
 * @method UserExt   setUpdatedAt()  Sets the current record's "updated_at" value
 * 
 * @package    epg
 * @subpackage model
 * @author     Mozi Tek
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseUserExt extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('user_ext');
        $this->hasColumn('id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'autoincrement' => true,
             'length' => 8,
             ));
        $this->hasColumn('user_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => false,
             'autoincrement' => false,
             'length' => 8,
             ));
        $this->hasColumn('user_key', 'string', 50, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 50,
             ));
        $this->hasColumn('user_value', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => '',
             ));
        $this->hasColumn('created_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
        $this->hasColumn('updated_at', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'autoincrement' => false,
             'length' => 25,
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}