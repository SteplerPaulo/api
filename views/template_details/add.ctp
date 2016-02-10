<div class="templateDetails form">
<?php echo $this->Form->create('TemplateDetail');?>
	<fieldset>
		<legend><?php __('Add Template Detail'); ?></legend>
	<?php
		echo $this->Form->input('template_id');
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

		<li><?php echo $this->Html->link(__('List Template Details', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
	</ul>
</div>