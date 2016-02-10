<div class="students index">
	<h2><?php __('Students');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('student_number');?></th>
			<th><?php echo $this->Paginator->sort('year_level_id');?></th>
			<th><?php echo $this->Paginator->sort('last_sy_enrolled');?></th>
			<th><?php echo $this->Paginator->sort('last_sem_enrolled');?></th>
			<th><?php echo $this->Paginator->sort('last_name');?></th>
			<th><?php echo $this->Paginator->sort('first_name');?></th>
			<th><?php echo $this->Paginator->sort('middle_name');?></th>
			<th><?php echo $this->Paginator->sort('gender');?></th>
			<th><?php echo $this->Paginator->sort('section_id');?></th>
			<th><?php echo $this->Paginator->sort('birthday');?></th>
			<th><?php echo $this->Paginator->sort('place_of_birth');?></th>
			<th><?php echo $this->Paginator->sort('citizenship');?></th>
			<th><?php echo $this->Paginator->sort('religion');?></th>
			<th><?php echo $this->Paginator->sort('landline');?></th>
			<th><?php echo $this->Paginator->sort('mobile');?></th>
			<th><?php echo $this->Paginator->sort('home_country');?></th>
			<th><?php echo $this->Paginator->sort('home_province');?></th>
			<th><?php echo $this->Paginator->sort('home_city');?></th>
			<th><?php echo $this->Paginator->sort('home_district');?></th>
			<th><?php echo $this->Paginator->sort('home_barangay');?></th>
			<th><?php echo $this->Paginator->sort('home_subd');?></th>
			<th><?php echo $this->Paginator->sort('home_street_number');?></th>
			<th><?php echo $this->Paginator->sort('home_zipcode');?></th>
			<th><?php echo $this->Paginator->sort('prov_country');?></th>
			<th><?php echo $this->Paginator->sort('prov_province');?></th>
			<th><?php echo $this->Paginator->sort('prov_city');?></th>
			<th><?php echo $this->Paginator->sort('prov_district');?></th>
			<th><?php echo $this->Paginator->sort('prov_barangay');?></th>
			<th><?php echo $this->Paginator->sort('prov_street_number');?></th>
			<th><?php echo $this->Paginator->sort('prov_subd');?></th>
			<th><?php echo $this->Paginator->sort('prov_zipcode');?></th>
			<th><?php echo $this->Paginator->sort('mail_country');?></th>
			<th><?php echo $this->Paginator->sort('mail_province');?></th>
			<th><?php echo $this->Paginator->sort('mail_municipality');?></th>
			<th><?php echo $this->Paginator->sort('mail_barangay');?></th>
			<th><?php echo $this->Paginator->sort('mail_subdivision');?></th>
			<th><?php echo $this->Paginator->sort('mail_street_number');?></th>
			<th><?php echo $this->Paginator->sort('mail_zipcode');?></th>
			<th><?php echo $this->Paginator->sort('primary_name');?></th>
			<th><?php echo $this->Paginator->sort('primary_relationship');?></th>
			<th><?php echo $this->Paginator->sort('primary_occupation');?></th>
			<th><?php echo $this->Paginator->sort('primary_country');?></th>
			<th><?php echo $this->Paginator->sort('primary_province');?></th>
			<th><?php echo $this->Paginator->sort('primary_municipality');?></th>
			<th><?php echo $this->Paginator->sort('primary_barangay');?></th>
			<th><?php echo $this->Paginator->sort('primary_subdivision');?></th>
			<th><?php echo $this->Paginator->sort('primary_street_number');?></th>
			<th><?php echo $this->Paginator->sort('primary_zipcode');?></th>
			<th><?php echo $this->Paginator->sort('secondary_name');?></th>
			<th><?php echo $this->Paginator->sort('secondary_relationship');?></th>
			<th><?php echo $this->Paginator->sort('secondary_occupation');?></th>
			<th><?php echo $this->Paginator->sort('secondary_country');?></th>
			<th><?php echo $this->Paginator->sort('secondary_province');?></th>
			<th><?php echo $this->Paginator->sort('secondary_municipality');?></th>
			<th><?php echo $this->Paginator->sort('secondary_barangay');?></th>
			<th><?php echo $this->Paginator->sort('secondary_subdivision');?></th>
			<th><?php echo $this->Paginator->sort('secondary_street_number');?></th>
			<th><?php echo $this->Paginator->sort('secondary_zipcode');?></th>
			<th><?php echo $this->Paginator->sort('date_created');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($students as $student):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $student['Student']['id']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['student_number']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($student['YearLevel']['name'], array('controller' => 'year_levels', 'action' => 'view', $student['YearLevel']['id'])); ?>
		</td>
		<td><?php echo $student['Student']['last_sy_enrolled']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['last_sem_enrolled']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['last_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['first_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['middle_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['gender']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($student['Section']['name'], array('controller' => 'sections', 'action' => 'view', $student['Section']['id'])); ?>
		</td>
		<td><?php echo $student['Student']['birthday']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['place_of_birth']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['citizenship']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['religion']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['landline']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mobile']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_country']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_province']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_city']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_district']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_barangay']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_subd']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_street_number']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['home_zipcode']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_country']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_province']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_city']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_district']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_barangay']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_street_number']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_subd']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['prov_zipcode']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_country']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_province']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_municipality']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_barangay']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_subdivision']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_street_number']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['mail_zipcode']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_relationship']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_occupation']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_country']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_province']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_municipality']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_barangay']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_subdivision']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_street_number']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['primary_zipcode']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_name']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_relationship']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_occupation']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_country']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_province']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_municipality']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_barangay']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_subdivision']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_street_number']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['secondary_zipcode']; ?>&nbsp;</td>
		<td><?php echo $student['Student']['date_created']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $student['Student']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $student['Student']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['Student']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Student', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>