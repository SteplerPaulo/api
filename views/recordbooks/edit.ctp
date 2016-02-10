<div class="recordbooks form">
<?php echo $this->Form->create('Recordbook');?>
	<fieldset>
		<legend><?php __('Edit Recordbook'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('faculty_load_id');
		echo $this->Form->input('period_id');
		echo $this->Form->input('template_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Recordbook.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Recordbook.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recordbooks', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Faculty Loads', true), array('controller' => 'faculty_loads', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Faculty Load', true), array('controller' => 'faculty_loads', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('controller' => 'recordbook_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add')); ?> </li>
	</ul>
</div>