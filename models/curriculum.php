<?php
class Curriculum extends AppModel {
	var $name = 'Curriculum';
	var $useDbConfig = 'sy_db';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'EducLevel' => array(
			'className' => 'EducLevel',
			'foreignKey' => 'educ_level_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'CurriculumDetail' => array(
			'className' => 'CurriculumDetail',
			'foreignKey' => 'curriculum_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
