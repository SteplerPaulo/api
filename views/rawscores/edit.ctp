<div class="rawscores form">
<?php echo $this->Form->create('Rawscore');?>
	<fieldset>
		<legend><?php __('Edit Rawscore'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Rawscore.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Rawscore.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Rawscores', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('controller' => 'measurable_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add')); ?> </li>
	</ul>
</div>