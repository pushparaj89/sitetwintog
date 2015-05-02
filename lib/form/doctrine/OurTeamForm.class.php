<?php

/**
 * OurTeam form.
 *
 * @package    sitetwintog
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class OurTeamForm extends BaseOurTeamForm
{
  public function configure()
  {
      unset($this['created_at'],$this['updated_at']);
      if($this->getObject()->getEmployeeImg() != '')
          $path_proof = '<a target="_blank" href="/uploads/image_url/'.$this->getObject()->getEmployeeImg().'"><strong>Download</strong></a>';
      else
          $path_proof = null;

      $this->widgetSchema['employee_img'] = new sfWidgetFormInputFileEditable(array('file_src'=>$path_proof, 'is_image'=> false, 'with_delete'=>false), array('class'=>'edit_photo'));
      $this->setValidator('employee_img', new sfValidatorFile(array(
              'required'=>false,
              'path' => sfConfig::get('sf_upload_dir').'/image_url',
              'mime_types'=> array(
                  'image/jpeg', 'image/pjpeg', 'image/png', 'image/x-png', 'image/gif',
                  'text/plain',
                  'application/vnd.ms-office',
                  'application/msword',
                  'application/pdf',
                  'application/rtf',
                  'application/zip',
                  'application/x-zip',
                  'application/gz',
                  'application/x-zip',
                  'application/gtar',
                  'application/x-tar',
                  'application/vnd.ms-excel',
                  'application/vnd.ms-powerpoint',
                  'application/vnd.oasis.opendocument.text', 'application/octet-stream'
              ))
      ));

  }
}
