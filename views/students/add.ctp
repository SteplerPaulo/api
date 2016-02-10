<div class="students form">
<?php echo $this->Form->create('Student');?>
	<fieldset>
		<legend><?php __('Add Student'); ?></legend>
	<?php
		echo $this->Form->input('student_number');
		echo $this->Form->input('year_level_id');
		echo $this->Form->input('last_sy_enrolled');
		echo $this->Form->input('last_sem_enrolled');
		echo $this->Form->input('last_name');
		echo $this->Form->input('first_name');
		echo $this->Form->input('middle_name');
		echo $this->Form->input('gender');
		echo $this->Form->input('section_id');
		echo $this->Form->input('birthday');
		echo $this->Form->input('place_of_birth');
		echo $this->Form->input('citizenship');
		echo $this->Form->input('religion');
		echo $this->Form->input('landline');
		echo $this->Form->input('mobile');
		echo $this->Form->input('home_country');
		echo $this->Form->input('home_province');
		echo $this->Form->input('home_city');
		echo $this->Form->input('home_district');
		echo $this->Form->input('home_barangay');
		echo $this->Form->input('home_subd');
		echo $this->Form->input('home_street_number');
		echo $this->Form->input('home_zipcode');
		echo $this->Form->input('prov_country');
		echo $this->Form->input('prov_province');
		echo $this->Form->input('prov_city');
		echo $this->Form->input('prov_district');
		echo $this->Form->input('prov_barangay');
		echo $this->Form->input('prov_street_number');
		echo $this->Form->input('prov_subd');
		echo $this->Form->input('prov_zipcode');
		echo $this->Form->input('mail_country');
		echo $this->Form->input('mail_province');
		echo $this->Form->input('mail_municipality');
		echo $this->Form->input('mail_barangay');
		echo $this->Form->input('mail_subdivision');
		echo $this->Form->input('mail_street_number');
		echo $this->Form->input('mail_zipcode');
		echo $this->Form->input('primary_name');
		echo $this->Form->input('primary_relationship');
		echo $this->Form->input('primary_occupation');
		echo $this->Form->input('primary_country');
		echo $this->Form->input('primary_province');
		echo $this->Form->input('primary_municipality');
		echo $this->Form->input('primary_barangay');
		echo $this->Form->input('primary_subdivision');
		echo $this->Form->input('primary_street_number');
		echo $this->Form->input('primary_zipcode');
		echo $this->Form->input('secondary_name');
		echo $this->Form->input('secondary_relationship');
		echo $this->Form->input('secondary_occupation');
		echo $this->Form->input('secondary_country');
		echo $this->Form->input('secondary_province');
		echo $this->Form->input('secondary_municipality');
		echo $this->Form->input('secondary_barangay');
		echo $this->Form->input('secondary_subdivision');
		echo $this->Form->input('secondary_street_number');
		echo $this->Form->input('secondary_zipcode');
		echo $this->Form->input('date_created');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Students', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Year Levels', true), array('controller' => 'year_levels', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Year Level', true), array('controller' => 'year_levels', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sections', true), array('controller' => 'sections', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Section', true), array('controller' => 'sections', 'action' => 'add')); ?> </li>
	</ul>
</div>