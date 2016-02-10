<div class="templates index">
	<h2><?php __('Templates');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('year_level_id');?></th>
			<th><?php echo $this->Paginator->sort('educ_level_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('school_year');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('user_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($templates as $template):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $template['Template']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($template['YearLevel']['name'], array('controller' => 'year_levels', 'action' => 'view', $template['YearLevel']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($template['EducLevel']['name'], array('controller' => 'educ_levels', 'action' => 'view', $template['EducLevel']['id'])); ?>
		</td>
		<td><?php echo $template['Template']['name']; ?>&nbsp;</td>
		<td><?php echo $template['Template']['school_year']; ?>&nbsp;</td>
		<td><?php echo $template['Template']['status']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($template['User']['id'], array('controller' => 'users', 'action' => 'view', $template['User']['id'])); ?>
		</td>
		<td><?php echo $template['Template']['created']; ?>&nbsp;</td>
		<td><?php echo $template['Template']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $template['Template']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $template['Template']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $template['Template']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $template['Template']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Template', true), array('action' => 'add')); ?></li>
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