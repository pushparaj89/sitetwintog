<?php $row = array() ?>
<?php foreach ($this->configuration->getValue('list.display') as $name => $field): ?>
    <?php if(strpos($this->renderField($field), 'link_to')!== false) {
        $row[] = GeneralFunctions::get_string_between($this->renderField($field), 'link_to(', ',');
    }else {
        $row[] = $this->renderField($field);
    }
    ?>
<?php endforeach; ?>
<?php foreach($row as $i => $value): ?>
<?php if($i == 0){ ?>
[?php $csv_row = <?php echo $value; ?>.','; ?]
<?php } else {?>
[?php $csv_row = $csv_row.'"'.<?php echo $value; ?>.'",'; ?]
<?php } ?>
<?php endforeach; ?>
[?php echo $csv_row."\n"; ?]