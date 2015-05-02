<?php use_helper('I18N', 'Date') ?>
<?php include_partial('our_team/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="edit_title fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('Edit Our team', array(), 'messages') ?></h1>
  </div>
<br/>
  <?php include_partial('our_team/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('our_team/form_header', array('our_team' => $our_team, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('our_team/form', array('our_team' => $our_team, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('our_team/form_footer', array('our_team' => $our_team, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('our_team/themeswitcher') ?>
</div>
