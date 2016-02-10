<div class="generalComponents index">
	<h2><?php __('General Components');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($generalComponents as $generalComponent):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $generalComponent['GeneralComponent']['id']; ?>&nbsp;</td>
		<td><?php echo $generalComponent['GeneralComponent']['name']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $generalComponent['GeneralComponent']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $generalComponent['GeneralComponent']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $generalComponent['GeneralComponent']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $generalComponent['GeneralComponent']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New General Component', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Template Details', true), array('controller' => 'template_details', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template Detail', true), array('controller' => 'template_details', 'action' => 'add')); ?> </li>
	</ul>
</div>