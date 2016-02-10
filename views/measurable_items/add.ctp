<div class="measurableItems form">
<?php echo $this->Form->create('MeasurableItem');?>
	<fieldset>
		<legend><?php __('Add Measurable Item'); ?></legend>
	<?php
		echo $this->Form->input('general_component_id');
		echo $this->Form->input('header');
		echo $this->Form->input('perfect_score');
		echo $this->Form->input('percentage');
		echo $this->Form->input('base');
		echo $this->Form->input('is_item');
		echo $this->Form->input('recordbook_detail_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('controller' => 'recordbook_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook Detail', true), array('controller' => 'recordbook_details', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawscores', true), array('controller' => 'rawscores', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawscore', true), array('controller' => 'rawscores', 'action' => 'add')); ?> </li>
	</ul>
</div>