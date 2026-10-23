<?php
global $runnerTableSettings;
$runnerTableSettings['TASK_USER'] = array(
	'name' => 'TASK_USER',
	'shortName' => 'TASK_USER',
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
	'afterEditDetails' => 'TASK_USER',
	'afterAddDetail' => 'TASK_USER',
	'detailsBadgeColor' => '6b8e23',
	'sql' => 'SELECT
	TAS_UID,
	USR_UID,
	TU_TYPE,
	TU_RELATION
FROM
	TASK_USER',
	'keyFields' => array( 
		'TAS_UID',
		'USR_UID',
		'TU_TYPE',
		'TU_RELATION' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'TAS_UID' => array(
			'name' => 'TAS_UID',
			'goodName' => 'TAS_UID',
			'strField' => 'TAS_UID',
			'index' => 1,
			'sqlExpression' => 'TAS_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK_USER' 
		),
		'USR_UID' => array(
			'name' => 'USR_UID',
			'goodName' => 'USR_UID',
			'strField' => 'USR_UID',
			'index' => 2,
			'sqlExpression' => 'USR_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK_USER' 
		),
		'TU_TYPE' => array(
			'name' => 'TU_TYPE',
			'goodName' => 'TU_TYPE',
			'strField' => 'TU_TYPE',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'TU_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK_USER' 
		),
		'TU_RELATION' => array(
			'name' => 'TU_RELATION',
			'goodName' => 'TU_RELATION',
			'strField' => 'TU_RELATION',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'TU_RELATION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK_USER' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	TAS_UID,
	USR_UID,
	TU_TYPE,
	TU_RELATION
FROM
	TASK_USER',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'TAS_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK_USER',
					'name' => 'TAS_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_UID' 
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
					'table' => 'TASK_USER',
					'name' => 'USR_UID' 
				),
				'encrypted' => false,
				'columnName' => 'USR_UID' 
			),
			array(
				'sql' => 'TU_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK_USER',
					'name' => 'TU_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'TU_TYPE' 
			),
			array(
				'sql' => 'TU_RELATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK_USER',
					'name' => 'TU_RELATION' 
				),
				'encrypted' => false,
				'columnName' => 'TU_RELATION' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'TASK_USER',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'TASK_USER',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'TAS_UID',
						'USR_UID',
						'TU_TYPE',
						'TU_RELATION' 
					),
					'name' => 'TASK_USER' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'TAS_UID,
	USR_UID,
	TU_TYPE,
	TU_RELATION',
		'fromListSql' => 'FROM
	TASK_USER',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'TASK_USER',
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
			'TAS_UID',
			'USR_UID',
			'TU_TYPE',
			'TU_RELATION' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'TAS_UID',
			'USR_UID',
			'TU_TYPE',
			'TU_RELATION' 
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
	$runnerTableLabels['TASK_USER'] = array(
	'tableCaption' => 'TASK USER',
	'fieldLabels' => array(
		'TAS_UID' => 'TAS UID',
		'USR_UID' => 'USR UID',
		'TU_TYPE' => 'TU TYPE',
		'TU_RELATION' => 'TU RELATION' 
	),
	'fieldTooltips' => array(
		'TAS_UID' => '',
		'USR_UID' => '',
		'TU_TYPE' => '',
		'TU_RELATION' => '' 
	),
	'fieldPlaceholders' => array(
		'TAS_UID' => '',
		'USR_UID' => '',
		'TU_TYPE' => '',
		'TU_RELATION' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>