<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['dynaform'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'DYN_UID',
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
			'name' => 'DYN_TITLE',
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
			'name' => 'DYN_DESCRIPTION',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'mediumtext',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'PRO_UID',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'0\'',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'DYN_TYPE',
			'type' => 200,
			'size' => 20,
			'scale' => 0,
			'typeName' => 'varchar(20)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'xmlform\'',
			'defaultValue' => 'xmlform' 
		),
		array(
			'name' => 'DYN_FILENAME',
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
			'name' => 'DYN_CONTENT',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'mediumtext',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DYN_LABEL',
			'type' => 201,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'mediumtext',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DYN_VERSION',
			'type' => 3,
			'size' => 11,
			'scale' => 0,
			'typeName' => 'int(11)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DYN_UPDATE_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'DYN_UID' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'DYNAFORM' 
);
?>