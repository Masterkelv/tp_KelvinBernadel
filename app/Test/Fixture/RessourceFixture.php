<?php
/**
 * RessourceFixture
 *
 */
class RessourceFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'members_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'res_name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'res_amount' => array('type' => 'integer', 'null' => false, 'default' => null),
		'res_otherdetails' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 150, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'visible' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 1),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'members_id' => 1,
			'id' => 1,
			'res_name' => 'Lorem ipsum dolor sit amet',
			'res_amount' => 1,
			'res_otherdetails' => 'Lorem ipsum dolor sit amet',
			'visible' => 1
		),
	);

}
