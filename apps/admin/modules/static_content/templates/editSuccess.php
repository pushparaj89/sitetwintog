<?php use_helper('I18N', 'Date') ?>
<?php include_partial('static_content/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="edit_title fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('Edit Static content', array(), 'messages') ?></h1>
  </div>
<br/>
  <?php include_partial('static_content/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('static_content/form_header', array('static_content' => $static_content, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('static_content/form', array('static_content' => $static_content, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('static_content/form_footer', array('static_content' => $static_content, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('static_content/themeswitcher') ?>
</div>
