[?php if($hasFilters): ?]
[?php $selectedFilters = $hasFilters->getRawValue() ?]
[?php $count = 0; ?]
[?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?]
    [?php if(in_array($name, array_keys($selectedFilters))): ?]
        [?php $count++; ?]
    [?php endif; ?]
[?php endforeach; ?]
[?php if($count > 0):?]
<table>
<tr>
<th style="padding-right: 10px; color:#5c9ccc; "><h2><strong>Filters:</strong></h2></th>
[?php foreach ($configuration->getFormFilterFields($form) as $name => $field): ?]
          [?php if(in_array($name, array_keys($selectedFilters))): ?]
              [?php if ((isset($form[$name]) && $form[$name]->isHidden()) || (!isset($form[$name]) && $field->isReal())) continue ?]
              [?php include_partial('<?php echo $this->getModuleName() ?>/list_filters_field', array(
                'name'       => $name,
                'attributes' => $field->getConfig('attributes', array()),
                'label'      => $field->getConfig('label'),
                'form'       => $form,
                'field'      => $field,
                'type'       => $field->getType()
              )) ?]
          [?php endif; ?]
[?php endforeach; ?]
</tr>
</table>
[?php endif; ?]
[?php endif; ?]