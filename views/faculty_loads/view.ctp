<div class="facultyLoads view">
<h2><?php  __('Faculty Load');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facultyLoad['FacultyLoad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Subject'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($facultyLoad['Subject']['id'], array('controller' => 'subjects', 'action' => 'view', $facultyLoad['Subject']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($facultyLoad['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $facultyLoad['Employee']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('School Year'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $facultyLoad['FacultyLoad']['school_year']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Section'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($facultyLoad['Section']['name'], array('controller' => 'sections', 'action' => 'view', $facultyLoad['Section']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Faculty Load', true), array('action' => 'edit', $facultyLoad['FacultyLoad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Faculty Load', true), array('action' => 'delete', $facultyLoad['FacultyLoad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $facultyLoad['FacultyLoad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Faculty Loads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty Load', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Employees', true), array('controller' => 'employees', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Employee', true), array('controller' => 'employees', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbooks', true), array('controller' => 'recordbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook', true), array('controller' => 'recordbooks', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Recordbooks');?></h3>
	<?php if (!empty($facultyLoad['Recordbook'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Faculty Load Id'); ?></th>
		<th><?php __('Period Id'); ?></th>
		<th><?php __('Template Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($facultyLoad['Recordbook'] as $recordbook):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $recordbook['id'];?></td>
			<td><?php echo $recordbook['faculty_load_id'];?></td>
			<td><?php echo $recordbook['period_id'];?></td>
			<td><?php echo $recordbook['template_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'recordbooks', 'action' => 'view', $recordbook['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'recordbooks', 'action' => 'edit', $recordbook['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'recordbooks', 'action' => 'delete', $recordbook['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $recordbook['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Recordbook', true), array('controller' => 'recordbooks', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
