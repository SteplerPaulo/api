<div class="templateDetails view">
<h2><?php  __('Template Detail');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Template'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($templateDetail['Template']['name'], array('controller' => 'templates', 'action' => 'view', $templateDetail['Template']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('General Component'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($templateDetail['GeneralComponent']['name'], array('controller' => 'general_components', 'action' => 'view', $templateDetail['GeneralComponent']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Index Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['index_order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Under'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['under']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Method'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['method']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Percent To Pass'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['percent_to_pass']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Base'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['base']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ceiling'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $templateDetail['TemplateDetail']['ceiling']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Template Detail', true), array('action' => 'edit', $templateDetail['TemplateDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Template Detail', true), array('action' => 'delete', $templateDetail['TemplateDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $templateDetail['TemplateDetail']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Template Details', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
	</ul>
</div>
