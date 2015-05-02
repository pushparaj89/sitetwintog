<?php

/**
 * StaticContent form base class.
 *
 * @method StaticContent getObject() Returns the current form's model object
 *
 * @package    sitetwintog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseStaticContentForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'           => new sfWidgetFormInputHidden(),
      'about_us'     => new sfWidgetFormTextarea(),
      'about_us_img' => new sfWidgetFormInputText(),
      'services_web' => new sfWidgetFormTextarea(),
      'services_seo' => new sfWidgetFormTextarea(),
      'services_app' => new sfWidgetFormTextarea(),
      'created_at'   => new sfWidgetFormDateTime(),
      'updated_at'   => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'about_us'     => new sfValidatorString(array('max_length' => 10000, 'required' => false)),
      'about_us_img' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'services_web' => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'services_seo' => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'services_app' => new sfValidatorString(array('max_length' => 5000, 'required' => false)),
      'created_at'   => new sfValidatorDateTime(),
      'updated_at'   => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('static_content[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContent';
  }

}
