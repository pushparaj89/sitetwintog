<?php

/**
 * OurTeam form base class.
 *
 * @method OurTeam getObject() Returns the current form's model object
 *
 * @package    sitetwintog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseOurTeamForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'employee_id'          => new sfWidgetFormInputText(),
      'employee_name'        => new sfWidgetFormInputText(),
      'employee_designation' => new sfWidgetFormInputText(),
      'employee_img'         => new sfWidgetFormInputText(),
      'employee_bio'         => new sfWidgetFormTextarea(),
      'created_at'           => new sfWidgetFormDateTime(),
      'updated_at'           => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'employee_id'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'employee_name'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'employee_designation' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'employee_img'         => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'employee_bio'         => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'created_at'           => new sfValidatorDateTime(),
      'updated_at'           => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('our_team[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'OurTeam';
  }

}
