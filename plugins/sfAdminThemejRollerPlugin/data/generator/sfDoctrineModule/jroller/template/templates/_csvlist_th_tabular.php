<?php $header = null; ?>
<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
    <?php $header = $header.trim($field->getConfig('label', '', true)).',' ?>
<?php    endforeach; ?>
<?php echo $header."\n"; ?>