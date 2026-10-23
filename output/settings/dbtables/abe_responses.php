<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['abe_responses'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'ABE_RES_UID',
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
			'name' => 'ABE_REQ_UID',
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
			'name' => 'ABE_RES_CLIENT_IP',
			'type' => 200,
			'size' => 20,
			'scale' => 0,
			'typeName' => 'varchar(20)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_RES_DATA',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'mediumtext',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_RES_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_RES_STATUS',
			'type' => 200,
			'size' => 10,
			'scale' => 0,
			'typeName' => 'varchar(10)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_RES_MESSAGE',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'ABE_RES_UID' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'ABE_RESPONSES' 
);
?>