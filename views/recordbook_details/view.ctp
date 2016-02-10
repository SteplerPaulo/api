<div class="recordbookDetails view">
<h2><?php  __('Recordbook Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Recordbook'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($recordbookDetail['Recordbook']['id'], array('controller' => 'recordbooks', 'action' => 'view', $recordbookDetail['Recordbook']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('General Component'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($recordbookDetail['GeneralComponent']['name'], array('controller' => 'general_components', 'action' => 'view', $recordbookDetail['GeneralComponent']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Index Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['index_order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Under'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['under']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Method'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['method']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Percent To Pass'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['percent_to_pass']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Base'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['base']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ceiling'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $recordbookDetail['RecordbookDetail']['ceiling']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Recordbook Detail', true), array('action' => 'edit', $recordbookDetail['RecordbookDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Recordbook Detail', true), array('action' => 'delete', $recordbookDetail['RecordbookDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recordbookDetail['RecordbookDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbooks', true), array('controller' => 'recordbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook', true), array('controller' => 'recordbooks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('controller' => 'measurable_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Measurable Items');?></h3>
	<?php if (!empty($recordbookDetail['MeasurableItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('General Component Id'); ?></th>
		<th><?php __('Header'); ?></th>
		<th><?php __('Perfect Score'); ?></th>
		<th><?php __('Percentage'); ?></th>
		<th><?php __('Base'); ?></th>
		<th><?php __('Is Item'); ?></th>
		<th><?php __('Recordbook Detail Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($recordbookDetail['MeasurableItem'] as $measurableItem):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $measurableItem['id'];?></td>
			<td><?php echo $measurableItem['general_component_id'];?></td>
			<td><?php echo $measurableItem['header'];?></td>
			<td><?php echo $measurableItem['perfect_score'];?></td>
			<td><?php echo $measurableItem['percentage'];?></td>
			<td><?php echo $measurableItem['base'];?></td>
			<td><?php echo $measurableItem['is_item'];?></td>
			<td><?php echo $measurableItem['recordbook_detail_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'measurable_items', 'action' => 'view', $measurableItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'measurable_items', 'action' => 'edit', $measurableItem['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'measurable_items', 'action' => 'delete', $measurableItem['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $measurableItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
