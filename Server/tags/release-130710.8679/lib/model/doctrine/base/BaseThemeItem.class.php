<?php

/**
 * BaseThemeItem
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $theme_id
 * @property string $wiki_id
 * @property string $remark
 * @property string $img
 * @property Theme $Theme
 * 
 * @method integer   getThemeId()  Returns the current record's "theme_id" value
 * @method string    getWikiId()   Returns the current record's "wiki_id" value
 * @method string    getRemark()   Returns the current record's "remark" value
 * @method string    getImg()      Returns the current record's "img" value
 * @method Theme     getTheme()    Returns the current record's "Theme" value
 * @method ThemeItem setThemeId()  Sets the current record's "theme_id" value
 * @method ThemeItem setWikiId()   Sets the current record's "wiki_id" value
 * @method ThemeItem setRemark()   Sets the current record's "remark" value
 * @method ThemeItem setImg()      Sets the current record's "img" value
 * @method ThemeItem setTheme()    Sets the current record's "Theme" value
 * 
 * @package    epg2.0
 * @subpackage model
 * @author     Huan Tek
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseThemeItem extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('theme_item');
        $this->hasColumn('theme_id', 'integer', 8, array(
             'type' => 'integer',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'length' => 8,
             ));
        $this->hasColumn('wiki_id', 'string', 32, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'default' => '0',
             'notnull' => true,
             'length' => 32,
             ));
        $this->hasColumn('remark', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'length' => 250,
             ));
        $this->hasColumn('img', 'string', 250, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => false,
             'notnull' => true,
             'length' => 250,
             ));

        $this->option('type', 'MyISAM');
        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Theme', array(
             'local' => 'theme_id',
             'foreign' => 'id'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}