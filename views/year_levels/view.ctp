<div class="yearLevels view">
<h2><?php  __('Year Level');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yearLevel['YearLevel']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Educ Level'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($yearLevel['EducLevel']['name'], array('controller' => 'educ_levels', 'action' => 'view', $yearLevel['EducLevel']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yearLevel['YearLevel']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yearLevel['YearLevel']['alias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Index Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yearLevel['YearLevel']['index_order']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('User'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($yearLevel['User']['id'], array('controller' => 'users', 'action' => 'view', $yearLevel['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yearLevel['YearLevel']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $yearLevel['YearLevel']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Year Level', true), array('action' => 'edit', $yearLevel['YearLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Year Level', true), array('action' => 'delete', $yearLevel['YearLevel']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $yearLevel['YearLevel']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Educ Levels', true), array('controller' => 'educ_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Educ Level', true), array('controller' => 'educ_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Students', true), array('controller' => 'students', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Subjects', true), array('controller' => 'subjects', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Templates', true), array('controller' => 'templates', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Sections');?></h3>
	<?php if (!empty($yearLevel['Section'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Type'); ?></th>
		<th><?php __('Order Index'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($yearLevel['Section'] as $section):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $section['id'];?></td>
			<td><?php echo $section['name'];?></td>
			<td><?php echo $section['alias'];?></td>
			<td><?php echo $section['year_level_id'];?></td>
			<td><?php echo $section['type'];?></td>
			<td><?php echo $section['order_index'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sections', 'action' => 'view', $section['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sections', 'action' => 'edit', $section['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sections', 'action' => 'delete', $section['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $section['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Students');?></h3>
	<?php if (!empty($yearLevel['Student'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Student Number'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Last Sy Enrolled'); ?></th>
		<th><?php __('Last Sem Enrolled'); ?></th>
		<th><?php __('Last Name'); ?></th>
		<th><?php __('First Name'); ?></th>
		<th><?php __('Middle Name'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Section Id'); ?></th>
		<th><?php __('Birthday'); ?></th>
		<th><?php __('Place Of Birth'); ?></th>
		<th><?php __('Citizenship'); ?></th>
		<th><?php __('Religion'); ?></th>
		<th><?php __('Landline'); ?></th>
		<th><?php __('Mobile'); ?></th>
		<th><?php __('Home Country'); ?></th>
		<th><?php __('Home Province'); ?></th>
		<th><?php __('Home City'); ?></th>
		<th><?php __('Home District'); ?></th>
		<th><?php __('Home Barangay'); ?></th>
		<th><?php __('Home Subd'); ?></th>
		<th><?php __('Home Street Number'); ?></th>
		<th><?php __('Home Zipcode'); ?></th>
		<th><?php __('Prov Country'); ?></th>
		<th><?php __('Prov Province'); ?></th>
		<th><?php __('Prov City'); ?></th>
		<th><?php __('Prov District'); ?></th>
		<th><?php __('Prov Barangay'); ?></th>
		<th><?php __('Prov Street Number'); ?></th>
		<th><?php __('Prov Subd'); ?></th>
		<th><?php __('Prov Zipcode'); ?></th>
		<th><?php __('Mail Country'); ?></th>
		<th><?php __('Mail Province'); ?></th>
		<th><?php __('Mail Municipality'); ?></th>
		<th><?php __('Mail Barangay'); ?></th>
		<th><?php __('Mail Subdivision'); ?></th>
		<th><?php __('Mail Street Number'); ?></th>
		<th><?php __('Mail Zipcode'); ?></th>
		<th><?php __('Primary Name'); ?></th>
		<th><?php __('Primary Relationship'); ?></th>
		<th><?php __('Primary Occupation'); ?></th>
		<th><?php __('Primary Country'); ?></th>
		<th><?php __('Primary Province'); ?></th>
		<th><?php __('Primary Municipality'); ?></th>
		<th><?php __('Primary Barangay'); ?></th>
		<th><?php __('Primary Subdivision'); ?></th>
		<th><?php __('Primary Street Number'); ?></th>
		<th><?php __('Primary Zipcode'); ?></th>
		<th><?php __('Secondary Name'); ?></th>
		<th><?php __('Secondary Relationship'); ?></th>
		<th><?php __('Secondary Occupation'); ?></th>
		<th><?php __('Secondary Country'); ?></th>
		<th><?php __('Secondary Province'); ?></th>
		<th><?php __('Secondary Municipality'); ?></th>
		<th><?php __('Secondary Barangay'); ?></th>
		<th><?php __('Secondary Subdivision'); ?></th>
		<th><?php __('Secondary Street Number'); ?></th>
		<th><?php __('Secondary Zipcode'); ?></th>
		<th><?php __('Date Created'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($yearLevel['Student'] as $student):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $student['id'];?></td>
			<td><?php echo $student['student_number'];?></td>
			<td><?php echo $student['year_level_id'];?></td>
			<td><?php echo $student['last_sy_enrolled'];?></td>
			<td><?php echo $student['last_sem_enrolled'];?></td>
			<td><?php echo $student['last_name'];?></td>
			<td><?php echo $student['first_name'];?></td>
			<td><?php echo $student['middle_name'];?></td>
			<td><?php echo $student['gender'];?></td>
			<td><?php echo $student['section_id'];?></td>
			<td><?php echo $student['birthday'];?></td>
			<td><?php echo $student['place_of_birth'];?></td>
			<td><?php echo $student['citizenship'];?></td>
			<td><?php echo $student['religion'];?></td>
			<td><?php echo $student['landline'];?></td>
			<td><?php echo $student['mobile'];?></td>
			<td><?php echo $student['home_country'];?></td>
			<td><?php echo $student['home_province'];?></td>
			<td><?php echo $student['home_city'];?></td>
			<td><?php echo $student['home_district'];?></td>
			<td><?php echo $student['home_barangay'];?></td>
			<td><?php echo $student['home_subd'];?></td>
			<td><?php echo $student['home_street_number'];?></td>
			<td><?php echo $student['home_zipcode'];?></td>
			<td><?php echo $student['prov_country'];?></td>
			<td><?php echo $student['prov_province'];?></td>
			<td><?php echo $student['prov_city'];?></td>
			<td><?php echo $student['prov_district'];?></td>
			<td><?php echo $student['prov_barangay'];?></td>
			<td><?php echo $student['prov_street_number'];?></td>
			<td><?php echo $student['prov_subd'];?></td>
			<td><?php echo $student['prov_zipcode'];?></td>
			<td><?php echo $student['mail_country'];?></td>
			<td><?php echo $student['mail_province'];?></td>
			<td><?php echo $student['mail_municipality'];?></td>
			<td><?php echo $student['mail_barangay'];?></td>
			<td><?php echo $student['mail_subdivision'];?></td>
			<td><?php echo $student['mail_street_number'];?></td>
			<td><?php echo $student['mail_zipcode'];?></td>
			<td><?php echo $student['primary_name'];?></td>
			<td><?php echo $student['primary_relationship'];?></td>
			<td><?php echo $student['primary_occupation'];?></td>
			<td><?php echo $student['primary_country'];?></td>
			<td><?php echo $student['primary_province'];?></td>
			<td><?php echo $student['primary_municipality'];?></td>
			<td><?php echo $student['primary_barangay'];?></td>
			<td><?php echo $student['primary_subdivision'];?></td>
			<td><?php echo $student['primary_street_number'];?></td>
			<td><?php echo $student['primary_zipcode'];?></td>
			<td><?php echo $student['secondary_name'];?></td>
			<td><?php echo $student['secondary_relationship'];?></td>
			<td><?php echo $student['secondary_occupation'];?></td>
			<td><?php echo $student['secondary_country'];?></td>
			<td><?php echo $student['secondary_province'];?></td>
			<td><?php echo $student['secondary_municipality'];?></td>
			<td><?php echo $student['secondary_barangay'];?></td>
			<td><?php echo $student['secondary_subdivision'];?></td>
			<td><?php echo $student['secondary_street_number'];?></td>
			<td><?php echo $student['secondary_zipcode'];?></td>
			<td><?php echo $student['date_created'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'students', 'action' => 'view', $student['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'students', 'action' => 'edit', $student['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'students', 'action' => 'delete', $student['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $student['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Student', true), array('controller' => 'students', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Subjects');?></h3>
	<?php if (!empty($yearLevel['Subject'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Educ Level Id'); ?></th>
		<th><?php __('Nomenclature'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Default Unit'); ?></th>
		<th><?php __('Alias'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($yearLevel['Subject'] as $subject):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $subject['id'];?></td>
			<td><?php echo $subject['year_level_id'];?></td>
			<td><?php echo $subject['educ_level_id'];?></td>
			<td><?php echo $subject['nomenclature'];?></td>
			<td><?php echo $subject['description'];?></td>
			<td><?php echo $subject['default_unit'];?></td>
			<td><?php echo $subject['alias'];?></td>
			<td><?php echo $subject['user_id'];?></td>
			<td><?php echo $subject['created'];?></td>
			<td><?php echo $subject['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'subjects', 'action' => 'view', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'subjects', 'action' => 'edit', $subject['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'subjects', 'action' => 'delete', $subject['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $subject['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Subject', true), array('controller' => 'subjects', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Templates');?></h3>
	<?php if (!empty($yearLevel['Template'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Year Level Id'); ?></th>
		<th><?php __('Educ Level Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('School Year'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('User Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($yearLevel['Template'] as $template):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $template['id'];?></td>
			<td><?php echo $template['year_level_id'];?></td>
			<td><?php echo $template['educ_level_id'];?></td>
			<td><?php echo $template['name'];?></td>
			<td><?php echo $template['school_year'];?></td>
			<td><?php echo $template['status'];?></td>
			<td><?php echo $template['user_id'];?></td>
			<td><?php echo $template['created'];?></td>
			<td><?php echo $template['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'templates', 'action' => 'view', $template['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'templates', 'action' => 'edit', $template['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'templates', 'action' => 'delete', $template['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $template['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Template', true), array('controller' => 'templates', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
