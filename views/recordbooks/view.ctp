<div class="recordbooks view">
<h2><?php  __('Recordbook');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbook['Recordbook']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Faculty Load'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($recordbook['FacultyLoad']['id'], array('controller' => 'faculty_loads', 'action' => 'view', $recordbook['FacultyLoad']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Period Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbook['Recordbook']['period_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Template'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($recordbook['Template']['name'], array('controller' => 'templates', 'action' => 'view', $recordbook['Template']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recordbook', true), array('action' => 'edit', $recordbook['Recordbook']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Recordbook', true), array('action' => 'delete', $recordbook['Recordbook']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recordbook['Recordbook']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbooks', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculty Loads', true), array('controller' => 'faculty_loads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty Load', true), array('controller' => 'faculty_loads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('controller' => 'recordbook_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Recordbook Details');?></h3>
	<?php if (!empty($recordbook['RecordbookDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Recordbook Id'); ?></th>
		<th><?php __('General Component Id'); ?></th>
		<th><?php __('Index Order'); ?></th>
		<th><?php __('Percentage'); ?></th>
		<th><?php __('Under'); ?></th>
		<th><?php __('Method'); ?></th>
		<th><?php __('Percent To Pass'); ?></th>
		<th><?php __('Base'); ?></th>
		<th><?php __('Ceiling'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recordbook['RecordbookDetail'] as $recordbookDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $recordbookDetail['id'];?></td>
			<td><?php echo $recordbookDetail['recordbook_id'];?></td>
			<td><?php echo $recordbookDetail['general_component_id'];?></td>
			<td><?php echo $recordbookDetail['index_order'];?></td>
			<td><?php echo $recordbookDetail['percentage'];?></td>
			<td><?php echo $recordbookDetail['under'];?></td>
			<td><?php echo $recordbookDetail['method'];?></td>
			<td><?php echo $recordbookDetail['percent_to_pass'];?></td>
			<td><?php echo $recordbookDetail['base'];?></td>
			<td><?php echo $recordbookDetail['ceiling'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'recordbook_details', 'action' => 'view', $recordbookDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'recordbook_details', 'action' => 'edit', $recordbookDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'recordbook_details', 'action' => 'delete', $recordbookDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recordbookDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
