[?php if ($field->isPartial()): ?]
  [?php include_partial('<?php echo $this->getModuleName() ?>/'.$name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php elseif ($field->isComponent()): ?]
  [?php include_component('<?php echo $this->getModuleName() ?>', $name, array('type' => 'filter', 'form' => $form, 'attributes' => $attributes instanceof sfOutputEscaper ? $attributes->getRawValue() : $attributes)) ?]
[?php else: ?]
    <td style="padding-right: 5px;">
      [?php $value = $form[$name]->getValue() ?]

      [?php if($value != ''): ?]
      [?php if($type == 'Text') : ?]
        [?php if(!empty($value[strtolower($type)])): ?]
        [?php echo $form[$name]->renderLabel($label) ?] :&nbsp;
          [?php if(is_array($value)): ?]
            [?php if( !isset($value['is_empty'])): ?]
                [?php echo $value[strtolower($type)] . '&nbsp;&nbsp;';?]
            [?php else:?]
                [?php echo " Is empty";?]
            [?php endif;?]
          [?php else: ?]
            [?php echo $value ?] &nbsp;&nbsp;
          [?php endif; ?]
        [?php endif; ?]
      [?php elseif($type == 'Date'): ?]
        [?php if(!empty($value['from']) and !empty($value['from'])): ?]
        [?php echo $form[$name]->renderLabel($label) ?] :&nbsp;
            [?php if( !isset($value['is_empty'])): ?]
                [?php echo $value['from'] ? date('d/m/Y', strtotime($value['from'])) : '&nbsp;' ?]&nbsp;
                To &nbsp; [?php echo $value['to'] ? date('d/m/Y', strtotime($value['to'])) : '&nbsp;' ?] &nbsp;&nbsp;
            [?php else:?]
                [?php echo " Is empty";?]
            [?php endif;?]
        [?php endif; ?]
      [?php elseif ($type == 'Enum') : ?]
        [?php echo $form[$name]->renderLabel($label) ?] :&nbsp;
        [?php print($value) ?] &nbsp;&nbsp;
       [?php elseif ($type == 'Boolean') : ?]
        [?php echo $form[$name]->renderLabel($label) ?] :&nbsp;
        [?php echo ($value)?'Yes':'No'; ?] &nbsp;&nbsp;
      [?php else: ?]
        [?php echo $form[$name]->renderLabel($label) ?] :&nbsp;
        [?php if($form[$name]->getWidget()->hasOption('model')): ?]
        [?php echo Doctrine::getTable($form[$name]->getWidget()->getOption('model'))->findOneById($value)->__toString() ?]
        [?php else: ?]
        [?php echo $value ?]
        [?php endif; ?]
      [?php endif; ?]
      [?php endif; ?]

    </td>
[?php endif; ?]
