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


<form action="<?php echo url_for('@sf_guard_forgot_password_change?unique_key='.$sf_request->getParameter('unique_key')) ?>" method="POST">
  <table width="80%" cellpadding="0" cellspacing="0" border="1px" class="ui-state-default ui-th-column ui-corner-bottom">
    
        <tbody class="ui-widget-content">
            <tr>
                <td colspan="2" style="padding: 5px;">
                    <h2><?php echo __('Hello %name%', array('%name%' => $user->getName()), 'sf_guard') ?></h2>

<h3><?php echo __('Enter your new password in the form below.', null, 'sf_guard') ?></h3>
                </td>
            </tr>
        	<tr>
                <td colspan="2">                
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
            </tr><tr>
    <td>
      <?php echo $form ?>
    
    <tfoot><tr><td><input type="submit" name="change" value="<?php echo __('Change', null, 'sf_guard') ?>" /></td></tr></tfoot>
  </table>
        
</form>

</div>
  </center>