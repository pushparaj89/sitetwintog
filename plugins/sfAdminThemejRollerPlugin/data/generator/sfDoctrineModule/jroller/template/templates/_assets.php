<?php if (sfConfig::get('app_sf_admin_theme_jroller_plugin_css_reset')): // reset css ?>
  [?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/css/reset.css' ?>', 'first') ?]
<?php endif; ?>

<?php if (sfConfig::get('app_sf_admin_theme_jroller_plugin_use_jquery')): // use jQuery ?>
  [?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/js/jquery.min.js' ?>', 'first') ?]
  [?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/js/jquery-ui.custom.min.js' ?>', 'first') ?]
<?php endif; ?>

<?php if (sfConfig::get('app_sf_admin_theme_jroller_plugin_theme_switcher')): // theme switcher ?>
  [?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_theme_dir', '/sfAdminThemejRollerPlugin/css/jquery').'/base/ui.all.css' ?>') ?]
<?php else: // specific theme ?>
  [?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_theme_dir', '/sfAdminThemejRollerPlugin/css/jquery').'/'.sfConfig::get('app_sf_admin_theme_jroller_plugin_theme', 'redmond').'/jquery-ui.custom.css' ?>') ?]
<?php endif; ?>

<?php if (isset($this->params['css'])): // custom CSS ?>
  [?php use_stylesheet('<?php echo $this->params['css'] ?>') ?]
<?php else: // jRoller CSS ?>
  [?php use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/css/jroller.css' ?>') ?]
<?php endif; ?>

[?php // additionnal stylesheet (filament group)
  use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/css/fg.menu.css' ?>');
  use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/css/fg.buttons.css' ?>');
  use_stylesheet('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/css/ui.selectmenu.css' ?>');
?]

[?php // additionnal javascript (filament group)
  use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/js/fg.menu.js' ?>');
  use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/js/jroller.js' ?>');
  use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/js/ui.selectmenu.js' ?>');
?]

<?php if (sfConfig::get('app_sf_admin_theme_jroller_plugin_theme_switcher')): // use theme switcher ?>
  [?php use_javascript('<?php echo sfConfig::get('app_sf_admin_theme_jroller_plugin_web_dir', '/sfAdminThemejRollerPlugin').'/js/themeswitcher.js' ?>') ?]
<?php endif; ?>
<div class="sf_admin_heading ui-widget" align="right" >
<?php if(sfConfig::get('app') == 'admin'): ?>
<?php if($this->getModuleName() == 'trainee' or $this->getModuleName() == 'members'): ?>
<a href="[?php echo url_for('<?php echo $this->getModuleName() ?>/mailinglist') ?]" style="padding-right:10px;text-decoration:none;color:#2e2e2e; ">Export for mailinglist</a>
<?php endif; ?>
<?php endif; ?>
<?php if($this->getExtraValue('csv')): ?>
<?php $csv = $this->getExtraValue('csv'); ?>
[?php if($sf_context->getInstance()->getActionName() == 'index' or $sf_context->getInstance()->getActionName() == 'generate'): ?]
<script type="text/javascript" >
  function export_csv(){
    var csv_field = document.getElementById('csv');
    csv_field.value = 1;
    var forms = document.getElementsByTagName("form")
    for (var i=0; i<forms.length; i++){
        var action = forms[i].action;
        if(action.match('filter') != null){
            forms[i].submit();
        }
    }
    csv_field.value = 0;
  }
</script>
<a href="#" onclick="export_csv()" id="csv_button" style="padding-right:10px;text-decoration:none;color:#2e2e2e;"><?php echo $csv['label']; ?></a>
[?php endif; ?]
<?php endif; ?>

<?php if($this->getExtraValue('print')): ?>
<?php $print = $this->getExtraValue('print'); ?>
[?php if($sf_context->getInstance()->getActionName() == 'index' or $sf_context->getInstance()->getActionName() == 'generate'): ?]
<a href="[?php echo url_for('<?php echo $this->getUrlForAction('print', false) ?>') ?]" target="_blank" id="print_button"  style="padding-right:50px;text-decoration:none;color:#2e2e2e;"><?php echo $print['label']; ?></a>
[?php endif; ?]
<?php endif; ?>
</div>
