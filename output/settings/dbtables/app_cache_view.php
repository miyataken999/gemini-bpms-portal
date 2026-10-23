<?php
global $runnerDbTableInfo;
$runnerDbTableInfo['app_cache_view'] = array(
	'type' => 0,
	'foreignKeys' => array( 
		 
	),
	'fields' => array( 
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
			'name' => 'DEL_LAST_INDEX',
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
			'name' => 'APP_NUMBER',
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
			'name' => 'APP_STATUS',
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
			'name' => 'PREVIOUS_USR_UID',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
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
			'name' => 'PRO_UID',
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
			'name' => 'DEL_DELEGATE_DATE',
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
			'name' => 'DEL_INIT_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DEL_FINISH_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DEL_TASK_DUE_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DEL_RISK_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'DEL_THREAD_STATUS',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'OPEN\'',
			'defaultValue' => 'OPEN' 
		),
		array(
			'name' => 'APP_THREAD_STATUS',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'OPEN\'',
			'defaultValue' => 'OPEN' 
		),
		array(
			'name' => 'APP_TITLE',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'APP_PRO_TITLE',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'APP_TAS_TITLE',
			'type' => 200,
			'size' => 255,
			'scale' => 0,
			'typeName' => 'varchar(255)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'APP_CURRENT_USER',
			'type' => 200,
			'size' => 128,
			'scale' => 0,
			'typeName' => 'varchar(128)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'APP_DEL_PREVIOUS_USER',
			'type' => 200,
			'size' => 128,
			'scale' => 0,
			'typeName' => 'varchar(128)',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '\'\'',
			'defaultValue' => '' 
		),
		array(
			'name' => 'DEL_PRIORITY',
			'type' => 200,
			'size' => 32,
			'scale' => 0,
			'typeName' => 'varchar(32)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '\'3\'',
			'defaultValue' => '3' 
		),
		array(
			'name' => 'DEL_DURATION',
			'type' => 5,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'double',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'DEL_QUEUE_DURATION',
			'type' => 5,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'double',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'DEL_DELAY_DURATION',
			'type' => 5,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'double',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'DEL_STARTED',
			'type' => 16,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'tinyint(4)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'DEL_FINISHED',
			'type' => 16,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'tinyint(4)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'DEL_DELAYED',
			'type' => 16,
			'size' => 4,
			'scale' => 0,
			'typeName' => 'tinyint(4)',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => '0',
			'defaultValue' => '0' 
		),
		array(
			'name' => 'APP_CREATE_DATE',
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
			'name' => 'APP_FINISH_DATE',
			'type' => 135,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'datetime',
			'nullable' => true,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		),
		array(
			'name' => 'APP_UPDATE_DATE',
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
			'name' => 'APP_OVERDUE_PERCENTAGE',
			'type' => 5,
			'size' => 0,
			'scale' => 0,
			'typeName' => 'double',
			'nullable' => false,
			'autoinc' => false,
			'defaultValueSQL' => null,
			'defaultValue' => '' 
		) 
	),
	'primaryKeys' => array( 
		'APP_UID',
		'DEL_INDEX' 
	),
	'uniqueFields' => array( 
		 
	),
	'name' => 'APP_CACHE_VIEW' 
);
?>