<div class="templateDetails index">
	<h2><?php __('Template Details');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('template_id');?></th>
			<th><?php echo $this->Paginator->sort('general_component_id');?></th>
			<th><?php echo $this->Paginator->sort('index_order');?></th>
			<th><?php echo $this->Paginator->sort('percentage');?></th>
			<th><?php echo $this->Paginator->sort('under');?></th>
			<th><?php echo $this->Paginator->sort('method');?></th>
			<th><?php echo $this->Paginator->sort('percent_to_pass');?></th>
			<th><?php echo $this->Paginator->sort('base');?></th>
			<th><?php echo $this->Paginator->sort('ceiling');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($templateDetails as $templateDetail):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $templateDetail['TemplateDetail']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($templateDetail['Template']['name'], array('controller' => 'templates', 'action' => 'view', $templateDetail['Template']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($templateDetail['GeneralComponent']['name'], array('controller' => 'general_components', 'action' => 'view', $templateDetail['GeneralComponent']['id'])); ?>
		</td>
		<td><?php echo $templateDetail['TemplateDetail']['index_order']; ?>&nbsp;</td>
		<td><?php echo $templateDetail['TemplateDetail']['percentage']; ?>&nbsp;</td>
		<td><?php echo $templateDetail['TemplateDetail']['under']; ?>&nbsp;</td>
		<td><?php echo $templateDetail['TemplateDetail']['method']; ?>&nbsp;</td>
		<td><?php echo $templateDetail['TemplateDetail']['percent_to_pass']; ?>&nbsp;</td>
		<td><?php echo $templateDetail['TemplateDetail']['base']; ?>&nbsp;</td>
		<td><?php echo $templateDetail['TemplateDetail']['ceiling']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $templateDetail['TemplateDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $templateDetail['TemplateDetail']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $templateDetail['TemplateDetail']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $templateDetail['TemplateDetail']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List General Components', true), array('controller' => 'general_components', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New General Component', true), array('controller' => 'general_components', 'action' => 'add')); ?> </li>
	</ul>
</div>