<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version20 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->addColumn('program_ext', 'date', 'date', '25', array(
             'notnull' => '1',
             ));
    }

    public function down()
    {
        $this->removeColumn('program_ext', 'date');
    }
}