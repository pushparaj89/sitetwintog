  <?php use_stylesheet('/css/reset.css', 'first') ?>

  <?php use_javascript('/js/jquery.min.js', 'first') ?>
  <?php use_javascript('/js/jquery-ui.custom.min.js', 'first') ?>

  <?php use_stylesheet('/css/jquery/gsa/jquery-ui.custom.css') ?>

  <?php use_stylesheet('/css/jroller.css') ?>

<?php // additionnal stylesheet (filament group)
  use_stylesheet('/css/fg.menu.css');
  use_stylesheet('/css/fg.buttons.css');
  use_stylesheet('/css/ui.selectmenu.css');
?>

<?php // additionnal javascript (filament group)
  use_javascript('/js/fg.menu.js');
  use_javascript('/js/jroller.js');
  use_javascript('/js/ui.selectmenu.js');
?>

<div class="sf_admin_heading ui-widget" align="right" >

<?php if($sf_context->getInstance()->getActionName() == 'index' or $sf_context->getInstance()->getActionName() == 'generate'): ?>
<!--<a href="<?php echo url_for('default/print') ?>" target="_blank" id="print_button"  style="padding-right:50px;text-decoration:none;color:#2e2e2e;">Print</a>-->
<?php endif; ?>
</div>
