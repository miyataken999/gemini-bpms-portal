<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['task_user'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'TAS_UID',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'USR_UID',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'TU_TYPE',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '1',
			'defaultValue' => '1' 
		),
		array(
			'name' => 'TU_RELATION',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		) 
	),
	'primaryKeys' => array( 
		'TAS_UID',
		'USR_UID',
		'TU_TYPE',
		'TU_RELATION' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'TASK_USER' 
);
?>