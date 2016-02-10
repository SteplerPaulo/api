<?php
/* Recordbook Fixture generated on: 2016-02-03 07:05:53 : 1454479553 */
class RecordbookFixture extends CakeTestFixture {
	var $name = 'Recordbook';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'faculty_load_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'period_id' => array('type' => 'integer', 'null' => true, 'default' => NULL, 'length' => 3),
		'template_id' => array('type' => 'integer', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'faculty_load_id' => 1,
			'period_id' => 1,
			'template_id' => 1
		),
	);
}
