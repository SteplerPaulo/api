<div class="rawscores index">
	<h2><?php __('Rawscores');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('measurable_item_id');?></th>
			<th><?php echo $this->Paginator->sort('rawscore');?></th>
			<th><?php echo $this->Paginator->sort('mantissa');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($rawscores as $rawscore):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $rawscore['Rawscore']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($rawscore['MeasurableItem']['id'], array('controller' => 'measurable_items', 'action' => 'view', $rawscore['MeasurableItem']['id'])); ?>
		</td>
		<td><?php echo $rawscore['Rawscore']['rawscore']; ?>&nbsp;</td>
		<td><?php echo $rawscore['Rawscore']['mantissa']; ?>&nbsp;</td>
		<td><?php echo $rawscore['Rawscore']['created']; ?>&nbsp;</td>
		<td><?php echo $rawscore['Rawscore']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $rawscore['Rawscore']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $rawscore['Rawscore']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $rawscore['Rawscore']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rawscore['Rawscore']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Rawscore', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('controller' => 'measurable_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add')); ?> </li>
	</ul>
</div>