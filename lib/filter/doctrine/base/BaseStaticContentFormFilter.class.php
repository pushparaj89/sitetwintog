<?php

/**
 * StaticContent filter form base class.
 *
 * @package    sitetwintog
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseStaticContentFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'about_us'             => new sfWidgetFormFilterInput(),
      'about_us_img'         => new sfWidgetFormFilterInput(),
      'about_us_img_content' => new sfWidgetFormFilterInput(),
      'services_web'         => new sfWidgetFormFilterInput(),
      'services_seo'         => new sfWidgetFormFilterInput(),
      'services_app'         => new sfWidgetFormFilterInput(),
      'created_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'about_us'             => new sfValidatorPass(array('required' => false)),
      'about_us_img'         => new sfValidatorPass(array('required' => false)),
      'about_us_img_content' => new sfValidatorPass(array('required' => false)),
      'services_web'         => new sfValidatorPass(array('required' => false)),
      'services_seo'         => new sfValidatorPass(array('required' => false)),
      'services_app'         => new sfValidatorPass(array('required' => false)),
      'created_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('static_content_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'StaticContent';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'about_us'             => 'Text',
      'about_us_img'         => 'Text',
      'about_us_img_content' => 'Text',
      'services_web'         => 'Text',
      'services_seo'         => 'Text',
      'services_app'         => 'Text',
      'created_at'           => 'Date',
      'updated_at'           => 'Date',
    );
  }
}
