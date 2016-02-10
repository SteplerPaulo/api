<div class="curriculums view">
<h2><?php  __('Curriculum');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Educ Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($curriculum['EducLevel']['name'], array('controller' => 'educ_levels', 'action' => 'view', $curriculum['EducLevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sy'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['sy']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Status'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['status']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($curriculum['User']['id'], array('controller' => 'users', 'action' => 'view', $curriculum['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $curriculum['Curriculum']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Curriculum', true), array('action' => 'edit', $curriculum['Curriculum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Curriculum', true), array('action' => 'delete', $curriculum['Curriculum']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculum['Curriculum']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Curriculums', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculum', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educ Levels', true), array('controller' => 'educ_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educ Level', true), array('controller' => 'educ_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Curriculum Details', true), array('controller' => 'curriculum_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculum Detail', true), array('controller' => 'curriculum_details', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Curriculum Details');?></h3>
	<?php if (!empty($curriculum['CurriculumDetail'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Curriculum Id'); ?></th>
		<th><?php __('Subject Id'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Under'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Unit'); ?></th>
		<th><?php __('Index Order'); ?></th>
		<th><?php __('Is Parent'); ?></th>
		<th><?php __('Is Letter Grade'); ?></th>
		<th><?php __('Is Display'); ?></th>
		<th><?php __('Is Inc Gen Ave'); ?></th>
		<th><?php __('Is Inc Conduct'); ?></th>
		<th><?php __('Is Inc Conso'); ?></th>
		<th><?php __('Is Inc Reportcard'); ?></th>
		<th><?php __('Special Func'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($curriculum['CurriculumDetail'] as $curriculumDetail):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $curriculumDetail['id'];?></td>
			<td><?php echo $curriculumDetail['curriculum_id'];?></td>
			<td><?php echo $curriculumDetail['subject_id'];?></td>
			<td><?php echo $curriculumDetail['year_level_id'];?></td>
			<td><?php echo $curriculumDetail['under'];?></td>
			<td><?php echo $curriculumDetail['weight'];?></td>
			<td><?php echo $curriculumDetail['unit'];?></td>
			<td><?php echo $curriculumDetail['index_order'];?></td>
			<td><?php echo $curriculumDetail['is_parent'];?></td>
			<td><?php echo $curriculumDetail['is_letter_grade'];?></td>
			<td><?php echo $curriculumDetail['is_display'];?></td>
			<td><?php echo $curriculumDetail['is_inc_gen_ave'];?></td>
			<td><?php echo $curriculumDetail['is_inc_conduct'];?></td>
			<td><?php echo $curriculumDetail['is_inc_conso'];?></td>
			<td><?php echo $curriculumDetail['is_inc_reportcard'];?></td>
			<td><?php echo $curriculumDetail['special_func'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'curriculum_details', 'action' => 'view', $curriculumDetail['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'curriculum_details', 'action' => 'edit', $curriculumDetail['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'curriculum_details', 'action' => 'delete', $curriculumDetail['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $curriculumDetail['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Curriculum Detail', true), array('controller' => 'curriculum_details', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
