<?php
class Student extends AppModel {
	var $name = 'Student';
	
	var $virtualFields = array(
		'full_name' => 'CONCAT(Student.first_name, ", " ,Student.last_name, " ",Student.middle_name)',
	);
	
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
		'YearLevel' => array(
			'className' => 'YearLevel',
			'foreignKey' => 'year_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Section' => array(
			'className' => 'Section',
			'foreignKey' => 'section_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
