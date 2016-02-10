<?php
class MeasurableItem extends AppModel {
	var $name = 'MeasurableItem';
	var $useDbConfig = 'sy_db';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'GeneralComponent' => array(
			'className' => 'GeneralComponent',
			'foreignKey' => 'general_component_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'RecordbookDetail' => array(
			'className' => 'RecordbookDetail',
			'foreignKey' => 'recordbook_detail_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Rawscore' => array(
			'className' => 'Rawscore',
			'foreignKey' => 'measurable_item_id',
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
