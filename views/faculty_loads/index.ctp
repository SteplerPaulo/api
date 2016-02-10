<div class="facultyLoads index">
	<h2><?php __('Faculty Loads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('subject_id');?></th>
			<th><?php echo $this->Paginator->sort('employee_id');?></th>
			<th><?php echo $this->Paginator->sort('school_year');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($facultyLoads as $facultyLoad):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $facultyLoad['FacultyLoad']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($facultyLoad['Subject']['id'], array('controller' => 'subjects', 'action' => 'view', $facultyLoad['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($facultyLoad['Employee']['id'], array('controller' => 'employees', 'action' => 'view', $facultyLoad['Employee']['id'])); ?>
		</td>
		<td><?php echo $facultyLoad['FacultyLoad']['school_year']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($facultyLoad['Section']['name'], array('controller' => 'sections', 'action' => 'view', $facultyLoad['Section']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $facultyLoad['FacultyLoad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $facultyLoad['FacultyLoad']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $facultyLoad['FacultyLoad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $facultyLoad['FacultyLoad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Faculty Load', true), array('action' => 'add')); ?></li>
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