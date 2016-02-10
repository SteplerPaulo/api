<div class="generalComponents form">
<?php echo $this->Form->create('GeneralComponent');?>
	<fieldset>
		<legend><?php __('Edit General Component'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('GeneralComponent.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('GeneralComponent.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Template Details', true), array('controller' => 'template_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('controller' => 'template_details', 'action' => 'add')); ?> </li>
	</ul>
</div>