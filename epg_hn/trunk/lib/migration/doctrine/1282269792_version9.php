<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version9 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('menu', 'notes', 'string', '100', array(
             ));
    }

    public function down()
    {
        $this->removeColumn('menu', 'notes');
    }
}