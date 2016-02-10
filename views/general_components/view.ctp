<div class="generalComponents view">
<h2><?php  __('General Component');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $generalComponent['GeneralComponent']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $generalComponent['GeneralComponent']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit General Component', true), array('action' => 'edit', $generalComponent['GeneralComponent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete General Component', true), array('action' => 'delete', $generalComponent['GeneralComponent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $generalComponent['GeneralComponent']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Details', true), array('controller' => 'template_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('controller' => 'template_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Template Details');?></h3>
	<?php if (!empty($generalComponent['TemplateDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Template Id'); ?></th>
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
		foreach ($generalComponent['TemplateDetail'] as $templateDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $templateDetail['id'];?></td>
			<td><?php echo $templateDetail['template_id'];?></td>
			<td><?php echo $templateDetail['general_component_id'];?></td>
			<td><?php echo $templateDetail['index_order'];?></td>
			<td><?php echo $templateDetail['percentage'];?></td>
			<td><?php echo $templateDetail['under'];?></td>
			<td><?php echo $templateDetail['method'];?></td>
			<td><?php echo $templateDetail['percent_to_pass'];?></td>
			<td><?php echo $templateDetail['base'];?></td>
			<td><?php echo $templateDetail['ceiling'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'template_details', 'action' => 'view', $templateDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'template_details', 'action' => 'edit', $templateDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'template_details', 'action' => 'delete', $templateDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $templateDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template Detail', true), array('controller' => 'template_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
