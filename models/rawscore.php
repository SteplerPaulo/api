<?php
class Rawscore extends AppModel {
	var $name = 'Rawscore';
	var $useDbConfig = 'sy_db';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'MeasurableItem' => array(
			'className' => 'MeasurableItem',
			'foreignKey' => 'measurable_item_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
