<?php use_helper('I18N') ?>
<?php 
use_stylesheet('reset.css');
use_stylesheet('jquery/gsa/jquery-ui.custom.css');
use_stylesheet('jroller.css');
use_stylesheet('fg.menu.css');
use_stylesheet('fg.buttons.css');
use_stylesheet('ui.selectmenu.css');
?>
<center>

<div class="ui-grid-table ui-widget ui-corner-all ui-helper-reset ui-helper-clearfix" style="width:450px; margin:auto;">




<form action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post" >
  <table width="80%" cellpadding="0" cellspacing="0" border="1px" class="ui-state-default ui-th-column ui-corner-bottom" >
    <caption class="ui-state-active fg-toolbar ui-widget-header ui-corner-top">
     <strong><h2><?php echo __('Forgot your password?', null, 'sf_guard') ?></h2></strong>
    </caption>
        <tbody class="ui-widget-content">
            <tr>
                <td colspan="2" style="padding: 5px;">
                    <p>
  <?php echo __('Do not worry, we can help you get back in to your account safely!', null, 'sf_guard') ?>
  <?php echo __('Fill out the form below to request an e-mail with information on how to reset your password.', null, 'sf_guard') ?>
</p>
                </td>
            </tr>
        	<tr>
                <td colspan="2" style="padding: 5px;">
                
                <?php if($form->hasErrors()): ?> 
                <div class="ui-state-error" style="padding:10px">
                <ul style="padding-left: 20px">
                <?php foreach($form->getErrorSchema() as $error): ?>
                	<li><?php echo $error->getMessage(); ?></li>
                <?php endforeach; ?>
                </ul>
                </div>
                <?php endif; ?>
                
                </td>
            </tr>
            <tr>
                <td colspan="2" style="padding: 5px;">
                
                <?php if($sf_user->hasFlash("error")): ?> 
                <div class="ui-state-error" style="padding:10px">
                <?php echo $sf_user->getFlash("error")?>
                </ul>
                </div>
                <?php endif; ?>
                
                </td>
            </tr>
      <?php echo $form ?>
            <tr><td>&nbsp;</td><td></td></tr>
    </tbody>
    
    <tfoot>
        
        <tr><td></td><td style=""><input  class="ui-button ui-state-default ui-corner-all" type="submit" name="change" value="<?php echo __('Request', null, 'sf_guard') ?>" /></td></tr></tfoot>
  </table>
</form>


</div>
  </center>