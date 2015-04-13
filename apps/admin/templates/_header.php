<div class="twintog_header">
<?php if($sf_user->isAuthenticated()):

        $username = $sf_user->getUsername();
        $password = sfContext::getInstance()->getUser()->getAttribute('pass');
        $email = sfContext::getInstance()->getUser()->getGuardUser()->getEmailAddress();

        ?>
<div class="user_options ui-widget">
<span class="welcome_msg">Welcome (<?php echo $sf_user->getUsername() ?>)</span>
<a href="<?php echo url_for('sf_guard_signout') ?>" class="fg-button ui-state-default fg-button-icon-left ui-corner-all" style="float:none"><span class="ui-icon ui-icon-person"></span>Sign Out</a>
<a id="update_system_cache" href="javascript:updateCache();" class="fg-button ui-state-default fg-button-icon-left ui-corner-all" style="float:none"><span class="ui-icon ui-icon-refresh"></span>Update system cache</a>
</div>
    <script >
        function updateCache(){
          $('#text_box').dialog();
            var toLoad = "<?php echo url_for(array('module'   => 'default', 'action'   => 'update_cache')); ?>";
        
        $.ajax({
            url: toLoad,
            success: function(result){
//                $('#text_box').dialog().close();
                //$('#text_box').html('Completed successfully!!! :) <br />'+result);
                $('#text_box').html('Cache update have been successfully started <br /> It will get completed within 5 mins');
            }
            
          });
          }
    </script>
<?php endif;

?>
</div>





<?php if($sf_user->isAuthenticated()):?>
<div style="background:url('images/ui-bg_glass_80_d7ebf9_1x400.png') repeat-x scroll 50% 50% #D7EBF9; border:1px solid #AED0EA; width:100%; height:24px; float:left; font:normal 11px Arial; border-top:0px;">
     <div id="sf_admin_toolbar_buttons" class="fg-buttonset fg-buttonset-multi ui-state-default" style="float:left; clear:right">
      <a href="<?php echo url_for(array('module'   => 'default', 'action'   => 'index')); ?>" class="fg-button <?php if($active=='home' || $active=='default'):?>ui-state-active<?php else: ?>ui-state-default<?php endif; ?> fg-button-icon-left ui-corner-left"><span class="ui-icon ui-icon-document"></span>Home</a>
    </div>


<div style="background:url('/images/ui-bg_inset-soft_50_a0cbe9_1x100.png') repeat-x scroll 50% 50% #A0CBE9; border:1px solid #AED0EA; width:100%; height:24px; float:left; font:normal 11px Arial; border-top:0px;">
     <div id="sf_admin_toolbar_buttons" class="fg-buttonset fg-buttonset-multi ui-state-default" style="float:left; clear:right">
      <a href="<?php echo url_for(array('module'   => 'user_details', 'action'   => 'index')); ?>" class="fg-button <?php if($active=='user_details'):?>ui-state-active<?php else: ?>ui-state-default<?php endif; ?> fg-button-icon-left"><span class="ui-icon ui-icon-refresh"></span>User Contact</a>
      <a href="<?php echo url_for(array('module'   => 'gallery', 'action'   => 'index')); ?>" class="fg-button <?php if($active=='gallery'):?>ui-state-active<?php else: ?>ui-state-default<?php endif; ?> fg-button-icon-left"><span class="ui-icon ui-icon-script"></span>Gallery</a>
     </div>
</div>
<?php endif; ?>

