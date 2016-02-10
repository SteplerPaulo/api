<?php
class GeneralComponent extends AppModel {
	var $name = 'GeneralComponent';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'TemplateDetail' => array(
			'className' => 'TemplateDetail',
			'foreignKey' => 'general_component_id',
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
