<?php

/**
 * Default actions.
 *
 * @package    sitetwintog
 * @subpackage Default
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class DefaultActions extends sfActions
{
  public function executeIndex(sfWebRequest $request)
  {
    $this->gallerys = Doctrine_Core::getTable('Gallery')
      ->createQuery('a')
      ->execute();
      $this->static_content = Doctrine_Core::getTable('StaticContent')
          ->createQuery('s')
          ->execute();
      $this->our_team = Doctrine_Core::getTable('OurTeam')
          ->createQuery('s')
          ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new GalleryForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new GalleryForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new GalleryForm($gallery);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $this->form = new GalleryForm($gallery);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($gallery = Doctrine_Core::getTable('Gallery')->find(array($request->getParameter('id'))), sprintf('Object gallery does not exist (%s).', $request->getParameter('id')));
    $gallery->delete();

    $this->redirect('Default/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $gallery = $form->save();

      $this->redirect('Default/edit?id='.$gallery->getId());
    }
  }
  
  public function executeContactSave(sfWebRequest $request){
        if($request->isMethod(sfRequest::POST)){
            $name = $request->getParameter('name');
            $email = $request->getParameter('email');
            $message = $request->getParameter('message');
            $obj = new UserDetails();
            $obj->setName($name);
            $obj->setEmailAddress($email);
            $obj->setMessage($message);
            $obj->save();
             $this->sendEmailAdmin($obj);
            echo "Done"; 
           
        }else{
            echo 'access restricted'; 
        }
        exit;
  }
    public function sendEmailAdmin($userDetails)
    {
        $to      = 'pushparaj.g.89@gmail.com';
        $subject = 'User Enquiry';
        $message = '<table>
                                        <tbody>
                                        <tr>
                                            <td> Hi Admin, </td>
                                            <td style="padding-top:15px;"></td>
                                        </tr>
                                        <tr>
                                                <td>Name</td>
                                                <td> : </td>
                                                <td> '.  ucfirst($userDetails->getName()) .' </td>
                                        </tr>
                                        <tr>
                                                <td>Email Address</td>
                                                <td> : </td>
                                                <td> '.  $userDetails->getEmailAddress() .' </td>
                                        </tr>
                                        <tr>
                                                <td>Number of people attending</td>
                                                <td> : </td>
                                                <td> '.  $userDetails->getMessage() .' </td>
                                        </tr>
                                        <tr>
                                            <td style="padding-top:15px;"></td>
                                        </tr>
                                        <tr>
                                                <td>Thanks</td>
                                        </tr>                                        
                                        <tr>
                                                <td>Twintog Team</td>
                                        </tr>                                        
                                        </tbody>
                                </table>';

        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

        // Additional headers

        $headers .= 'From: Admin <noreply@twintog.com>' . "\r\n";

        mail($to, $subject, $message, $headers);
    }
}
