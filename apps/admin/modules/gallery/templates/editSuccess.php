<?php use_helper('I18N', 'Date') ?>
<?php include_partial('gallery/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit ui-widget ui-widget-content ui-corner-all">
  <div class="edit_title fg-toolbar ui-widget-header ui-corner-all">
    <h1><?php echo __('Edit Gallery', array(), 'messages') ?></h1>
  </div>
<br/>
  <?php include_partial('gallery/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('gallery/form_header', array('gallery' => $gallery, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('gallery/form', array('gallery' => $gallery, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('gallery/form_footer', array('gallery' => $gallery, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('gallery/themeswitcher') ?>
</div>
