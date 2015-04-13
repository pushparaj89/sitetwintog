<?php use_helper('I18N', 'Date') ?>
<?php include_partial('user/assets') ?>

<div id="sf_admin_container" class="sf_admin_edit">
  <div class="edit_title">
    <h1><?php echo __('Edit User', array(), 'messages') ?></h1>
  </div>
<br/>
  <?php include_partial('user/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('user/form_header', array('user_details' => $user_details, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('user/form', array('user_details' => $user_details, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('user/form_footer', array('user_details' => $user_details, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <?php include_partial('user/themeswitcher') ?>
</div>
