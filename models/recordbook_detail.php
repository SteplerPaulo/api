<?php
class RecordbookDetail extends AppModel {
	var $name = 'RecordbookDetail';
	var $useDbConfig = 'sy_db';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Recordbook' => array(
			'className' => 'Recordbook',
			'foreignKey' => 'recordbook_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'GeneralComponent' => array(
			'className' => 'GeneralComponent',
			'foreignKey' => 'general_component_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'MeasurableItem' => array(
			'className' => 'MeasurableItem',
			'foreignKey' => 'recordbook_detail_id',
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
