<div class="measurableItems view">
<h2><?php  __('Measurable Item');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measurableItem['MeasurableItem']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('General Component'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($measurableItem['GeneralComponent']['name'], array('controller' => 'general_components', 'action' => 'view', $measurableItem['GeneralComponent']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Header'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measurableItem['MeasurableItem']['header']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Perfect Score'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measurableItem['MeasurableItem']['perfect_score']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measurableItem['MeasurableItem']['percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Base'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measurableItem['MeasurableItem']['base']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Is Item'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $measurableItem['MeasurableItem']['is_item']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recordbook Detail'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($measurableItem['RecordbookDetail']['id'], array('controller' => 'recordbook_details', 'action' => 'view', $measurableItem['RecordbookDetail']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Measurable Item', true), array('action' => 'edit', $measurableItem['MeasurableItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Measurable Item', true), array('action' => 'delete', $measurableItem['MeasurableItem']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $measurableItem['MeasurableItem']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('controller' => 'recordbook_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawscores', true), array('controller' => 'rawscores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawscore', true), array('controller' => 'rawscores', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Rawscores');?></h3>
	<?php if (!empty($measurableItem['Rawscore'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Measurable Item Id'); ?></th>
		<th><?php __('Rawscore'); ?></th>
		<th><?php __('Mantissa'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($measurableItem['Rawscore'] as $rawscore):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $rawscore['id'];?></td>
			<td><?php echo $rawscore['measurable_item_id'];?></td>
			<td><?php echo $rawscore['rawscore'];?></td>
			<td><?php echo $rawscore['mantissa'];?></td>
			<td><?php echo $rawscore['created'];?></td>
			<td><?php echo $rawscore['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'rawscores', 'action' => 'view', $rawscore['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'rawscores', 'action' => 'edit', $rawscore['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'rawscores', 'action' => 'delete', $rawscore['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rawscore['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Rawscore', true), array('controller' => 'rawscores', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
