<div class="curriculumDetails form">
<?php echo $this->Form->create('CurriculumDetail');?>
	<fieldset>
		<legend><?php __('Edit Curriculum Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('curriculum_id');
		echo $this->Form->input('subject_id');
		echo $this->Form->input('year_level_id');
		echo $this->Form->input('under');
		echo $this->Form->input('weight');
		echo $this->Form->input('unit');
		echo $this->Form->input('index_order');
		echo $this->Form->input('is_parent');
		echo $this->Form->input('is_letter_grade');
		echo $this->Form->input('is_display');
		echo $this->Form->input('is_inc_gen_ave');
		echo $this->Form->input('is_inc_conduct');
		echo $this->Form->input('is_inc_conso');
		echo $this->Form->input('is_inc_reportcard');
		echo $this->Form->input('special_func');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CurriculumDetail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CurriculumDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Curriculum Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Curriculums', true), array('controller' => 'curriculums', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculum', true), array('controller' => 'curriculums', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
	</ul>
</div>