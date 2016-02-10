<div class="recordbookDetails form">
<?php echo $this->Form->create('RecordbookDetail');?>
	<fieldset>
		<legend><?php __('Edit Recordbook Detail'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('recordbook_id');
		echo $this->Form->input('general_component_id');
		echo $this->Form->input('index_order');
		echo $this->Form->input('percentage');
		echo $this->Form->input('under');
		echo $this->Form->input('method');
		echo $this->Form->input('percent_to_pass');
		echo $this->Form->input('base');
		echo $this->Form->input('ceiling');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('RecordbookDetail.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('RecordbookDetail.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Recordbook Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Recordbooks', true), array('controller' => 'recordbooks', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Recordbook', true), array('controller' => 'recordbooks', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('controller' => 'measurable_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add')); ?> </li>
	</ul>
</div>