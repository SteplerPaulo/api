<div class="rawscores form">
<?php echo $this->Form->create('Rawscore');?>
	<fieldset>
		<legend><?php __('Add Rawscore'); ?></legend>
	<?php
		echo $this->Form->input('measurable_item_id');
		echo $this->Form->input('rawscore');
		echo $this->Form->input('mantissa');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Rawscores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('controller' => 'measurable_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add')); ?> </li>
	</ul>
</div>