<?php

require_once dirname(__FILE__).'/../lib/BasesfGuardForgotPasswordActions.class.php';

/**
 * sfGuardForgotPassword actions.
 * 
 * @package    sfGuardForgotPasswordPlugin
 * @subpackage sfGuardForgotPassword
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 12534 2008-11-01 13:38:27Z Kris.Wallsmith $
 */
class sfGuardForgotPasswordActions extends BasesfGuardForgotPasswordActions
{
    public function preExecute()
  {
    if ($this->getUser()->isAuthenticated())
    {
      $this->redirect('@homepage');
    }
  }

  public function executeIndex($request)
  {
    $this->form = new sfGuardRequestForgotPasswordForm();

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $this->user = $this->form->user;
        $this->_deleteOldUserForgotPasswordRecords();

        $forgotPassword = new sfGuardForgotPassword();
        $forgotPassword->user_id = $this->form->user->id;
        $forgotPassword->unique_key = md5(rand() + time());
        $forgotPassword->expires_at = new Doctrine_Expression('NOW()');
        $forgotPassword->save();

        $message = Swift_Message::newInstance()
          ->setFrom(array(sfConfig::get('app_from_email', 'from@noreply.com') => 'GSA Webmaster'))                
          ->setTo($this->form->user->email_address)
          ->setSubject('Forgot Password Request for '.$this->form->user->username)
          ->setBody($this->getPartial('sfGuardForgotPassword/send_request', array('user' => $this->form->user, 'forgot_password' => $forgotPassword)))
          ->setContentType('text/html')
        ;

        $this->getMailer()->send($message);

        $this->getUser()->setFlash('notice', 'Check your e-mail! You should receive something shortly!');
        $this->redirect('@sf_guard_signin');
      } else {
        $this->getUser()->setFlash('error', 'Invalid e-mail address!');
      }
    }
  }

  public function executeChange($request)
  {
    $this->forgotPassword = Doctrine::getTable('sfGuardForgotPassword')->findOneByUniqueKey($request->getParameter('unique_key'));
    if($this->forgotPassword){
    $this->user = Doctrine::getTable('sfGuardUser')->find($this->forgotPassword->getUserId());
    $this->form = new sfGuardChangeUserPasswordForm($this->user);
    }else  $this->redirect('@sf_guard_signin');

    if ($request->isMethod('post'))
    {
      $this->form->bind($request->getParameter($this->form->getName()));
      if ($this->form->isValid())
      {
        $this->form->save();

        $this->_deleteOldUserForgotPasswordRecords();

        $message = Swift_Message::newInstance()
          ->setFrom(array(sfConfig::get('app_from_email', 'from@noreply.com') => 'GSA Webmaster'))
          ->setTo($this->user->email_address)
          ->setSubject('New Password for '.$this->user->username)
          ->setBody($this->getPartial('sfGuardForgotPassword/new_password', array('user' => $this->user, 'password' => $request['sf_guard_user']['password'])))
        ;

        $this->getMailer()->send($message);

        $this->getUser()->setFlash('notice', 'Password updated successfully!');
        $this->redirect('@sf_guard_signin');
      }
    }
  }

  private function _deleteOldUserForgotPasswordRecords()
  {
    Doctrine_Core::getTable('sfGuardForgotPassword')
      ->createQuery('p')
      ->delete()
      ->where('p.user_id = ?', $this->user->id)
      ->execute();
  }
}
