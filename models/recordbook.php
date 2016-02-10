<?php
class Recordbook extends AppModel {
	var $name = 'Recordbook';
	var $useDbConfig = 'sy_db';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'FacultyLoad' => array(
			'className' => 'FacultyLoad',
			'foreignKey' => 'faculty_load_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Template' => array(
			'className' => 'Template',
			'foreignKey' => 'template_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'RecordbookDetail' => array(
			'className' => 'RecordbookDetail',
			'foreignKey' => 'recordbook_id',
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
	
	public function open($id){
		//pr($from);exit;
		
		return $this->query( 
			"SELECT 
			  `recordbooks`.`id`,
			  `recordbooks`.`faculty_load_id`,
			  `recordbooks`.`period_id`,
			  `recordbooks`.`template_id`,
			  `templates`.`name`,
			  `template_details`.`general_component_id`,
			  `template_details`.`index_order`,
			  `template_details`.`percentage`,
			  `recordbook_details`.`id`,
			  `general_components`.`id`,
			  `general_components`.`name` 
			FROM
			  `newerb`.`recordbooks` 
			  INNER JOIN `newerb`.`recordbook_details` 
				ON (
				  `recordbooks`.`id` = `recordbook_details`.`recordbook_id`
				) 
			  INNER JOIN `newerb`.`templates` 
				ON (
				  `recordbook_details`.`template_id` = `templates`.`id`
				) 
			  INNER JOIN `newerb`.`template_details` 
				ON (
				  `templates`.`id` = `template_details`.`template_id`
				) 
			  INNER JOIN `newerb`.`general_components` 
				ON (
				  `template_details`.`general_component_id` = `general_components`.`id`
				) 
			WHERE (`recordbooks`.`id` = $id)"
		);
	
	}

}
