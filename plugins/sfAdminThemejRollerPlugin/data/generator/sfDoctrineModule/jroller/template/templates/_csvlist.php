[?php include_partial('<?php echo $this->getModuleName() ?>/csvlist_th_<?php echo $this->configuration->getValue('list.layout') ?>', array('sort' => $sort)) ?]
[?php foreach ($pager->getResults() as $i => $<?php echo $this->getSingularName() ?>):?]
    [?php include_partial('<?php echo $this->getModuleName() ?>/csvlist_td_<?php echo $this->configuration->getValue('list.layout') ?>', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]
[?php endforeach; ?]