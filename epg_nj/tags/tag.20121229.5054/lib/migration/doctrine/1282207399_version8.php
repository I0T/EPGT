<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version8 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('ip', 'code', 'string', '32', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('ip', 'code');
    }
}