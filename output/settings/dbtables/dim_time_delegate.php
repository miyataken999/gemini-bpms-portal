<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['dim_time_delegate'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
		array(
			'name' => 'TIME_ID',
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
			'name' => 'MONTH_ID',
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
			'name' => 'QTR_ID',
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
			'name' => 'YEAR_ID',
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
			'name' => 'MONTH_NAME',
			'type' => 200,
			'size' => 3,
			'scale' => 0,
			'typeName' => 'varchar(3)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'0\'',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'MONTH_DESC',
			'type' => 200,
			'size' => 9,
			'scale' => 0,
			'typeName' => 'varchar(9)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'QTR_NAME',
			'type' => 200,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'varchar(4)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'QTR_DESC',
			'type' => 200,
			'size' => 9,
			'scale' => 0,
			'typeName' => 'varchar(9)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'TIME_ID' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'DIM_TIME_DELEGATE' 
);
?>