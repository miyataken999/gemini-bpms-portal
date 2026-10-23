<?php
global $runnerTableSettings;
$runnerTableSettings['USERS'] = array(
	'name' => 'USERS',
	'shortName' => 'USERS',
	'pagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'pageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'USERS',
	'afterAddDetail' => 'USERS',
	'detailsBadgeColor' => 'edca00',
	'sql' => 'SELECT
	USR_UID,
	USR_ID,
	USR_USERNAME,
	USR_PASSWORD,
	USR_FIRSTNAME,
	USR_LASTNAME,
	USR_EMAIL,
	USR_DUE_DATE,
	USR_CREATE_DATE,
	USR_UPDATE_DATE,
	USR_STATUS,
	USR_COUNTRY,
	USR_CITY,
	USR_LOCATION,
	USR_ADDRESS,
	USR_PHONE,
	USR_FAX,
	USR_CELLULAR,
	USR_ZIP_CODE,
	DEP_UID,
	USR_POSITION,
	USR_RESUME,
	USR_BIRTHDAY,
	USR_ROLE,
	USR_REPORTS_TO,
	USR_REPLACED_BY,
	USR_UX,
	USR_COST_BY_HOUR,
	USR_UNIT_COST,
	USR_PMDRIVE_FOLDER_UID,
	USR_BOOKMARK_START_CASES,
	USR_TIME_ZONE,
	USR_DEFAULT_LANG,
	USR_LAST_LOGIN
FROM
	USERS',
	'keyFields' => array( 
		'USR_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'USR_UID' => array(
			'name' => 'USR_UID',
			'goodName' => 'USR_UID',
			'strField' => 'USR_UID',
			'index' => 1,
			'sqlExpression' => 'USR_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_ID' => array(
			'name' => 'USR_ID',
			'goodName' => 'USR_ID',
			'strField' => 'USR_ID',
			'index' => 2,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'USR_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_USERNAME' => array(
			'name' => 'USR_USERNAME',
			'goodName' => 'USR_USERNAME',
			'strField' => 'USR_USERNAME',
			'index' => 3,
			'sqlExpression' => 'USR_USERNAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_PASSWORD' => array(
			'name' => 'USR_PASSWORD',
			'goodName' => 'USR_PASSWORD',
			'strField' => 'USR_PASSWORD',
			'index' => 4,
			'sqlExpression' => 'USR_PASSWORD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_FIRSTNAME' => array(
			'name' => 'USR_FIRSTNAME',
			'goodName' => 'USR_FIRSTNAME',
			'strField' => 'USR_FIRSTNAME',
			'index' => 5,
			'sqlExpression' => 'USR_FIRSTNAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_LASTNAME' => array(
			'name' => 'USR_LASTNAME',
			'goodName' => 'USR_LASTNAME',
			'strField' => 'USR_LASTNAME',
			'index' => 6,
			'sqlExpression' => 'USR_LASTNAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_EMAIL' => array(
			'name' => 'USR_EMAIL',
			'goodName' => 'USR_EMAIL',
			'strField' => 'USR_EMAIL',
			'index' => 7,
			'sqlExpression' => 'USR_EMAIL',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_DUE_DATE' => array(
			'name' => 'USR_DUE_DATE',
			'goodName' => 'USR_DUE_DATE',
			'strField' => 'USR_DUE_DATE',
			'index' => 8,
			'type' => 7,
			'sqlExpression' => 'USR_DUE_DATE',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_CREATE_DATE' => array(
			'name' => 'USR_CREATE_DATE',
			'goodName' => 'USR_CREATE_DATE',
			'strField' => 'USR_CREATE_DATE',
			'index' => 9,
			'type' => 135,
			'sqlExpression' => 'USR_CREATE_DATE',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_UPDATE_DATE' => array(
			'name' => 'USR_UPDATE_DATE',
			'goodName' => 'USR_UPDATE_DATE',
			'strField' => 'USR_UPDATE_DATE',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'USR_UPDATE_DATE',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_STATUS' => array(
			'name' => 'USR_STATUS',
			'goodName' => 'USR_STATUS',
			'strField' => 'USR_STATUS',
			'index' => 11,
			'sqlExpression' => 'USR_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_COUNTRY' => array(
			'name' => 'USR_COUNTRY',
			'goodName' => 'USR_COUNTRY',
			'strField' => 'USR_COUNTRY',
			'index' => 12,
			'sqlExpression' => 'USR_COUNTRY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_CITY' => array(
			'name' => 'USR_CITY',
			'goodName' => 'USR_CITY',
			'strField' => 'USR_CITY',
			'index' => 13,
			'sqlExpression' => 'USR_CITY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_LOCATION' => array(
			'name' => 'USR_LOCATION',
			'goodName' => 'USR_LOCATION',
			'strField' => 'USR_LOCATION',
			'index' => 14,
			'sqlExpression' => 'USR_LOCATION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_ADDRESS' => array(
			'name' => 'USR_ADDRESS',
			'goodName' => 'USR_ADDRESS',
			'strField' => 'USR_ADDRESS',
			'index' => 15,
			'sqlExpression' => 'USR_ADDRESS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_PHONE' => array(
			'name' => 'USR_PHONE',
			'goodName' => 'USR_PHONE',
			'strField' => 'USR_PHONE',
			'index' => 16,
			'sqlExpression' => 'USR_PHONE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_FAX' => array(
			'name' => 'USR_FAX',
			'goodName' => 'USR_FAX',
			'strField' => 'USR_FAX',
			'index' => 17,
			'sqlExpression' => 'USR_FAX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_CELLULAR' => array(
			'name' => 'USR_CELLULAR',
			'goodName' => 'USR_CELLULAR',
			'strField' => 'USR_CELLULAR',
			'index' => 18,
			'sqlExpression' => 'USR_CELLULAR',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_ZIP_CODE' => array(
			'name' => 'USR_ZIP_CODE',
			'goodName' => 'USR_ZIP_CODE',
			'strField' => 'USR_ZIP_CODE',
			'index' => 19,
			'sqlExpression' => 'USR_ZIP_CODE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'DEP_UID' => array(
			'name' => 'DEP_UID',
			'goodName' => 'DEP_UID',
			'strField' => 'DEP_UID',
			'index' => 20,
			'sqlExpression' => 'DEP_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_POSITION' => array(
			'name' => 'USR_POSITION',
			'goodName' => 'USR_POSITION',
			'strField' => 'USR_POSITION',
			'index' => 21,
			'sqlExpression' => 'USR_POSITION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_RESUME' => array(
			'name' => 'USR_RESUME',
			'goodName' => 'USR_RESUME',
			'strField' => 'USR_RESUME',
			'index' => 22,
			'sqlExpression' => 'USR_RESUME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_BIRTHDAY' => array(
			'name' => 'USR_BIRTHDAY',
			'goodName' => 'USR_BIRTHDAY',
			'strField' => 'USR_BIRTHDAY',
			'index' => 23,
			'type' => 7,
			'sqlExpression' => 'USR_BIRTHDAY',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_ROLE' => array(
			'name' => 'USR_ROLE',
			'goodName' => 'USR_ROLE',
			'strField' => 'USR_ROLE',
			'index' => 24,
			'sqlExpression' => 'USR_ROLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_REPORTS_TO' => array(
			'name' => 'USR_REPORTS_TO',
			'goodName' => 'USR_REPORTS_TO',
			'strField' => 'USR_REPORTS_TO',
			'index' => 25,
			'sqlExpression' => 'USR_REPORTS_TO',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_REPLACED_BY' => array(
			'name' => 'USR_REPLACED_BY',
			'goodName' => 'USR_REPLACED_BY',
			'strField' => 'USR_REPLACED_BY',
			'index' => 26,
			'sqlExpression' => 'USR_REPLACED_BY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_UX' => array(
			'name' => 'USR_UX',
			'goodName' => 'USR_UX',
			'strField' => 'USR_UX',
			'index' => 27,
			'sqlExpression' => 'USR_UX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_COST_BY_HOUR' => array(
			'name' => 'USR_COST_BY_HOUR',
			'goodName' => 'USR_COST_BY_HOUR',
			'strField' => 'USR_COST_BY_HOUR',
			'index' => 28,
			'type' => 14,
			'sqlExpression' => 'USR_COST_BY_HOUR',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_UNIT_COST' => array(
			'name' => 'USR_UNIT_COST',
			'goodName' => 'USR_UNIT_COST',
			'strField' => 'USR_UNIT_COST',
			'index' => 29,
			'sqlExpression' => 'USR_UNIT_COST',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_PMDRIVE_FOLDER_UID' => array(
			'name' => 'USR_PMDRIVE_FOLDER_UID',
			'goodName' => 'USR_PMDRIVE_FOLDER_UID',
			'strField' => 'USR_PMDRIVE_FOLDER_UID',
			'index' => 30,
			'sqlExpression' => 'USR_PMDRIVE_FOLDER_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_BOOKMARK_START_CASES' => array(
			'name' => 'USR_BOOKMARK_START_CASES',
			'goodName' => 'USR_BOOKMARK_START_CASES',
			'strField' => 'USR_BOOKMARK_START_CASES',
			'index' => 31,
			'type' => 201,
			'sqlExpression' => 'USR_BOOKMARK_START_CASES',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_TIME_ZONE' => array(
			'name' => 'USR_TIME_ZONE',
			'goodName' => 'USR_TIME_ZONE',
			'strField' => 'USR_TIME_ZONE',
			'index' => 32,
			'sqlExpression' => 'USR_TIME_ZONE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_DEFAULT_LANG' => array(
			'name' => 'USR_DEFAULT_LANG',
			'goodName' => 'USR_DEFAULT_LANG',
			'strField' => 'USR_DEFAULT_LANG',
			'index' => 33,
			'sqlExpression' => 'USR_DEFAULT_LANG',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'USERS' 
		),
		'USR_LAST_LOGIN' => array(
			'name' => 'USR_LAST_LOGIN',
			'goodName' => 'USR_LAST_LOGIN',
			'strField' => 'USR_LAST_LOGIN',
			'index' => 34,
			'type' => 135,
			'sqlExpression' => 'USR_LAST_LOGIN',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Short Date' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Date',
					'dateEditType' => 11 
				) 
			),
			'tableName' => 'USERS' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	USR_UID,
	USR_ID,
	USR_USERNAME,
	USR_PASSWORD,
	USR_FIRSTNAME,
	USR_LASTNAME,
	USR_EMAIL,
	USR_DUE_DATE,
	USR_CREATE_DATE,
	USR_UPDATE_DATE,
	USR_STATUS,
	USR_COUNTRY,
	USR_CITY,
	USR_LOCATION,
	USR_ADDRESS,
	USR_PHONE,
	USR_FAX,
	USR_CELLULAR,
	USR_ZIP_CODE,
	DEP_UID,
	USR_POSITION,
	USR_RESUME,
	USR_BIRTHDAY,
	USR_ROLE,
	USR_REPORTS_TO,
	USR_REPLACED_BY,
	USR_UX,
	USR_COST_BY_HOUR,
	USR_UNIT_COST,
	USR_PMDRIVE_FOLDER_UID,
	USR_BOOKMARK_START_CASES,
	USR_TIME_ZONE,
	USR_DEFAULT_LANG,
	USR_LAST_LOGIN
FROM
	USERS',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'USR_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_UID' 
				),
				'encrypted' => false,
				'columnName' => 'USR_UID' 
			),
			array(
				'sql' => 'USR_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_ID' 
				),
				'encrypted' => false,
				'columnName' => 'USR_ID' 
			),
			array(
				'sql' => 'USR_USERNAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_USERNAME' 
				),
				'encrypted' => false,
				'columnName' => 'USR_USERNAME' 
			),
			array(
				'sql' => 'USR_PASSWORD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_PASSWORD' 
				),
				'encrypted' => false,
				'columnName' => 'USR_PASSWORD' 
			),
			array(
				'sql' => 'USR_FIRSTNAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_FIRSTNAME' 
				),
				'encrypted' => false,
				'columnName' => 'USR_FIRSTNAME' 
			),
			array(
				'sql' => 'USR_LASTNAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_LASTNAME' 
				),
				'encrypted' => false,
				'columnName' => 'USR_LASTNAME' 
			),
			array(
				'sql' => 'USR_EMAIL',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_EMAIL' 
				),
				'encrypted' => false,
				'columnName' => 'USR_EMAIL' 
			),
			array(
				'sql' => 'USR_DUE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_DUE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_DUE_DATE' 
			),
			array(
				'sql' => 'USR_CREATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_CREATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_CREATE_DATE' 
			),
			array(
				'sql' => 'USR_UPDATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_UPDATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_UPDATE_DATE' 
			),
			array(
				'sql' => 'USR_STATUS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'USR_STATUS' 
			),
			array(
				'sql' => 'USR_COUNTRY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_COUNTRY' 
				),
				'encrypted' => false,
				'columnName' => 'USR_COUNTRY' 
			),
			array(
				'sql' => 'USR_CITY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_CITY' 
				),
				'encrypted' => false,
				'columnName' => 'USR_CITY' 
			),
			array(
				'sql' => 'USR_LOCATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_LOCATION' 
				),
				'encrypted' => false,
				'columnName' => 'USR_LOCATION' 
			),
			array(
				'sql' => 'USR_ADDRESS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_ADDRESS' 
				),
				'encrypted' => false,
				'columnName' => 'USR_ADDRESS' 
			),
			array(
				'sql' => 'USR_PHONE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_PHONE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_PHONE' 
			),
			array(
				'sql' => 'USR_FAX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_FAX' 
				),
				'encrypted' => false,
				'columnName' => 'USR_FAX' 
			),
			array(
				'sql' => 'USR_CELLULAR',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_CELLULAR' 
				),
				'encrypted' => false,
				'columnName' => 'USR_CELLULAR' 
			),
			array(
				'sql' => 'USR_ZIP_CODE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_ZIP_CODE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_ZIP_CODE' 
			),
			array(
				'sql' => 'DEP_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'DEP_UID' 
				),
				'encrypted' => false,
				'columnName' => 'DEP_UID' 
			),
			array(
				'sql' => 'USR_POSITION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_POSITION' 
				),
				'encrypted' => false,
				'columnName' => 'USR_POSITION' 
			),
			array(
				'sql' => 'USR_RESUME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_RESUME' 
				),
				'encrypted' => false,
				'columnName' => 'USR_RESUME' 
			),
			array(
				'sql' => 'USR_BIRTHDAY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_BIRTHDAY' 
				),
				'encrypted' => false,
				'columnName' => 'USR_BIRTHDAY' 
			),
			array(
				'sql' => 'USR_ROLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_ROLE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_ROLE' 
			),
			array(
				'sql' => 'USR_REPORTS_TO',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_REPORTS_TO' 
				),
				'encrypted' => false,
				'columnName' => 'USR_REPORTS_TO' 
			),
			array(
				'sql' => 'USR_REPLACED_BY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_REPLACED_BY' 
				),
				'encrypted' => false,
				'columnName' => 'USR_REPLACED_BY' 
			),
			array(
				'sql' => 'USR_UX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_UX' 
				),
				'encrypted' => false,
				'columnName' => 'USR_UX' 
			),
			array(
				'sql' => 'USR_COST_BY_HOUR',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_COST_BY_HOUR' 
				),
				'encrypted' => false,
				'columnName' => 'USR_COST_BY_HOUR' 
			),
			array(
				'sql' => 'USR_UNIT_COST',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_UNIT_COST' 
				),
				'encrypted' => false,
				'columnName' => 'USR_UNIT_COST' 
			),
			array(
				'sql' => 'USR_PMDRIVE_FOLDER_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_PMDRIVE_FOLDER_UID' 
				),
				'encrypted' => false,
				'columnName' => 'USR_PMDRIVE_FOLDER_UID' 
			),
			array(
				'sql' => 'USR_BOOKMARK_START_CASES',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_BOOKMARK_START_CASES' 
				),
				'encrypted' => false,
				'columnName' => 'USR_BOOKMARK_START_CASES' 
			),
			array(
				'sql' => 'USR_TIME_ZONE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_TIME_ZONE' 
				),
				'encrypted' => false,
				'columnName' => 'USR_TIME_ZONE' 
			),
			array(
				'sql' => 'USR_DEFAULT_LANG',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_DEFAULT_LANG' 
				),
				'encrypted' => false,
				'columnName' => 'USR_DEFAULT_LANG' 
			),
			array(
				'sql' => 'USR_LAST_LOGIN',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'USERS',
					'name' => 'USR_LAST_LOGIN' 
				),
				'encrypted' => false,
				'columnName' => 'USR_LAST_LOGIN' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'USERS',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'USERS',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'USR_UID',
						'USR_ID',
						'USR_USERNAME',
						'USR_PASSWORD',
						'USR_FIRSTNAME',
						'USR_LASTNAME',
						'USR_EMAIL',
						'USR_DUE_DATE',
						'USR_CREATE_DATE',
						'USR_UPDATE_DATE',
						'USR_STATUS',
						'USR_COUNTRY',
						'USR_CITY',
						'USR_LOCATION',
						'USR_ADDRESS',
						'USR_PHONE',
						'USR_FAX',
						'USR_CELLULAR',
						'USR_ZIP_CODE',
						'DEP_UID',
						'USR_POSITION',
						'USR_RESUME',
						'USR_BIRTHDAY',
						'USR_ROLE',
						'USR_REPORTS_TO',
						'USR_REPLACED_BY',
						'USR_UX',
						'USR_COST_BY_HOUR',
						'USR_UNIT_COST',
						'USR_PMDRIVE_FOLDER_UID',
						'USR_BOOKMARK_START_CASES',
						'USR_TIME_ZONE',
						'USR_DEFAULT_LANG',
						'USR_LAST_LOGIN' 
					),
					'name' => 'USERS' 
				),
				'joinOn' => array(
					'sql' => '',
					'parsed' => false,
					'type' => 'LogicalExpression',
					'contained' => array( 
						 
					),
					'unionType' => 0,
					'column' => null 
				),
				'joinList' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'JoinOn',
					'field1' => array( 
						 
					),
					'field2' => array( 
						 
					) 
				),
				'link' => 0 
			) 
		),
		'where' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'groupBy' => array( 
			 
		),
		'having' => array(
			'sql' => '',
			'parsed' => false,
			'type' => 'LogicalExpression',
			'contained' => array( 
				 
			),
			'unionType' => 0,
			'column' => null 
		),
		'orderBy' => array( 
			 
		),
		'colsIndex' => array( 
			array(
				'fieldIndex' => 0,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 1,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 2,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 3,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 4,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 5,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 6,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 7,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 8,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 9,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 15,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 16,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 17,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 18,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 19,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 20,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 21,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 22,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 23,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 24,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 25,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 26,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 27,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 28,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 29,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 30,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 31,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 32,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 33,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'USR_UID,
	USR_ID,
	USR_USERNAME,
	USR_PASSWORD,
	USR_FIRSTNAME,
	USR_LASTNAME,
	USR_EMAIL,
	USR_DUE_DATE,
	USR_CREATE_DATE,
	USR_UPDATE_DATE,
	USR_STATUS,
	USR_COUNTRY,
	USR_CITY,
	USR_LOCATION,
	USR_ADDRESS,
	USR_PHONE,
	USR_FAX,
	USR_CELLULAR,
	USR_ZIP_CODE,
	DEP_UID,
	USR_POSITION,
	USR_RESUME,
	USR_BIRTHDAY,
	USR_ROLE,
	USR_REPORTS_TO,
	USR_REPLACED_BY,
	USR_UX,
	USR_COST_BY_HOUR,
	USR_UNIT_COST,
	USR_PMDRIVE_FOLDER_UID,
	USR_BOOKMARK_START_CASES,
	USR_TIME_ZONE,
	USR_DEFAULT_LANG,
	USR_LAST_LOGIN',
		'fromListSql' => 'FROM
	USERS',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'USERS',
	'originalPagesByType' => array(
		'add' => array( 
			'add' 
		),
		'export' => array( 
			'export' 
		),
		'import' => array( 
			'import' 
		),
		'edit' => array( 
			'edit' 
		),
		'view' => array( 
			'view' 
		),
		'list' => array( 
			'list' 
		),
		'print' => array( 
			'print' 
		),
		'search' => array( 
			'search' 
		) 
	),
	'originalPageTypes' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'edit' => 'edit',
		'view' => 'view',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'USR_UID',
			'USR_ID',
			'USR_USERNAME',
			'USR_PASSWORD',
			'USR_FIRSTNAME',
			'USR_LASTNAME',
			'USR_EMAIL',
			'USR_DUE_DATE',
			'USR_CREATE_DATE',
			'USR_UPDATE_DATE',
			'USR_STATUS',
			'USR_COUNTRY',
			'USR_CITY',
			'USR_LOCATION',
			'USR_ADDRESS',
			'USR_PHONE',
			'USR_FAX',
			'USR_CELLULAR',
			'USR_ZIP_CODE',
			'DEP_UID',
			'USR_POSITION',
			'USR_RESUME',
			'USR_BIRTHDAY',
			'USR_ROLE',
			'USR_REPORTS_TO',
			'USR_REPLACED_BY',
			'USR_UX',
			'USR_COST_BY_HOUR',
			'USR_UNIT_COST',
			'USR_PMDRIVE_FOLDER_UID',
			'USR_BOOKMARK_START_CASES',
			'USR_TIME_ZONE',
			'USR_DEFAULT_LANG',
			'USR_LAST_LOGIN' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'USR_UID',
			'USR_ID',
			'USR_USERNAME',
			'USR_PASSWORD',
			'USR_FIRSTNAME',
			'USR_LASTNAME',
			'USR_EMAIL',
			'USR_DUE_DATE',
			'USR_CREATE_DATE',
			'USR_UPDATE_DATE',
			'USR_STATUS',
			'USR_COUNTRY',
			'USR_CITY',
			'USR_LOCATION',
			'USR_ADDRESS',
			'USR_PHONE',
			'USR_FAX',
			'USR_CELLULAR',
			'USR_ZIP_CODE',
			'DEP_UID',
			'USR_POSITION',
			'USR_RESUME',
			'USR_BIRTHDAY',
			'USR_ROLE',
			'USR_REPORTS_TO',
			'USR_REPLACED_BY',
			'USR_UX',
			'USR_COST_BY_HOUR',
			'USR_UNIT_COST',
			'USR_PMDRIVE_FOLDER_UID',
			'USR_BOOKMARK_START_CASES',
			'USR_TIME_ZONE',
			'USR_DEFAULT_LANG',
			'USR_LAST_LOGIN' 
		) 
	),
	'connId' => 'conn',
	'clickActions' => array(
		'row' => array(
			'action' => 'noaction' 
		),
		'fields' => array(
			 
		) 
	),
	'geoCoding' => array(
		'enabled' => false,
		'latField' => '',
		'lonField' => '',
		'addressFields' => array( 
			 
		) 
	),
	'whereTabs' => array( 
		 
	),
	'labels' => array(
		 
	),
	'chartSettings' => array(
		 
	),
	'dataSourceOperations' => array(
		 
	),
	'calendarSettings' => array(
		'categoryColors' => array( 
			 
		) 
	),
	'ganttSettings' => array(
		'categoryColors' => array( 
			 
		) 
	) 
);

global $runnerTableLabels;
if( mlang_getcurrentlang() === 'English' ) {
	$runnerTableLabels['USERS'] = array(
	'tableCaption' => 'USERS',
	'fieldLabels' => array(
		'USR_UID' => 'USR UID',
		'USR_ID' => 'USR ID',
		'USR_USERNAME' => 'USR USERNAME',
		'USR_PASSWORD' => 'USR PASSWORD',
		'USR_FIRSTNAME' => 'USR FIRSTNAME',
		'USR_LASTNAME' => 'USR LASTNAME',
		'USR_EMAIL' => 'USR EMAIL',
		'USR_DUE_DATE' => 'USR DUE DATE',
		'USR_CREATE_DATE' => 'USR CREATE DATE',
		'USR_UPDATE_DATE' => 'USR UPDATE DATE',
		'USR_STATUS' => 'USR STATUS',
		'USR_COUNTRY' => 'USR COUNTRY',
		'USR_CITY' => 'USR CITY',
		'USR_LOCATION' => 'USR LOCATION',
		'USR_ADDRESS' => 'USR ADDRESS',
		'USR_PHONE' => 'USR PHONE',
		'USR_FAX' => 'USR FAX',
		'USR_CELLULAR' => 'USR CELLULAR',
		'USR_ZIP_CODE' => 'USR ZIP CODE',
		'DEP_UID' => 'DEP UID',
		'USR_POSITION' => 'USR POSITION',
		'USR_RESUME' => 'USR RESUME',
		'USR_BIRTHDAY' => 'USR BIRTHDAY',
		'USR_ROLE' => 'USR ROLE',
		'USR_REPORTS_TO' => 'USR REPORTS TO',
		'USR_REPLACED_BY' => 'USR REPLACED BY',
		'USR_UX' => 'USR UX',
		'USR_COST_BY_HOUR' => 'USR COST BY HOUR',
		'USR_UNIT_COST' => 'USR UNIT COST',
		'USR_PMDRIVE_FOLDER_UID' => 'USR PMDRIVE FOLDER UID',
		'USR_BOOKMARK_START_CASES' => 'USR BOOKMARK START CASES',
		'USR_TIME_ZONE' => 'USR TIME ZONE',
		'USR_DEFAULT_LANG' => 'USR DEFAULT LANG',
		'USR_LAST_LOGIN' => 'USR LAST LOGIN' 
	),
	'fieldTooltips' => array(
		'USR_UID' => '',
		'USR_ID' => '',
		'USR_USERNAME' => '',
		'USR_PASSWORD' => '',
		'USR_FIRSTNAME' => '',
		'USR_LASTNAME' => '',
		'USR_EMAIL' => '',
		'USR_DUE_DATE' => '',
		'USR_CREATE_DATE' => '',
		'USR_UPDATE_DATE' => '',
		'USR_STATUS' => '',
		'USR_COUNTRY' => '',
		'USR_CITY' => '',
		'USR_LOCATION' => '',
		'USR_ADDRESS' => '',
		'USR_PHONE' => '',
		'USR_FAX' => '',
		'USR_CELLULAR' => '',
		'USR_ZIP_CODE' => '',
		'DEP_UID' => '',
		'USR_POSITION' => '',
		'USR_RESUME' => '',
		'USR_BIRTHDAY' => '',
		'USR_ROLE' => '',
		'USR_REPORTS_TO' => '',
		'USR_REPLACED_BY' => '',
		'USR_UX' => '',
		'USR_COST_BY_HOUR' => '',
		'USR_UNIT_COST' => '',
		'USR_PMDRIVE_FOLDER_UID' => '',
		'USR_BOOKMARK_START_CASES' => '',
		'USR_TIME_ZONE' => '',
		'USR_DEFAULT_LANG' => '',
		'USR_LAST_LOGIN' => '' 
	),
	'fieldPlaceholders' => array(
		'USR_UID' => '',
		'USR_ID' => '',
		'USR_USERNAME' => '',
		'USR_PASSWORD' => '',
		'USR_FIRSTNAME' => '',
		'USR_LASTNAME' => '',
		'USR_EMAIL' => '',
		'USR_DUE_DATE' => '',
		'USR_CREATE_DATE' => '',
		'USR_UPDATE_DATE' => '',
		'USR_STATUS' => '',
		'USR_COUNTRY' => '',
		'USR_CITY' => '',
		'USR_LOCATION' => '',
		'USR_ADDRESS' => '',
		'USR_PHONE' => '',
		'USR_FAX' => '',
		'USR_CELLULAR' => '',
		'USR_ZIP_CODE' => '',
		'DEP_UID' => '',
		'USR_POSITION' => '',
		'USR_RESUME' => '',
		'USR_BIRTHDAY' => '',
		'USR_ROLE' => '',
		'USR_REPORTS_TO' => '',
		'USR_REPLACED_BY' => '',
		'USR_UX' => '',
		'USR_COST_BY_HOUR' => '',
		'USR_UNIT_COST' => '',
		'USR_PMDRIVE_FOLDER_UID' => '',
		'USR_BOOKMARK_START_CASES' => '',
		'USR_TIME_ZONE' => '',
		'USR_DEFAULT_LANG' => '',
		'USR_LAST_LOGIN' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>