<script>
$(document).ready(function() 
	{ 
		$('#admin_list').tablesorter();
//		$('.headerSortUp').html($('.headerSortUp').html() + '<span class="ui-icon ui-icon-circle-triangle-s"></span>');
//		$('.headerSortDown').html($('.headerSortDown').html() + '<span class="ui-icon ui-icon-circle-triangle-n"></span>');	      			
	} 
); 
</script>
<div class="sf_admin_list ui-grid-table ui-widget ui-corner-all ui-helper-reset ui-helper-clearfix">
  [?php if (!$pager->getNbResults()): ?]

  <table>
    <caption class="fg-toolbar ui-widget-header ui-corner-top">  
      <h1><span class="ui-icon ui-icon-triangle-1-s"></span> [?php echo <?php echo $this->getI18NString('list.title') ?> ?]</h1>
    </caption>
    <tbody>
      <tr class="sf_admin_row ui-widget-content">
        <td align="center" height="30">
          <p align="center">[?php echo __('No result', array(), 'sf_admin') ?]</p>
        </td>
      </tr>
    </tbody>
  </table>

  [?php else: ?]

  <table id="admin_list">
    <caption class="fg-toolbar ui-widget-header ui-corner-top">
      <h1><span class="ui-icon ui-icon-triangle-1-s"></span> [?php echo <?php echo $this->getI18NString('list.title') ?> ?]</h1>
    </caption>

    <thead class="ui-widget-header">
      <tr>
        [?php include_partial('<?php echo $this->getModuleName() ?>/list_th_<?php echo $this->configuration->getValue('list.layout') ?>', array('sort' => $sort)) ?]
      </tr>
    </thead>

    <tfoot>
      <tr align="right">
          <th colspan="<?php echo count($this->configuration->getValue('list.display')); ?>">&copy;General Surgeons Australia</th>
      </tr>
    </tfoot>

    <tbody>
      [?php foreach ($pager->getResults() as $i => $<?php echo $this->getSingularName() ?>): $odd = fmod(++$i, 2) ? ' odd' : '' ?]
        <tr class="sf_admin_row ui-widget-content [?php echo $odd ?]">
          
          [?php include_partial('<?php echo $this->getModuleName() ?>/list_td_<?php echo $this->configuration->getValue('list.layout') ?>', array('<?php echo $this->getSingularName() ?>' => $<?php echo $this->getSingularName() ?>)) ?]

        </tr>
      [?php endforeach; ?]
    </tbody>
  </table>

  [?php endif; ?]
</div>

<script type="text/javascript">
/* <![CDATA[ */
function checkAll()
{
  var boxes = document.getElementsByTagName('input'); for(var index = 0; index < boxes.length; index++) { box = boxes[index]; if (box.type == 'checkbox' && box.className == 'sf_admin_batch_checkbox') box.checked = document.getElementById('sf_admin_list_batch_checkbox').checked } return true;
}
/* ]]> */
</script>
