<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version3 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('user_details', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'name' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '100',
             ),
             'email_address' => 
             array(
              'type' => 'string',
              'notblank' => '1',
              'email' => '1',
              'unique' => '1',
              'length' => '255',
             ),
             'message' => 
             array(
              'type' => 'string',
              'notnull' => '',
              'length' => '5000',
             ),
             'created_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             'updated_at' => 
             array(
              'notnull' => '1',
              'type' => 'timestamp',
              'length' => '25',
             ),
             ), array(
             'primary' => 
             array(
              0 => 'id',
             ),
             ));
        $this->changeColumn('sf_guard_user', 'first_name', 'string', '255', array(
             ));
        $this->changeColumn('sf_guard_user', 'last_name', 'string', '255', array(
             ));
        $this->changeColumn('sf_guard_user', 'email_address', 'string', '255', array(
             'notnull' => '1',
             'unique' => '1',
             ));
        $this->changeColumn('sf_guard_user', 'username', 'string', '128', array(
             'notnull' => '1',
             'unique' => '1',
             ));
        $this->changeColumn('sf_guard_user', 'password', 'string', '128', array(
             ));
    }

    public function down()
    {
        $this->dropTable('user_details');
    }
}