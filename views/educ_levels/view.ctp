<div class="educLevels view">
<h2><?php  __('Educ Level');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $educLevel['EducLevel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $educLevel['EducLevel']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $educLevel['EducLevel']['alias']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Educ Level', true), array('action' => 'edit', $educLevel['EducLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Educ Level', true), array('action' => 'delete', $educLevel['EducLevel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $educLevel['EducLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Educ Levels', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educ Level', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Subjects');?></h3>
	<?php if (!empty($educLevel['Subject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Educ Level Id'); ?></th>
		<th><?php __('Nomenclature'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Default Unit'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($educLevel['Subject'] as $subject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subject['id'];?></td>
			<td><?php echo $subject['year_level_id'];?></td>
			<td><?php echo $subject['educ_level_id'];?></td>
			<td><?php echo $subject['nomenclature'];?></td>
			<td><?php echo $subject['description'];?></td>
			<td><?php echo $subject['default_unit'];?></td>
			<td><?php echo $subject['alias'];?></td>
			<td><?php echo $subject['user_id'];?></td>
			<td><?php echo $subject['created'];?></td>
			<td><?php echo $subject['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Templates');?></h3>
	<?php if (!empty($educLevel['Template'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Educ Level Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('School Year Id'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($educLevel['Template'] as $template):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $template['id'];?></td>
			<td><?php echo $template['year_level_id'];?></td>
			<td><?php echo $template['educ_level_id'];?></td>
			<td><?php echo $template['name'];?></td>
			<td><?php echo $template['school_year_id'];?></td>
			<td><?php echo $template['status'];?></td>
			<td><?php echo $template['user_id'];?></td>
			<td><?php echo $template['created'];?></td>
			<td><?php echo $template['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'templates', 'action' => 'delete', $template['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Year Levels');?></h3>
	<?php if (!empty($educLevel['YearLevel'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Educ Level Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('Index Order'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($educLevel['YearLevel'] as $yearLevel):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $yearLevel['id'];?></td>
			<td><?php echo $yearLevel['educ_level_id'];?></td>
			<td><?php echo $yearLevel['name'];?></td>
			<td><?php echo $yearLevel['alias'];?></td>
			<td><?php echo $yearLevel['index_order'];?></td>
			<td><?php echo $yearLevel['user_id'];?></td>
			<td><?php echo $yearLevel['created'];?></td>
			<td><?php echo $yearLevel['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'year_levels', 'action' => 'view', $yearLevel['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'year_levels', 'action' => 'edit', $yearLevel['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'year_levels', 'action' => 'delete', $yearLevel['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $yearLevel['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
