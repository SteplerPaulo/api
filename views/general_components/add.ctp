<div class="generalComponents form">
<?php echo $this->Form->create('GeneralComponent');?>
	<fieldset>
		<legend><?php __('Add General Component'); ?></legend>
	<?php
		echo $this->Form->input('id',array('type'=>'text','label'=>'Id'));
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List General Components', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Template Details', true), array('controller' => 'template_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('controller' => 'template_details', 'action' => 'add')); ?> </li>
	</ul>
</div>