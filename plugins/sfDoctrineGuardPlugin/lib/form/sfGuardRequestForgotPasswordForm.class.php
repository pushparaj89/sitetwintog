<?php

/**
 * BasesfGuardRequestForgotPasswordForm for requesting a forgot password email
 *
 * @package    sfDoctrineGuardPlugin
 * @subpackage form
 * @author     Jonathan H. Wage <jonwage@gmail.com>
 * @version    SVN: $Id: BasesfGuardRequestForgotPasswordForm.class.php 23536 2009-11-02 21:41:21Z Kris.Wallsmith $
 */
class sfGuardRequestForgotPasswordForm extends BasesfGuardRequestForgotPasswordForm
{
  /**
   * @see sfForm
   */
  public function configure()
  {
  }
  public function isValid($table = null)
  {
      
      $values = $this->getValues();
      if(isset($values['email_address']) && $table ==null)
      {
      $this->user = Doctrine_Core::getTable('sfGuardUser')
        ->createQuery('u')
        ->where('u.email_address = ?', $values['email_address'])
        ->fetchOne();

      if ($this->user)
      {
        return true;
      } 
      }elseif($table !=null) {
//          echo $values['email_address'].$table;exit;
        $this->user = Doctrine_Core::getTable($table)
        ->createQuery('u')
        ->where('u.email_address = ?', $values['email_address'])
        ->fetchOne();
          if ($this->user)
          {
            return true;
          } else {
                return false;
          }
      }

  }
}