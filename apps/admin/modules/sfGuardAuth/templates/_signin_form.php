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


<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">

    <table width="80%" cellpadding="0" cellspacing="0" border="1px" class="ui-state-default ui-th-column ui-corner-bottom" style="margin-top: 170px">
    <caption class="ui-state-active fg-toolbar ui-widget-header ui-corner-top">
     <strong>Sign In</strong>
    </caption>
        <tbody class="ui-widget-content">
        	<tr>
                <td colspan="2">
                <br/>
                <?php if($form->hasErrors()): ?> 
                <div class="ui-state-error" style="padding:10px">
                <ul style="padding-left: 20px">
                <?php foreach($form->getErrorSchema() as $error): ?>
                	<li><?php echo $error->getMessage(); ?></li>
                <?php endforeach; ?>
                </ul>
                </div>
                <?php endif; ?>
                <br/>
                </td>
            </tr>
            <tr>
                <td width="40%" style="padding-left:15px;"><label for="signin_username">Username or E-Mail</label></td>
                <td><input type="text" name="signin[username]" id="signin_username" /></td>
            </tr>
            <tr>
                <td colspan="2" height="20px"></td>
            </tr>
            <tr>
                <td width="40%" style="padding-left:15px;"><label for="signin_password">Password</label></td>
                <td><input type="password" name="signin[password]" id="signin_password" /></td>
            </tr>
            <?php //if (is_array($ip_addresses) && in_array($this->request->getRemoteAddress(), $ip_addresses))
                    //{ ?>
            <tr>
                <td colspan="2" height="30px"><?php echo $form['_csrf_token']->render();?> &nbsp;</td>
            </tr>
            <?php //} ?>
        </tbody>
        <tfoot class="ui-state-active">
        <tr>
                <td colspan="2" height="10px"></td>
            </tr>
            <tr>
            <td></td>
                <td >
                    <input class="ui-button ui-state-default ui-corner-all" type="submit" value="<?php echo __('Sign in', null, 'sf_guard') ?>" />
                            
          <?php $routes = $sf_context->getRouting()->getRoutes() ?>
          <?php if (isset($routes['sf_guard_forgot_password'])): ?>
                    <a style="margin-left: 20px;  vertical-align: middle;" href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
          <?php endif; ?>

          <?php if (isset($routes['sf_guard_register'])): ?>
            &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
          <?php endif; ?>
        </td>
      </tr>
      <tr>
                <td colspan="2" height="10px"></td>
            </tr>
    </tfoot>
  </table>


</form>


</div>
  </center>