<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['abe_requests'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
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
			'name' => 'ABE_UID',
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
			'name' => 'APP_UID',
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
			'name' => 'DEL_INDEX',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'ABE_REQ_SENT_TO',
			'type' => 200,
			'size' => 100,
			'scale' => 0,
			'typeName' => 'varchar(100)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_REQ_SUBJECT',
			'type' => 200,
			'size' => 150,
			'scale' => 0,
			'typeName' => 'varchar(150)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_REQ_BODY',
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
			'name' => 'ABE_REQ_DATE',
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
			'name' => 'ABE_REQ_STATUS',
			'type' => 200,
			'size' => 10,
			'scale' => 0,
			'typeName' => 'varchar(10)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'ABE_REQ_ANSWERED',
			'type' => 16,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'tinyint(4)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		) 
	),
	'primaryKeys' => array( 
		'ABE_REQ_UID' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'ABE_REQUESTS' 
);
?>