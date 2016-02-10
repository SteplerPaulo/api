<div class="curriculumDetails index">
	<h2><?php __('Curriculum Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('curriculum_id');?></th>
			<th><?php echo $this->Paginator->sort('subject_id');?></th>
			<th><?php echo $this->Paginator->sort('year_level_id');?></th>
			<th><?php echo $this->Paginator->sort('under');?></th>
			<th><?php echo $this->Paginator->sort('weight');?></th>
			<th><?php echo $this->Paginator->sort('unit');?></th>
			<th><?php echo $this->Paginator->sort('index_order');?></th>
			<th><?php echo $this->Paginator->sort('is_parent');?></th>
			<th><?php echo $this->Paginator->sort('is_letter_grade');?></th>
			<th><?php echo $this->Paginator->sort('is_display');?></th>
			<th><?php echo $this->Paginator->sort('is_inc_gen_ave');?></th>
			<th><?php echo $this->Paginator->sort('is_inc_conduct');?></th>
			<th><?php echo $this->Paginator->sort('is_inc_conso');?></th>
			<th><?php echo $this->Paginator->sort('is_inc_reportcard');?></th>
			<th><?php echo $this->Paginator->sort('special_func');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($curriculumDetails as $curriculumDetail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $curriculumDetail['CurriculumDetail']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($curriculumDetail['Curriculum']['name'], array('controller' => 'curriculums', 'action' => 'view', $curriculumDetail['Curriculum']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($curriculumDetail['Subject']['id'], array('controller' => 'subjects', 'action' => 'view', $curriculumDetail['Subject']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($curriculumDetail['YearLevel']['name'], array('controller' => 'year_levels', 'action' => 'view', $curriculumDetail['YearLevel']['id'])); ?>
		</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['under']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['weight']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['unit']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['index_order']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_parent']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_letter_grade']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_display']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_inc_gen_ave']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_inc_conduct']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_inc_conso']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['is_inc_reportcard']; ?>&nbsp;</td>
		<td><?php echo $curriculumDetail['CurriculumDetail']['special_func']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $curriculumDetail['CurriculumDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $curriculumDetail['CurriculumDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $curriculumDetail['CurriculumDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculumDetail['CurriculumDetail']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Curriculum Detail', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
	</ul>
</div>