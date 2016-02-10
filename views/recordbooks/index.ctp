<div class="recordbooks index">
	<h2><?php __('Recordbooks');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('faculty_load_id');?></th>
			<th><?php echo $this->Paginator->sort('period_id');?></th>
			<th><?php echo $this->Paginator->sort('template_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($recordbooks as $recordbook):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $recordbook['Recordbook']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recordbook['FacultyLoad']['id'], array('controller' => 'faculty_loads', 'action' => 'view', $recordbook['FacultyLoad']['id'])); ?>
		</td>
		<td><?php echo $recordbook['Recordbook']['period_id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($recordbook['Template']['name'], array('controller' => 'templates', 'action' => 'view', $recordbook['Template']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $recordbook['Recordbook']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $recordbook['Recordbook']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $recordbook['Recordbook']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recordbook['Recordbook']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Recordbook', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Faculty Loads', true), array('controller' => 'faculty_loads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty Load', true), array('controller' => 'faculty_loads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('controller' => 'recordbook_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add')); ?> </li>
	</ul>
</div>