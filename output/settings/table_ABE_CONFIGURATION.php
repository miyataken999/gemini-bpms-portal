<?php
global $runnerTableSettings;
$runnerTableSettings['ABE_CONFIGURATION'] = array(
	'name' => 'ABE_CONFIGURATION',
	'shortName' => 'ABE_CONFIGURATION',
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
	'afterEditDetails' => 'ABE_CONFIGURATION',
	'afterAddDetail' => 'ABE_CONFIGURATION',
	'detailsBadgeColor' => '00c2c5',
	'sql' => 'SELECT
	ABE_UID,
	PRO_UID,
	TAS_UID,
	ABE_TYPE,
	ABE_TEMPLATE,
	ABE_DYN_TYPE,
	DYN_UID,
	ABE_EMAIL_FIELD,
	ABE_ACTION_FIELD,
	ABE_CASE_NOTE_IN_RESPONSE,
	ABE_FORCE_LOGIN,
	ABE_CREATE_DATE,
	ABE_UPDATE_DATE,
	ABE_SUBJECT_FIELD,
	ABE_MAILSERVER_OR_MAILCURRENT,
	ABE_CUSTOM_GRID,
	ABE_EMAIL_SERVER_UID
FROM
	ABE_CONFIGURATION',
	'keyFields' => array( 
		'ABE_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ABE_UID' => array(
			'name' => 'ABE_UID',
			'goodName' => 'ABE_UID',
			'strField' => 'ABE_UID',
			'index' => 1,
			'sqlExpression' => 'ABE_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'PRO_UID' => array(
			'name' => 'PRO_UID',
			'goodName' => 'PRO_UID',
			'strField' => 'PRO_UID',
			'index' => 2,
			'sqlExpression' => 'PRO_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'TAS_UID' => array(
			'name' => 'TAS_UID',
			'goodName' => 'TAS_UID',
			'strField' => 'TAS_UID',
			'index' => 3,
			'sqlExpression' => 'TAS_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_TYPE' => array(
			'name' => 'ABE_TYPE',
			'goodName' => 'ABE_TYPE',
			'strField' => 'ABE_TYPE',
			'index' => 4,
			'sqlExpression' => 'ABE_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_TEMPLATE' => array(
			'name' => 'ABE_TEMPLATE',
			'goodName' => 'ABE_TEMPLATE',
			'strField' => 'ABE_TEMPLATE',
			'index' => 5,
			'sqlExpression' => 'ABE_TEMPLATE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_DYN_TYPE' => array(
			'name' => 'ABE_DYN_TYPE',
			'goodName' => 'ABE_DYN_TYPE',
			'strField' => 'ABE_DYN_TYPE',
			'index' => 6,
			'sqlExpression' => 'ABE_DYN_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'DYN_UID' => array(
			'name' => 'DYN_UID',
			'goodName' => 'DYN_UID',
			'strField' => 'DYN_UID',
			'index' => 7,
			'sqlExpression' => 'DYN_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_EMAIL_FIELD' => array(
			'name' => 'ABE_EMAIL_FIELD',
			'goodName' => 'ABE_EMAIL_FIELD',
			'strField' => 'ABE_EMAIL_FIELD',
			'index' => 8,
			'sqlExpression' => 'ABE_EMAIL_FIELD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_ACTION_FIELD' => array(
			'name' => 'ABE_ACTION_FIELD',
			'goodName' => 'ABE_ACTION_FIELD',
			'strField' => 'ABE_ACTION_FIELD',
			'index' => 9,
			'sqlExpression' => 'ABE_ACTION_FIELD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_CASE_NOTE_IN_RESPONSE' => array(
			'name' => 'ABE_CASE_NOTE_IN_RESPONSE',
			'goodName' => 'ABE_CASE_NOTE_IN_RESPONSE',
			'strField' => 'ABE_CASE_NOTE_IN_RESPONSE',
			'index' => 10,
			'type' => 3,
			'sqlExpression' => 'ABE_CASE_NOTE_IN_RESPONSE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_FORCE_LOGIN' => array(
			'name' => 'ABE_FORCE_LOGIN',
			'goodName' => 'ABE_FORCE_LOGIN',
			'strField' => 'ABE_FORCE_LOGIN',
			'index' => 11,
			'type' => 3,
			'sqlExpression' => 'ABE_FORCE_LOGIN',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_CREATE_DATE' => array(
			'name' => 'ABE_CREATE_DATE',
			'goodName' => 'ABE_CREATE_DATE',
			'strField' => 'ABE_CREATE_DATE',
			'index' => 12,
			'type' => 135,
			'sqlExpression' => 'ABE_CREATE_DATE',
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
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_UPDATE_DATE' => array(
			'name' => 'ABE_UPDATE_DATE',
			'goodName' => 'ABE_UPDATE_DATE',
			'strField' => 'ABE_UPDATE_DATE',
			'index' => 13,
			'type' => 135,
			'sqlExpression' => 'ABE_UPDATE_DATE',
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
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_SUBJECT_FIELD' => array(
			'name' => 'ABE_SUBJECT_FIELD',
			'goodName' => 'ABE_SUBJECT_FIELD',
			'strField' => 'ABE_SUBJECT_FIELD',
			'index' => 14,
			'sqlExpression' => 'ABE_SUBJECT_FIELD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_MAILSERVER_OR_MAILCURRENT' => array(
			'name' => 'ABE_MAILSERVER_OR_MAILCURRENT',
			'goodName' => 'ABE_MAILSERVER_OR_MAILCURRENT',
			'strField' => 'ABE_MAILSERVER_OR_MAILCURRENT',
			'index' => 15,
			'type' => 3,
			'sqlExpression' => 'ABE_MAILSERVER_OR_MAILCURRENT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_CUSTOM_GRID' => array(
			'name' => 'ABE_CUSTOM_GRID',
			'goodName' => 'ABE_CUSTOM_GRID',
			'strField' => 'ABE_CUSTOM_GRID',
			'index' => 16,
			'type' => 201,
			'sqlExpression' => 'ABE_CUSTOM_GRID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		),
		'ABE_EMAIL_SERVER_UID' => array(
			'name' => 'ABE_EMAIL_SERVER_UID',
			'goodName' => 'ABE_EMAIL_SERVER_UID',
			'strField' => 'ABE_EMAIL_SERVER_UID',
			'index' => 17,
			'sqlExpression' => 'ABE_EMAIL_SERVER_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_CONFIGURATION' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ABE_UID,
	PRO_UID,
	TAS_UID,
	ABE_TYPE,
	ABE_TEMPLATE,
	ABE_DYN_TYPE,
	DYN_UID,
	ABE_EMAIL_FIELD,
	ABE_ACTION_FIELD,
	ABE_CASE_NOTE_IN_RESPONSE,
	ABE_FORCE_LOGIN,
	ABE_CREATE_DATE,
	ABE_UPDATE_DATE,
	ABE_SUBJECT_FIELD,
	ABE_MAILSERVER_OR_MAILCURRENT,
	ABE_CUSTOM_GRID,
	ABE_EMAIL_SERVER_UID
FROM
	ABE_CONFIGURATION',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ABE_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_UID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_UID' 
			),
			array(
				'sql' => 'PRO_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'PRO_UID' 
				),
				'encrypted' => false,
				'columnName' => 'PRO_UID' 
			),
			array(
				'sql' => 'TAS_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'TAS_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_UID' 
			),
			array(
				'sql' => 'ABE_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_TYPE' 
			),
			array(
				'sql' => 'ABE_TEMPLATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_TEMPLATE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_TEMPLATE' 
			),
			array(
				'sql' => 'ABE_DYN_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_DYN_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_DYN_TYPE' 
			),
			array(
				'sql' => 'DYN_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'DYN_UID' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_UID' 
			),
			array(
				'sql' => 'ABE_EMAIL_FIELD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_EMAIL_FIELD' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_EMAIL_FIELD' 
			),
			array(
				'sql' => 'ABE_ACTION_FIELD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_ACTION_FIELD' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_ACTION_FIELD' 
			),
			array(
				'sql' => 'ABE_CASE_NOTE_IN_RESPONSE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_CASE_NOTE_IN_RESPONSE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_CASE_NOTE_IN_RESPONSE' 
			),
			array(
				'sql' => 'ABE_FORCE_LOGIN',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_FORCE_LOGIN' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_FORCE_LOGIN' 
			),
			array(
				'sql' => 'ABE_CREATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_CREATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_CREATE_DATE' 
			),
			array(
				'sql' => 'ABE_UPDATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_UPDATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_UPDATE_DATE' 
			),
			array(
				'sql' => 'ABE_SUBJECT_FIELD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_SUBJECT_FIELD' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_SUBJECT_FIELD' 
			),
			array(
				'sql' => 'ABE_MAILSERVER_OR_MAILCURRENT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_MAILSERVER_OR_MAILCURRENT' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_MAILSERVER_OR_MAILCURRENT' 
			),
			array(
				'sql' => 'ABE_CUSTOM_GRID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_CUSTOM_GRID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_CUSTOM_GRID' 
			),
			array(
				'sql' => 'ABE_EMAIL_SERVER_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_CONFIGURATION',
					'name' => 'ABE_EMAIL_SERVER_UID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_EMAIL_SERVER_UID' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'ABE_CONFIGURATION',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'ABE_CONFIGURATION',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ABE_UID',
						'PRO_UID',
						'TAS_UID',
						'ABE_TYPE',
						'ABE_TEMPLATE',
						'ABE_DYN_TYPE',
						'DYN_UID',
						'ABE_EMAIL_FIELD',
						'ABE_ACTION_FIELD',
						'ABE_CASE_NOTE_IN_RESPONSE',
						'ABE_FORCE_LOGIN',
						'ABE_CREATE_DATE',
						'ABE_UPDATE_DATE',
						'ABE_SUBJECT_FIELD',
						'ABE_MAILSERVER_OR_MAILCURRENT',
						'ABE_CUSTOM_GRID',
						'ABE_EMAIL_SERVER_UID' 
					),
					'name' => 'ABE_CONFIGURATION' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ABE_UID,
	PRO_UID,
	TAS_UID,
	ABE_TYPE,
	ABE_TEMPLATE,
	ABE_DYN_TYPE,
	DYN_UID,
	ABE_EMAIL_FIELD,
	ABE_ACTION_FIELD,
	ABE_CASE_NOTE_IN_RESPONSE,
	ABE_FORCE_LOGIN,
	ABE_CREATE_DATE,
	ABE_UPDATE_DATE,
	ABE_SUBJECT_FIELD,
	ABE_MAILSERVER_OR_MAILCURRENT,
	ABE_CUSTOM_GRID,
	ABE_EMAIL_SERVER_UID',
		'fromListSql' => 'FROM
	ABE_CONFIGURATION',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'ABE_CONFIGURATION',
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
			'ABE_UID',
			'PRO_UID',
			'TAS_UID',
			'ABE_TYPE',
			'ABE_TEMPLATE',
			'ABE_DYN_TYPE',
			'DYN_UID',
			'ABE_EMAIL_FIELD',
			'ABE_ACTION_FIELD',
			'ABE_CASE_NOTE_IN_RESPONSE',
			'ABE_FORCE_LOGIN',
			'ABE_CREATE_DATE',
			'ABE_UPDATE_DATE',
			'ABE_SUBJECT_FIELD',
			'ABE_MAILSERVER_OR_MAILCURRENT',
			'ABE_CUSTOM_GRID',
			'ABE_EMAIL_SERVER_UID' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ABE_UID',
			'PRO_UID',
			'TAS_UID',
			'ABE_TYPE',
			'ABE_TEMPLATE',
			'ABE_DYN_TYPE',
			'DYN_UID',
			'ABE_EMAIL_FIELD',
			'ABE_ACTION_FIELD',
			'ABE_CASE_NOTE_IN_RESPONSE',
			'ABE_FORCE_LOGIN',
			'ABE_CREATE_DATE',
			'ABE_UPDATE_DATE',
			'ABE_SUBJECT_FIELD',
			'ABE_MAILSERVER_OR_MAILCURRENT',
			'ABE_CUSTOM_GRID',
			'ABE_EMAIL_SERVER_UID' 
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
	$runnerTableLabels['ABE_CONFIGURATION'] = array(
	'tableCaption' => 'ABE CONFIGURATION',
	'fieldLabels' => array(
		'ABE_UID' => 'ABE UID',
		'PRO_UID' => 'PRO UID',
		'TAS_UID' => 'TAS UID',
		'ABE_TYPE' => 'ABE TYPE',
		'ABE_TEMPLATE' => 'ABE TEMPLATE',
		'ABE_DYN_TYPE' => 'ABE DYN TYPE',
		'DYN_UID' => 'DYN UID',
		'ABE_EMAIL_FIELD' => 'ABE EMAIL FIELD',
		'ABE_ACTION_FIELD' => 'ABE ACTION FIELD',
		'ABE_CASE_NOTE_IN_RESPONSE' => 'ABE CASE NOTE IN RESPONSE',
		'ABE_FORCE_LOGIN' => 'ABE FORCE LOGIN',
		'ABE_CREATE_DATE' => 'ABE CREATE DATE',
		'ABE_UPDATE_DATE' => 'ABE UPDATE DATE',
		'ABE_SUBJECT_FIELD' => 'ABE SUBJECT FIELD',
		'ABE_MAILSERVER_OR_MAILCURRENT' => 'ABE MAILSERVER OR MAILCURRENT',
		'ABE_CUSTOM_GRID' => 'ABE CUSTOM GRID',
		'ABE_EMAIL_SERVER_UID' => 'ABE EMAIL SERVER UID' 
	),
	'fieldTooltips' => array(
		'ABE_UID' => '',
		'PRO_UID' => '',
		'TAS_UID' => '',
		'ABE_TYPE' => '',
		'ABE_TEMPLATE' => '',
		'ABE_DYN_TYPE' => '',
		'DYN_UID' => '',
		'ABE_EMAIL_FIELD' => '',
		'ABE_ACTION_FIELD' => '',
		'ABE_CASE_NOTE_IN_RESPONSE' => '',
		'ABE_FORCE_LOGIN' => '',
		'ABE_CREATE_DATE' => '',
		'ABE_UPDATE_DATE' => '',
		'ABE_SUBJECT_FIELD' => '',
		'ABE_MAILSERVER_OR_MAILCURRENT' => '',
		'ABE_CUSTOM_GRID' => '',
		'ABE_EMAIL_SERVER_UID' => '' 
	),
	'fieldPlaceholders' => array(
		'ABE_UID' => '',
		'PRO_UID' => '',
		'TAS_UID' => '',
		'ABE_TYPE' => '',
		'ABE_TEMPLATE' => '',
		'ABE_DYN_TYPE' => '',
		'DYN_UID' => '',
		'ABE_EMAIL_FIELD' => '',
		'ABE_ACTION_FIELD' => '',
		'ABE_CASE_NOTE_IN_RESPONSE' => '',
		'ABE_FORCE_LOGIN' => '',
		'ABE_CREATE_DATE' => '',
		'ABE_UPDATE_DATE' => '',
		'ABE_SUBJECT_FIELD' => '',
		'ABE_MAILSERVER_OR_MAILCURRENT' => '',
		'ABE_CUSTOM_GRID' => '',
		'ABE_EMAIL_SERVER_UID' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>