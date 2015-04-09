[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/csvlist', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]