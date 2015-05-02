<?php

/**
 * OurTeam filter form base class.
 *
 * @package    sitetwintog
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseOurTeamFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'employee_id'          => new sfWidgetFormFilterInput(),
      'employee_name'        => new sfWidgetFormFilterInput(),
      'employee_designation' => new sfWidgetFormFilterInput(),
      'employee_img'         => new sfWidgetFormFilterInput(),
      'employee_bio'         => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'employee_id'          => new sfValidatorPass(array('required' => false)),
      'employee_name'        => new sfValidatorPass(array('required' => false)),
      'employee_designation' => new sfValidatorPass(array('required' => false)),
      'employee_img'         => new sfValidatorPass(array('required' => false)),
      'employee_bio'         => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('our_team_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OurTeam';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'employee_id'          => 'Text',
      'employee_name'        => 'Text',
      'employee_designation' => 'Text',
      'employee_img'         => 'Text',
      'employee_bio'         => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
