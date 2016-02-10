<div class="templates view">
<h2><?php  __('Template');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Year Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($template['YearLevel']['name'], array('controller' => 'year_levels', 'action' => 'view', $template['YearLevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Educ Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($template['EducLevel']['name'], array('controller' => 'educ_levels', 'action' => 'view', $template['EducLevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('School Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['school_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($template['User']['id'], array('controller' => 'users', 'action' => 'view', $template['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $template['Template']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template', true), array('action' => 'edit', $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Template', true), array('action' => 'delete', $template['Template']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $template['Template']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educ Levels', true), array('controller' => 'educ_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educ Level', true), array('controller' => 'educ_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Details', true), array('controller' => 'template_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('controller' => 'template_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Template Details');?></h3>
	<?php if (!empty($template['TemplateDetail'])):?>
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
		foreach ($template['TemplateDetail'] as $templateDetail):
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
