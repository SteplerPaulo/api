<div class="measurableItems index">
	<h2><?php __('Measurable Items');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('general_component_id');?></th>
			<th><?php echo $this->Paginator->sort('header');?></th>
			<th><?php echo $this->Paginator->sort('perfect_score');?></th>
			<th><?php echo $this->Paginator->sort('percentage');?></th>
			<th><?php echo $this->Paginator->sort('base');?></th>
			<th><?php echo $this->Paginator->sort('is_item');?></th>
			<th><?php echo $this->Paginator->sort('recordbook_detail_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($measurableItems as $measurableItem):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $measurableItem['MeasurableItem']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($measurableItem['GeneralComponent']['name'], array('controller' => 'general_components', 'action' => 'view', $measurableItem['GeneralComponent']['id'])); ?>
		</td>
		<td><?php echo $measurableItem['MeasurableItem']['header']; ?>&nbsp;</td>
		<td><?php echo $measurableItem['MeasurableItem']['perfect_score']; ?>&nbsp;</td>
		<td><?php echo $measurableItem['MeasurableItem']['percentage']; ?>&nbsp;</td>
		<td><?php echo $measurableItem['MeasurableItem']['base']; ?>&nbsp;</td>
		<td><?php echo $measurableItem['MeasurableItem']['is_item']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($measurableItem['RecordbookDetail']['id'], array('controller' => 'recordbook_details', 'action' => 'view', $measurableItem['RecordbookDetail']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $measurableItem['MeasurableItem']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $measurableItem['MeasurableItem']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $measurableItem['MeasurableItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $measurableItem['MeasurableItem']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('controller' => 'recordbook_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawscores', true), array('controller' => 'rawscores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawscore', true), array('controller' => 'rawscores', 'action' => 'add')); ?> </li>
	</ul>
</div>