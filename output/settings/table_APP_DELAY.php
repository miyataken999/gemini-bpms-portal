<?php
global $runnerTableSettings;
$runnerTableSettings['APP_DELAY'] = array(
	'name' => 'APP_DELAY',
	'shortName' => 'APP_DELAY',
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
	'afterEditDetails' => 'APP_DELAY',
	'afterAddDetail' => 'APP_DELAY',
	'detailsBadgeColor' => '7b68ee',
	'sql' => 'SELECT
	APP_DELAY_UID,
	PRO_UID,
	APP_UID,
	APP_NUMBER,
	APP_THREAD_INDEX,
	APP_DEL_INDEX,
	APP_TYPE,
	APP_STATUS,
	APP_NEXT_TASK,
	APP_DELEGATION_USER,
	APP_ENABLE_ACTION_USER,
	APP_ENABLE_ACTION_DATE,
	APP_DISABLE_ACTION_USER,
	APP_DISABLE_ACTION_DATE,
	APP_AUTOMATIC_DISABLED_DATE,
	APP_DELEGATION_USER_ID,
	PRO_ID
FROM
	APP_DELAY',
	'keyFields' => array( 
		'APP_DELAY_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'APP_DELAY_UID' => array(
			'name' => 'APP_DELAY_UID',
			'goodName' => 'APP_DELAY_UID',
			'strField' => 'APP_DELAY_UID',
			'index' => 1,
			'sqlExpression' => 'APP_DELAY_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
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
			'tableName' => 'APP_DELAY' 
		),
		'APP_UID' => array(
			'name' => 'APP_UID',
			'goodName' => 'APP_UID',
			'strField' => 'APP_UID',
			'index' => 3,
			'sqlExpression' => 'APP_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
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
			'tableName' => 'APP_DELAY' 
		),
		'APP_THREAD_INDEX' => array(
			'name' => 'APP_THREAD_INDEX',
			'goodName' => 'APP_THREAD_INDEX',
			'strField' => 'APP_THREAD_INDEX',
			'index' => 5,
			'type' => 3,
			'sqlExpression' => 'APP_THREAD_INDEX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_DEL_INDEX' => array(
			'name' => 'APP_DEL_INDEX',
			'goodName' => 'APP_DEL_INDEX',
			'strField' => 'APP_DEL_INDEX',
			'index' => 6,
			'type' => 3,
			'sqlExpression' => 'APP_DEL_INDEX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_TYPE' => array(
			'name' => 'APP_TYPE',
			'goodName' => 'APP_TYPE',
			'strField' => 'APP_TYPE',
			'index' => 7,
			'sqlExpression' => 'APP_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_STATUS' => array(
			'name' => 'APP_STATUS',
			'goodName' => 'APP_STATUS',
			'strField' => 'APP_STATUS',
			'index' => 8,
			'sqlExpression' => 'APP_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_NEXT_TASK' => array(
			'name' => 'APP_NEXT_TASK',
			'goodName' => 'APP_NEXT_TASK',
			'strField' => 'APP_NEXT_TASK',
			'index' => 9,
			'sqlExpression' => 'APP_NEXT_TASK',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_DELEGATION_USER' => array(
			'name' => 'APP_DELEGATION_USER',
			'goodName' => 'APP_DELEGATION_USER',
			'strField' => 'APP_DELEGATION_USER',
			'index' => 10,
			'sqlExpression' => 'APP_DELEGATION_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_ENABLE_ACTION_USER' => array(
			'name' => 'APP_ENABLE_ACTION_USER',
			'goodName' => 'APP_ENABLE_ACTION_USER',
			'strField' => 'APP_ENABLE_ACTION_USER',
			'index' => 11,
			'sqlExpression' => 'APP_ENABLE_ACTION_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_ENABLE_ACTION_DATE' => array(
			'name' => 'APP_ENABLE_ACTION_DATE',
			'goodName' => 'APP_ENABLE_ACTION_DATE',
			'strField' => 'APP_ENABLE_ACTION_DATE',
			'index' => 12,
			'type' => 135,
			'sqlExpression' => 'APP_ENABLE_ACTION_DATE',
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
			'tableName' => 'APP_DELAY' 
		),
		'APP_DISABLE_ACTION_USER' => array(
			'name' => 'APP_DISABLE_ACTION_USER',
			'goodName' => 'APP_DISABLE_ACTION_USER',
			'strField' => 'APP_DISABLE_ACTION_USER',
			'index' => 13,
			'sqlExpression' => 'APP_DISABLE_ACTION_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'APP_DISABLE_ACTION_DATE' => array(
			'name' => 'APP_DISABLE_ACTION_DATE',
			'goodName' => 'APP_DISABLE_ACTION_DATE',
			'strField' => 'APP_DISABLE_ACTION_DATE',
			'index' => 14,
			'type' => 135,
			'sqlExpression' => 'APP_DISABLE_ACTION_DATE',
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
			'tableName' => 'APP_DELAY' 
		),
		'APP_AUTOMATIC_DISABLED_DATE' => array(
			'name' => 'APP_AUTOMATIC_DISABLED_DATE',
			'goodName' => 'APP_AUTOMATIC_DISABLED_DATE',
			'strField' => 'APP_AUTOMATIC_DISABLED_DATE',
			'index' => 15,
			'type' => 135,
			'sqlExpression' => 'APP_AUTOMATIC_DISABLED_DATE',
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
			'tableName' => 'APP_DELAY' 
		),
		'APP_DELEGATION_USER_ID' => array(
			'name' => 'APP_DELEGATION_USER_ID',
			'goodName' => 'APP_DELEGATION_USER_ID',
			'strField' => 'APP_DELEGATION_USER_ID',
			'index' => 16,
			'type' => 3,
			'sqlExpression' => 'APP_DELEGATION_USER_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		),
		'PRO_ID' => array(
			'name' => 'PRO_ID',
			'goodName' => 'PRO_ID',
			'strField' => 'PRO_ID',
			'index' => 17,
			'type' => 3,
			'sqlExpression' => 'PRO_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_DELAY' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	APP_DELAY_UID,
	PRO_UID,
	APP_UID,
	APP_NUMBER,
	APP_THREAD_INDEX,
	APP_DEL_INDEX,
	APP_TYPE,
	APP_STATUS,
	APP_NEXT_TASK,
	APP_DELEGATION_USER,
	APP_ENABLE_ACTION_USER,
	APP_ENABLE_ACTION_DATE,
	APP_DISABLE_ACTION_USER,
	APP_DISABLE_ACTION_DATE,
	APP_AUTOMATIC_DISABLED_DATE,
	APP_DELEGATION_USER_ID,
	PRO_ID
FROM
	APP_DELAY',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'APP_DELAY_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_DELAY_UID' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DELAY_UID' 
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
					'table' => 'APP_DELAY',
					'name' => 'PRO_UID' 
				),
				'encrypted' => false,
				'columnName' => 'PRO_UID' 
			),
			array(
				'sql' => 'APP_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_UID' 
				),
				'encrypted' => false,
				'columnName' => 'APP_UID' 
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
					'table' => 'APP_DELAY',
					'name' => 'APP_NUMBER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_NUMBER' 
			),
			array(
				'sql' => 'APP_THREAD_INDEX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_THREAD_INDEX' 
				),
				'encrypted' => false,
				'columnName' => 'APP_THREAD_INDEX' 
			),
			array(
				'sql' => 'APP_DEL_INDEX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_DEL_INDEX' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DEL_INDEX' 
			),
			array(
				'sql' => 'APP_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_TYPE' 
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
					'table' => 'APP_DELAY',
					'name' => 'APP_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'APP_STATUS' 
			),
			array(
				'sql' => 'APP_NEXT_TASK',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_NEXT_TASK' 
				),
				'encrypted' => false,
				'columnName' => 'APP_NEXT_TASK' 
			),
			array(
				'sql' => 'APP_DELEGATION_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_DELEGATION_USER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DELEGATION_USER' 
			),
			array(
				'sql' => 'APP_ENABLE_ACTION_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_ENABLE_ACTION_USER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_ENABLE_ACTION_USER' 
			),
			array(
				'sql' => 'APP_ENABLE_ACTION_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_ENABLE_ACTION_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_ENABLE_ACTION_DATE' 
			),
			array(
				'sql' => 'APP_DISABLE_ACTION_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_DISABLE_ACTION_USER' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DISABLE_ACTION_USER' 
			),
			array(
				'sql' => 'APP_DISABLE_ACTION_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_DISABLE_ACTION_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DISABLE_ACTION_DATE' 
			),
			array(
				'sql' => 'APP_AUTOMATIC_DISABLED_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_AUTOMATIC_DISABLED_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'APP_AUTOMATIC_DISABLED_DATE' 
			),
			array(
				'sql' => 'APP_DELEGATION_USER_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'APP_DELEGATION_USER_ID' 
				),
				'encrypted' => false,
				'columnName' => 'APP_DELEGATION_USER_ID' 
			),
			array(
				'sql' => 'PRO_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_DELAY',
					'name' => 'PRO_ID' 
				),
				'encrypted' => false,
				'columnName' => 'PRO_ID' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'APP_DELAY',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'APP_DELAY',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'APP_DELAY_UID',
						'PRO_UID',
						'APP_UID',
						'APP_NUMBER',
						'APP_THREAD_INDEX',
						'APP_DEL_INDEX',
						'APP_TYPE',
						'APP_STATUS',
						'APP_NEXT_TASK',
						'APP_DELEGATION_USER',
						'APP_ENABLE_ACTION_USER',
						'APP_ENABLE_ACTION_DATE',
						'APP_DISABLE_ACTION_USER',
						'APP_DISABLE_ACTION_DATE',
						'APP_AUTOMATIC_DISABLED_DATE',
						'APP_DELEGATION_USER_ID',
						'PRO_ID' 
					),
					'name' => 'APP_DELAY' 
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
		'fieldListSql' => 'APP_DELAY_UID,
	PRO_UID,
	APP_UID,
	APP_NUMBER,
	APP_THREAD_INDEX,
	APP_DEL_INDEX,
	APP_TYPE,
	APP_STATUS,
	APP_NEXT_TASK,
	APP_DELEGATION_USER,
	APP_ENABLE_ACTION_USER,
	APP_ENABLE_ACTION_DATE,
	APP_DISABLE_ACTION_USER,
	APP_DISABLE_ACTION_DATE,
	APP_AUTOMATIC_DISABLED_DATE,
	APP_DELEGATION_USER_ID,
	PRO_ID',
		'fromListSql' => 'FROM
	APP_DELAY',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'APP_DELAY',
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
			'APP_DELAY_UID',
			'PRO_UID',
			'APP_UID',
			'APP_NUMBER',
			'APP_THREAD_INDEX',
			'APP_DEL_INDEX',
			'APP_TYPE',
			'APP_STATUS',
			'APP_NEXT_TASK',
			'APP_DELEGATION_USER',
			'APP_ENABLE_ACTION_USER',
			'APP_ENABLE_ACTION_DATE',
			'APP_DISABLE_ACTION_USER',
			'APP_DISABLE_ACTION_DATE',
			'APP_AUTOMATIC_DISABLED_DATE',
			'APP_DELEGATION_USER_ID',
			'PRO_ID' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'APP_DELAY_UID',
			'PRO_UID',
			'APP_UID',
			'APP_NUMBER',
			'APP_THREAD_INDEX',
			'APP_DEL_INDEX',
			'APP_TYPE',
			'APP_STATUS',
			'APP_NEXT_TASK',
			'APP_DELEGATION_USER',
			'APP_ENABLE_ACTION_USER',
			'APP_ENABLE_ACTION_DATE',
			'APP_DISABLE_ACTION_USER',
			'APP_DISABLE_ACTION_DATE',
			'APP_AUTOMATIC_DISABLED_DATE',
			'APP_DELEGATION_USER_ID',
			'PRO_ID' 
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
	$runnerTableLabels['APP_DELAY'] = array(
	'tableCaption' => 'APP DELAY',
	'fieldLabels' => array(
		'APP_DELAY_UID' => 'APP DELAY UID',
		'PRO_UID' => 'PRO UID',
		'APP_UID' => 'APP UID',
		'APP_NUMBER' => 'APP NUMBER',
		'APP_THREAD_INDEX' => 'APP THREAD INDEX',
		'APP_DEL_INDEX' => 'APP DEL INDEX',
		'APP_TYPE' => 'APP TYPE',
		'APP_STATUS' => 'APP STATUS',
		'APP_NEXT_TASK' => 'APP NEXT TASK',
		'APP_DELEGATION_USER' => 'APP DELEGATION USER',
		'APP_ENABLE_ACTION_USER' => 'APP ENABLE ACTION USER',
		'APP_ENABLE_ACTION_DATE' => 'APP ENABLE ACTION DATE',
		'APP_DISABLE_ACTION_USER' => 'APP DISABLE ACTION USER',
		'APP_DISABLE_ACTION_DATE' => 'APP DISABLE ACTION DATE',
		'APP_AUTOMATIC_DISABLED_DATE' => 'APP AUTOMATIC DISABLED DATE',
		'APP_DELEGATION_USER_ID' => 'APP DELEGATION USER ID',
		'PRO_ID' => 'PRO ID' 
	),
	'fieldTooltips' => array(
		'APP_DELAY_UID' => '',
		'PRO_UID' => '',
		'APP_UID' => '',
		'APP_NUMBER' => '',
		'APP_THREAD_INDEX' => '',
		'APP_DEL_INDEX' => '',
		'APP_TYPE' => '',
		'APP_STATUS' => '',
		'APP_NEXT_TASK' => '',
		'APP_DELEGATION_USER' => '',
		'APP_ENABLE_ACTION_USER' => '',
		'APP_ENABLE_ACTION_DATE' => '',
		'APP_DISABLE_ACTION_USER' => '',
		'APP_DISABLE_ACTION_DATE' => '',
		'APP_AUTOMATIC_DISABLED_DATE' => '',
		'APP_DELEGATION_USER_ID' => '',
		'PRO_ID' => '' 
	),
	'fieldPlaceholders' => array(
		'APP_DELAY_UID' => '',
		'PRO_UID' => '',
		'APP_UID' => '',
		'APP_NUMBER' => '',
		'APP_THREAD_INDEX' => '',
		'APP_DEL_INDEX' => '',
		'APP_TYPE' => '',
		'APP_STATUS' => '',
		'APP_NEXT_TASK' => '',
		'APP_DELEGATION_USER' => '',
		'APP_ENABLE_ACTION_USER' => '',
		'APP_ENABLE_ACTION_DATE' => '',
		'APP_DISABLE_ACTION_USER' => '',
		'APP_DISABLE_ACTION_DATE' => '',
		'APP_AUTOMATIC_DISABLED_DATE' => '',
		'APP_DELEGATION_USER_ID' => '',
		'PRO_ID' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>