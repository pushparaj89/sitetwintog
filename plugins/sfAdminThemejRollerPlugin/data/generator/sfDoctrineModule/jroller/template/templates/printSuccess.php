[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<div id="sf_admin_container">
  [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]



  <div id="sf_admin_content">

      [?php include_partial('<?php echo $this->getModuleName() ?>/printlist', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper, 'hasFilters' => $hasFilters)) ?]

  </div>

  <div id="sf_admin_footer">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
  </div>

  [?php include_partial('<?php echo $this->getModuleName() ?>/themeswitcher') ?]
</div>

