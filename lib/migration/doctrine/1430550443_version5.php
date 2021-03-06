<?php
/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Version5 extends Doctrine_Migration_Base
{
    public function up()
    {
        $this->createTable('our_team', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'employee_id' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'employee_name' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'employee_designation' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'employee_img' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'employee_bio' => 
             array(
              'type' => 'string',
              'length' => '10000',
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
        $this->createTable('static_content', array(
             'id' => 
             array(
              'type' => 'integer',
              'length' => '8',
              'autoincrement' => '1',
              'primary' => '1',
             ),
             'about_us' => 
             array(
              'type' => 'string',
              'length' => '10000',
             ),
             'about_us_img' => 
             array(
              'type' => 'string',
              'length' => '255',
             ),
             'services_web' => 
             array(
              'type' => 'string',
              'length' => '5000',
             ),
             'services_seo' => 
             array(
              'type' => 'string',
              'length' => '5000',
             ),
             'services_app' => 
             array(
              'type' => 'string',
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
    }

    public function down()
    {
        $this->dropTable('our_team');
        $this->dropTable('static_content');
    }
}