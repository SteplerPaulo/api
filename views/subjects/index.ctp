<div class="subjects index">
	<h2><?php __('Subjects');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('year_level_id');?></th>
			<th><?php echo $this->Paginator->sort('educ_level_id');?></th>
			<th><?php echo $this->Paginator->sort('nomenclature');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('default_unit');?></th>
			<th><?php echo $this->Paginator->sort('alias');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($subjects as $subject):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $subject['Subject']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subject['YearLevel']['name'], array('controller' => 'year_levels', 'action' => 'view', $subject['YearLevel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($subject['EducLevel']['name'], array('controller' => 'educ_levels', 'action' => 'view', $subject['EducLevel']['id'])); ?>
		</td>
		<td><?php echo $subject['Subject']['nomenclature']; ?>&nbsp;</td>
		<td><?php echo $subject['Subject']['description']; ?>&nbsp;</td>
		<td><?php echo $subject['Subject']['default_unit']; ?>&nbsp;</td>
		<td><?php echo $subject['Subject']['alias']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($subject['User']['id'], array('controller' => 'users', 'action' => 'view', $subject['User']['id'])); ?>
		</td>
		<td><?php echo $subject['Subject']['created']; ?>&nbsp;</td>
		<td><?php echo $subject['Subject']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $subject['Subject']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $subject['Subject']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $subject['Subject']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['Subject']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Subject', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educ Levels', true), array('controller' => 'educ_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educ Level', true), array('controller' => 'educ_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>