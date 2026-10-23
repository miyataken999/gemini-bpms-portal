<?php
global $runnerTableSettings;
$runnerTableSettings['APP_CACHE_VIEW'] = array(
	'name' => 'APP_CACHE_VIEW',
	'shortName' => 'APP_CACHE_VIEW',
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
	'afterEditDetails' => 'APP_CACHE_VIEW',
	'afterAddDetail' => 'APP_CACHE_VIEW',
	'detailsBadgeColor' => '5f9ea0',
	'sql' => 'SELECT
	APP_UID,
	DEL_INDEX,
	DEL_LAST_INDEX,
	APP_NUMBER,
	APP_STATUS,
	USR_UID,
	PREVIOUS_USR_UID,
	TAS_UID,
	PRO_UID,
	DEL_DELEGATE_DATE,
	DEL_INIT_DATE,
	DEL_FINISH_DATE,
	DEL_TASK_DUE_DATE,
	DEL_RISK_DATE,
	DEL_THREAD_STATUS,
	APP_THREAD_STATUS,
	APP_TITLE,
	APP_PRO_TITLE,
	APP_TAS_TITLE,
	APP_CURRENT_USER,
	APP_DEL_PREVIOUS_USER,
	DEL_PRIORITY,
	DEL_DURATION,
	DEL_QUEUE_DURATION,
	DEL_DELAY_DURATION,
	DEL_STARTED,
	DEL_FINISHED,
	DEL_DELAYED,
	APP_CREATE_DATE,
	APP_FINISH_DATE,
	APP_UPDATE_DATE,
	APP_OVERDUE_PERCENTAGE
FROM
	APP_CACHE_VIEW',
	'keyFields' => array( 
		'APP_UID',
		'DEL_INDEX' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'APP_UID' => array(
			'name' => 'APP_UID',
			'goodName' => 'APP_UID',
			'strField' => 'APP_UID',
			'index' => 1,
			'sqlExpression' => 'APP_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_INDEX' => array(
			'name' => 'DEL_INDEX',
			'goodName' => 'DEL_INDEX',
			'strField' => 'DEL_INDEX',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'DEL_INDEX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_LAST_INDEX' => array(
			'name' => 'DEL_LAST_INDEX',
			'goodName' => 'DEL_LAST_INDEX',
			'strField' => 'DEL_LAST_INDEX',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'DEL_LAST_INDEX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_NUMBER' => array(
			'name' => 'APP_NUMBER',
			'goodName' => 'APP_NUMBER',
			'strField' => 'APP_NUMBER',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'APP_NUMBER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_STATUS' => array(
			'name' => 'APP_STATUS',
			'goodName' => 'APP_STATUS',
			'strField' => 'APP_STATUS',
			'index' => 5,
			'sqlExpression' => 'APP_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'USR_UID' => array(
			'name' => 'USR_UID',
			'goodName' => 'USR_UID',
			'strField' => 'USR_UID',
			'index' => 6,
			'sqlExpression' => 'USR_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'PREVIOUS_USR_UID' => array(
			'name' => 'PREVIOUS_USR_UID',
			'goodName' => 'PREVIOUS_USR_UID',
			'strField' => 'PREVIOUS_USR_UID',
			'index' => 7,
			'sqlExpression' => 'PREVIOUS_USR_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'TAS_UID' => array(
			'name' => 'TAS_UID',
			'goodName' => 'TAS_UID',
			'strField' => 'TAS_UID',
			'index' => 8,
			'sqlExpression' => 'TAS_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'PRO_UID' => array(
			'name' => 'PRO_UID',
			'goodName' => 'PRO_UID',
			'strField' => 'PRO_UID',
			'index' => 9,
			'sqlExpression' => 'PRO_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_DELEGATE_DATE' => array(
			'name' => 'DEL_DELEGATE_DATE',
			'goodName' => 'DEL_DELEGATE_DATE',
			'strField' => 'DEL_DELEGATE_DATE',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'DEL_DELEGATE_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_INIT_DATE' => array(
			'name' => 'DEL_INIT_DATE',
			'goodName' => 'DEL_INIT_DATE',
			'strField' => 'DEL_INIT_DATE',
			'index' => 11,
			'type' => 135,
			'sqlExpression' => 'DEL_INIT_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_FINISH_DATE' => array(
			'name' => 'DEL_FINISH_DATE',
			'goodName' => 'DEL_FINISH_DATE',
			'strField' => 'DEL_FINISH_DATE',
			'index' => 12,
			'type' => 135,
			'sqlExpression' => 'DEL_FINISH_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_TASK_DUE_DATE' => array(
			'name' => 'DEL_TASK_DUE_DATE',
			'goodName' => 'DEL_TASK_DUE_DATE',
			'strField' => 'DEL_TASK_DUE_DATE',
			'index' => 13,
			'type' => 135,
			'sqlExpression' => 'DEL_TASK_DUE_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_RISK_DATE' => array(
			'name' => 'DEL_RISK_DATE',
			'goodName' => 'DEL_RISK_DATE',
			'strField' => 'DEL_RISK_DATE',
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'DEL_RISK_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_THREAD_STATUS' => array(
			'name' => 'DEL_THREAD_STATUS',
			'goodName' => 'DEL_THREAD_STATUS',
			'strField' => 'DEL_THREAD_STATUS',
			'index' => 15,
			'sqlExpression' => 'DEL_THREAD_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_THREAD_STATUS' => array(
			'name' => 'APP_THREAD_STATUS',
			'goodName' => 'APP_THREAD_STATUS',
			'strField' => 'APP_THREAD_STATUS',
			'index' => 16,
			'sqlExpression' => 'APP_THREAD_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_TITLE' => array(
			'name' => 'APP_TITLE',
			'goodName' => 'APP_TITLE',
			'strField' => 'APP_TITLE',
			'index' => 17,
			'sqlExpression' => 'APP_TITLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_PRO_TITLE' => array(
			'name' => 'APP_PRO_TITLE',
			'goodName' => 'APP_PRO_TITLE',
			'strField' => 'APP_PRO_TITLE',
			'index' => 18,
			'sqlExpression' => 'APP_PRO_TITLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_TAS_TITLE' => array(
			'name' => 'APP_TAS_TITLE',
			'goodName' => 'APP_TAS_TITLE',
			'strField' => 'APP_TAS_TITLE',
			'index' => 19,
			'sqlExpression' => 'APP_TAS_TITLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_CURRENT_USER' => array(
			'name' => 'APP_CURRENT_USER',
			'goodName' => 'APP_CURRENT_USER',
			'strField' => 'APP_CURRENT_USER',
			'index' => 20,
			'sqlExpression' => 'APP_CURRENT_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_DEL_PREVIOUS_USER' => array(
			'name' => 'APP_DEL_PREVIOUS_USER',
			'goodName' => 'APP_DEL_PREVIOUS_USER',
			'strField' => 'APP_DEL_PREVIOUS_USER',
			'index' => 21,
			'sqlExpression' => 'APP_DEL_PREVIOUS_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_PRIORITY' => array(
			'name' => 'DEL_PRIORITY',
			'goodName' => 'DEL_PRIORITY',
			'strField' => 'DEL_PRIORITY',
			'index' => 22,
			'sqlExpression' => 'DEL_PRIORITY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_DURATION' => array(
			'name' => 'DEL_DURATION',
			'goodName' => 'DEL_DURATION',
			'strField' => 'DEL_DURATION',
			'index' => 23,
			'type' => 5,
			'sqlExpression' => 'DEL_DURATION',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_QUEUE_DURATION' => array(
			'name' => 'DEL_QUEUE_DURATION',
			'goodName' => 'DEL_QUEUE_DURATION',
			'strField' => 'DEL_QUEUE_DURATION',
			'index' => 24,
			'type' => 5,
			'sqlExpression' => 'DEL_QUEUE_DURATION',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_DELAY_DURATION' => array(
			'name' => 'DEL_DELAY_DURATION',
			'goodName' => 'DEL_DELAY_DURATION',
			'strField' => 'DEL_DELAY_DURATION',
			'index' => 25,
			'type' => 5,
			'sqlExpression' => 'DEL_DELAY_DURATION',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_STARTED' => array(
			'name' => 'DEL_STARTED',
			'goodName' => 'DEL_STARTED',
			'strField' => 'DEL_STARTED',
			'index' => 26,
			'type' => 16,
			'sqlExpression' => 'DEL_STARTED',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_FINISHED' => array(
			'name' => 'DEL_FINISHED',
			'goodName' => 'DEL_FINISHED',
			'strField' => 'DEL_FINISHED',
			'index' => 27,
			'type' => 16,
			'sqlExpression' => 'DEL_FINISHED',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'DEL_DELAYED' => array(
			'name' => 'DEL_DELAYED',
			'goodName' => 'DEL_DELAYED',
			'strField' => 'DEL_DELAYED',
			'index' => 28,
			'type' => 16,
			'sqlExpression' => 'DEL_DELAYED',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_CREATE_DATE' => array(
			'name' => 'APP_CREATE_DATE',
			'goodName' => 'APP_CREATE_DATE',
			'strField' => 'APP_CREATE_DATE',
			'index' => 29,
			'type' => 135,
			'sqlExpression' => 'APP_CREATE_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_FINISH_DATE' => array(
			'name' => 'APP_FINISH_DATE',
			'goodName' => 'APP_FINISH_DATE',
			'strField' => 'APP_FINISH_DATE',
			'index' => 30,
			'type' => 135,
			'sqlExpression' => 'APP_FINISH_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_UPDATE_DATE' => array(
			'name' => 'APP_UPDATE_DATE',
			'goodName' => 'APP_UPDATE_DATE',
			'strField' => 'APP_UPDATE_DATE',
			'index' => 31,
			'type' => 135,
			'sqlExpression' => 'APP_UPDATE_DATE',
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
			'tableName' => 'APP_CACHE_VIEW' 
		),
		'APP_OVERDUE_PERCENTAGE' => array(
			'name' => 'APP_OVERDUE_PERCENTAGE',
			'goodName' => 'APP_OVERDUE_PERCENTAGE',
			'strField' => 'APP_OVERDUE_PERCENTAGE',
			'index' => 32,
			'type' => 5,
			'sqlExpression' => 'APP_OVERDUE_PERCENTAGE',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_CACHE_VIEW' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	APP_UID,
	DEL_INDEX,
	DEL_LAST_INDEX,
	APP_NUMBER,
	APP_STATUS,
	USR_UID,
	PREVIOUS_USR_UID,
	TAS_UID,
	PRO_UID,
	DEL_DELEGATE_DATE,
	DEL_INIT_DATE,
	DEL_FINISH_DATE,
	DEL_TASK_DUE_DATE,
	DEL_RISK_DATE,
	DEL_THREAD_STATUS,
	APP_THREAD_STATUS,
	APP_TITLE,
	APP_PRO_TITLE,
	APP_TAS_TITLE,
	APP_CURRENT_USER,
	APP_DEL_PREVIOUS_USER,
	DEL_PRIORITY,
	DEL_DURATION,
	DEL_QUEUE_DURATION,
	DEL_DELAY_DURATION,
	DEL_STARTED,
	DEL_FINISHED,
	DEL_DELAYED,
	APP_CREATE_DATE,
	APP_FINISH_DATE,
	APP_UPDATE_DATE,
	APP_OVERDUE_PERCENTAGE
FROM
	APP_CACHE_VIEW',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'APP_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_UID' 
				),
				'encrypted' => false,
				'columnName' => 'APP_UID' 
			),
			array(
				'sql' => 'DEL_INDEX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_INDEX' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_INDEX' 
			),
			array(
				'sql' => 'DEL_LAST_INDEX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_LAST_INDEX' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_LAST_INDEX' 
			),
			array(
				'sql' => 'APP_NUMBER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_NUMBER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_NUMBER' 
			),
			array(
				'sql' => 'APP_STATUS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'APP_STATUS' 
			),
			array(
				'sql' => 'USR_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'USR_UID' 
				),
				'encrypted' => false,
				'columnName' => 'USR_UID' 
			),
			array(
				'sql' => 'PREVIOUS_USR_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'PREVIOUS_USR_UID' 
				),
				'encrypted' => false,
				'columnName' => 'PREVIOUS_USR_UID' 
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
					'table' => 'APP_CACHE_VIEW',
					'name' => 'TAS_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_UID' 
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
					'table' => 'APP_CACHE_VIEW',
					'name' => 'PRO_UID' 
				),
				'encrypted' => false,
				'columnName' => 'PRO_UID' 
			),
			array(
				'sql' => 'DEL_DELEGATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_DELEGATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_DELEGATE_DATE' 
			),
			array(
				'sql' => 'DEL_INIT_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_INIT_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_INIT_DATE' 
			),
			array(
				'sql' => 'DEL_FINISH_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_FINISH_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_FINISH_DATE' 
			),
			array(
				'sql' => 'DEL_TASK_DUE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_TASK_DUE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_TASK_DUE_DATE' 
			),
			array(
				'sql' => 'DEL_RISK_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_RISK_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_RISK_DATE' 
			),
			array(
				'sql' => 'DEL_THREAD_STATUS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_THREAD_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_THREAD_STATUS' 
			),
			array(
				'sql' => 'APP_THREAD_STATUS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_THREAD_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'APP_THREAD_STATUS' 
			),
			array(
				'sql' => 'APP_TITLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_TITLE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_TITLE' 
			),
			array(
				'sql' => 'APP_PRO_TITLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_PRO_TITLE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_PRO_TITLE' 
			),
			array(
				'sql' => 'APP_TAS_TITLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_TAS_TITLE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_TAS_TITLE' 
			),
			array(
				'sql' => 'APP_CURRENT_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_CURRENT_USER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_CURRENT_USER' 
			),
			array(
				'sql' => 'APP_DEL_PREVIOUS_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_DEL_PREVIOUS_USER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DEL_PREVIOUS_USER' 
			),
			array(
				'sql' => 'DEL_PRIORITY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_PRIORITY' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_PRIORITY' 
			),
			array(
				'sql' => 'DEL_DURATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_DURATION' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_DURATION' 
			),
			array(
				'sql' => 'DEL_QUEUE_DURATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_QUEUE_DURATION' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_QUEUE_DURATION' 
			),
			array(
				'sql' => 'DEL_DELAY_DURATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_DELAY_DURATION' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_DELAY_DURATION' 
			),
			array(
				'sql' => 'DEL_STARTED',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_STARTED' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_STARTED' 
			),
			array(
				'sql' => 'DEL_FINISHED',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_FINISHED' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_FINISHED' 
			),
			array(
				'sql' => 'DEL_DELAYED',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'DEL_DELAYED' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_DELAYED' 
			),
			array(
				'sql' => 'APP_CREATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_CREATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_CREATE_DATE' 
			),
			array(
				'sql' => 'APP_FINISH_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_FINISH_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_FINISH_DATE' 
			),
			array(
				'sql' => 'APP_UPDATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_UPDATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_UPDATE_DATE' 
			),
			array(
				'sql' => 'APP_OVERDUE_PERCENTAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_CACHE_VIEW',
					'name' => 'APP_OVERDUE_PERCENTAGE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_OVERDUE_PERCENTAGE' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'APP_CACHE_VIEW',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'APP_CACHE_VIEW',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'APP_UID',
						'DEL_INDEX',
						'DEL_LAST_INDEX',
						'APP_NUMBER',
						'APP_STATUS',
						'USR_UID',
						'PREVIOUS_USR_UID',
						'TAS_UID',
						'PRO_UID',
						'DEL_DELEGATE_DATE',
						'DEL_INIT_DATE',
						'DEL_FINISH_DATE',
						'DEL_TASK_DUE_DATE',
						'DEL_RISK_DATE',
						'DEL_THREAD_STATUS',
						'APP_THREAD_STATUS',
						'APP_TITLE',
						'APP_PRO_TITLE',
						'APP_TAS_TITLE',
						'APP_CURRENT_USER',
						'APP_DEL_PREVIOUS_USER',
						'DEL_PRIORITY',
						'DEL_DURATION',
						'DEL_QUEUE_DURATION',
						'DEL_DELAY_DURATION',
						'DEL_STARTED',
						'DEL_FINISHED',
						'DEL_DELAYED',
						'APP_CREATE_DATE',
						'APP_FINISH_DATE',
						'APP_UPDATE_DATE',
						'APP_OVERDUE_PERCENTAGE' 
					),
					'name' => 'APP_CACHE_VIEW' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'APP_UID,
	DEL_INDEX,
	DEL_LAST_INDEX,
	APP_NUMBER,
	APP_STATUS,
	USR_UID,
	PREVIOUS_USR_UID,
	TAS_UID,
	PRO_UID,
	DEL_DELEGATE_DATE,
	DEL_INIT_DATE,
	DEL_FINISH_DATE,
	DEL_TASK_DUE_DATE,
	DEL_RISK_DATE,
	DEL_THREAD_STATUS,
	APP_THREAD_STATUS,
	APP_TITLE,
	APP_PRO_TITLE,
	APP_TAS_TITLE,
	APP_CURRENT_USER,
	APP_DEL_PREVIOUS_USER,
	DEL_PRIORITY,
	DEL_DURATION,
	DEL_QUEUE_DURATION,
	DEL_DELAY_DURATION,
	DEL_STARTED,
	DEL_FINISHED,
	DEL_DELAYED,
	APP_CREATE_DATE,
	APP_FINISH_DATE,
	APP_UPDATE_DATE,
	APP_OVERDUE_PERCENTAGE',
		'fromListSql' => 'FROM
	APP_CACHE_VIEW',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'APP_CACHE_VIEW',
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
			'APP_UID',
			'DEL_INDEX',
			'DEL_LAST_INDEX',
			'APP_NUMBER',
			'APP_STATUS',
			'USR_UID',
			'PREVIOUS_USR_UID',
			'TAS_UID',
			'PRO_UID',
			'DEL_DELEGATE_DATE',
			'DEL_INIT_DATE',
			'DEL_FINISH_DATE',
			'DEL_TASK_DUE_DATE',
			'DEL_RISK_DATE',
			'DEL_THREAD_STATUS',
			'APP_THREAD_STATUS',
			'APP_TITLE',
			'APP_PRO_TITLE',
			'APP_TAS_TITLE',
			'APP_CURRENT_USER',
			'APP_DEL_PREVIOUS_USER',
			'DEL_PRIORITY',
			'DEL_DURATION',
			'DEL_QUEUE_DURATION',
			'DEL_DELAY_DURATION',
			'DEL_STARTED',
			'DEL_FINISHED',
			'DEL_DELAYED',
			'APP_CREATE_DATE',
			'APP_FINISH_DATE',
			'APP_UPDATE_DATE',
			'APP_OVERDUE_PERCENTAGE' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'APP_UID',
			'DEL_INDEX',
			'DEL_LAST_INDEX',
			'APP_NUMBER',
			'APP_STATUS',
			'USR_UID',
			'PREVIOUS_USR_UID',
			'TAS_UID',
			'PRO_UID',
			'DEL_DELEGATE_DATE',
			'DEL_INIT_DATE',
			'DEL_FINISH_DATE',
			'DEL_TASK_DUE_DATE',
			'DEL_RISK_DATE',
			'DEL_THREAD_STATUS',
			'APP_THREAD_STATUS',
			'APP_TITLE',
			'APP_PRO_TITLE',
			'APP_TAS_TITLE',
			'APP_CURRENT_USER',
			'APP_DEL_PREVIOUS_USER',
			'DEL_PRIORITY',
			'DEL_DURATION',
			'DEL_QUEUE_DURATION',
			'DEL_DELAY_DURATION',
			'DEL_STARTED',
			'DEL_FINISHED',
			'DEL_DELAYED',
			'APP_CREATE_DATE',
			'APP_FINISH_DATE',
			'APP_UPDATE_DATE',
			'APP_OVERDUE_PERCENTAGE' 
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
	$runnerTableLabels['APP_CACHE_VIEW'] = array(
	'tableCaption' => 'APP CACHE VIEW',
	'fieldLabels' => array(
		'APP_UID' => 'APP UID',
		'DEL_INDEX' => 'DEL INDEX',
		'DEL_LAST_INDEX' => 'DEL LAST INDEX',
		'APP_NUMBER' => 'APP NUMBER',
		'APP_STATUS' => 'APP STATUS',
		'USR_UID' => 'USR UID',
		'PREVIOUS_USR_UID' => 'PREVIOUS USR UID',
		'TAS_UID' => 'TAS UID',
		'PRO_UID' => 'PRO UID',
		'DEL_DELEGATE_DATE' => 'DEL DELEGATE DATE',
		'DEL_INIT_DATE' => 'DEL INIT DATE',
		'DEL_FINISH_DATE' => 'DEL FINISH DATE',
		'DEL_TASK_DUE_DATE' => 'DEL TASK DUE DATE',
		'DEL_RISK_DATE' => 'DEL RISK DATE',
		'DEL_THREAD_STATUS' => 'DEL THREAD STATUS',
		'APP_THREAD_STATUS' => 'APP THREAD STATUS',
		'APP_TITLE' => 'APP TITLE',
		'APP_PRO_TITLE' => 'APP PRO TITLE',
		'APP_TAS_TITLE' => 'APP TAS TITLE',
		'APP_CURRENT_USER' => 'APP CURRENT USER',
		'APP_DEL_PREVIOUS_USER' => 'APP DEL PREVIOUS USER',
		'DEL_PRIORITY' => 'DEL PRIORITY',
		'DEL_DURATION' => 'DEL DURATION',
		'DEL_QUEUE_DURATION' => 'DEL QUEUE DURATION',
		'DEL_DELAY_DURATION' => 'DEL DELAY DURATION',
		'DEL_STARTED' => 'DEL STARTED',
		'DEL_FINISHED' => 'DEL FINISHED',
		'DEL_DELAYED' => 'DEL DELAYED',
		'APP_CREATE_DATE' => 'APP CREATE DATE',
		'APP_FINISH_DATE' => 'APP FINISH DATE',
		'APP_UPDATE_DATE' => 'APP UPDATE DATE',
		'APP_OVERDUE_PERCENTAGE' => 'APP OVERDUE PERCENTAGE' 
	),
	'fieldTooltips' => array(
		'APP_UID' => '',
		'DEL_INDEX' => '',
		'DEL_LAST_INDEX' => '',
		'APP_NUMBER' => '',
		'APP_STATUS' => '',
		'USR_UID' => '',
		'PREVIOUS_USR_UID' => '',
		'TAS_UID' => '',
		'PRO_UID' => '',
		'DEL_DELEGATE_DATE' => '',
		'DEL_INIT_DATE' => '',
		'DEL_FINISH_DATE' => '',
		'DEL_TASK_DUE_DATE' => '',
		'DEL_RISK_DATE' => '',
		'DEL_THREAD_STATUS' => '',
		'APP_THREAD_STATUS' => '',
		'APP_TITLE' => '',
		'APP_PRO_TITLE' => '',
		'APP_TAS_TITLE' => '',
		'APP_CURRENT_USER' => '',
		'APP_DEL_PREVIOUS_USER' => '',
		'DEL_PRIORITY' => '',
		'DEL_DURATION' => '',
		'DEL_QUEUE_DURATION' => '',
		'DEL_DELAY_DURATION' => '',
		'DEL_STARTED' => '',
		'DEL_FINISHED' => '',
		'DEL_DELAYED' => '',
		'APP_CREATE_DATE' => '',
		'APP_FINISH_DATE' => '',
		'APP_UPDATE_DATE' => '',
		'APP_OVERDUE_PERCENTAGE' => '' 
	),
	'fieldPlaceholders' => array(
		'APP_UID' => '',
		'DEL_INDEX' => '',
		'DEL_LAST_INDEX' => '',
		'APP_NUMBER' => '',
		'APP_STATUS' => '',
		'USR_UID' => '',
		'PREVIOUS_USR_UID' => '',
		'TAS_UID' => '',
		'PRO_UID' => '',
		'DEL_DELEGATE_DATE' => '',
		'DEL_INIT_DATE' => '',
		'DEL_FINISH_DATE' => '',
		'DEL_TASK_DUE_DATE' => '',
		'DEL_RISK_DATE' => '',
		'DEL_THREAD_STATUS' => '',
		'APP_THREAD_STATUS' => '',
		'APP_TITLE' => '',
		'APP_PRO_TITLE' => '',
		'APP_TAS_TITLE' => '',
		'APP_CURRENT_USER' => '',
		'APP_DEL_PREVIOUS_USER' => '',
		'DEL_PRIORITY' => '',
		'DEL_DURATION' => '',
		'DEL_QUEUE_DURATION' => '',
		'DEL_DELAY_DURATION' => '',
		'DEL_STARTED' => '',
		'DEL_FINISHED' => '',
		'DEL_DELAYED' => '',
		'APP_CREATE_DATE' => '',
		'APP_FINISH_DATE' => '',
		'APP_UPDATE_DATE' => '',
		'APP_OVERDUE_PERCENTAGE' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>