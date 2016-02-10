<div class="rawscores view">
<h2><?php  __('Rawscore');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rawscore['Rawscore']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Measurable Item'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($rawscore['MeasurableItem']['id'], array('controller' => 'measurable_items', 'action' => 'view', $rawscore['MeasurableItem']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Rawscore'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rawscore['Rawscore']['rawscore']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mantissa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rawscore['Rawscore']['mantissa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rawscore['Rawscore']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $rawscore['Rawscore']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Rawscore', true), array('action' => 'edit', $rawscore['Rawscore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Rawscore', true), array('action' => 'delete', $rawscore['Rawscore']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $rawscore['Rawscore']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Rawscores', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Rawscore', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Measurable Items', true), array('controller' => 'measurable_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Measurable Item', true), array('controller' => 'measurable_items', 'action' => 'add')); ?> </li>
	</ul>
</div>
