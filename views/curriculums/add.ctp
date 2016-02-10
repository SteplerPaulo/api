<div class="curriculums form">
<?php echo $this->Form->create('Curriculum');?>
	<fieldset>
		<legend><?php __('Add Curriculum'); ?></legend>
	<?php
		echo $this->Form->input('educ_level_id');
		echo $this->Form->input('name');
		echo $this->Form->input('alias');
		echo $this->Form->input('description');
		echo $this->Form->input('sy');
		echo $this->Form->input('type');
		echo $this->Form->input('status');
		echo $this->Form->input('user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Curriculums', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Educ Levels', true), array('controller' => 'educ_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educ Level', true), array('controller' => 'educ_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Curriculum Details', true), array('controller' => 'curriculum_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Curriculum Detail', true), array('controller' => 'curriculum_details', 'action' => 'add')); ?> </li>
	</ul>
</div>