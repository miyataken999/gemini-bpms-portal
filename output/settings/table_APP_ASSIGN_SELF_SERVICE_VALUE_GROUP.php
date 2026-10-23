<?php
global $runnerTableSettings;
$runnerTableSettings['APP_ASSIGN_SELF_SERVICE_VALUE_GROUP'] = array(
	'name' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
	'shortName' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
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
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'defaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'afterEditDetails' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
	'afterAddDetail' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
	'detailsBadgeColor' => '2f4f4f',
	'sql' => 'SELECT
	ID,
	GRP_UID
FROM
	APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ID' => array(
			'name' => 'ID',
			'goodName' => 'ID',
			'strField' => 'ID',
			'index' => 1,
			'type' => 3,
			'sqlExpression' => 'ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' 
		),
		'GRP_UID' => array(
			'name' => 'GRP_UID',
			'goodName' => 'GRP_UID',
			'strField' => 'GRP_UID',
			'index' => 2,
			'sqlExpression' => 'GRP_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ID,
	GRP_UID
FROM
	APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
					'name' => 'ID' 
				),
				'encrypted' => false,
				'columnName' => 'ID' 
			),
			array(
				'sql' => 'GRP_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
					'name' => 'GRP_UID' 
				),
				'encrypted' => false,
				'columnName' => 'GRP_UID' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ID',
						'GRP_UID' 
					),
					'name' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ID,
	GRP_UID',
		'fromListSql' => 'FROM
	APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
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
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'originalDefaultPages' => array(
		'add' => 'add',
		'export' => 'export',
		'import' => 'import',
		'list' => 'list',
		'print' => 'print',
		'search' => 'search' 
	),
	'searchSettings' => array(
		'caseSensitiveSearch' => false,
		'searchableFields' => array( 
			'ID',
			'GRP_UID' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ID',
			'GRP_UID' 
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
	$runnerTableLabels['APP_ASSIGN_SELF_SERVICE_VALUE_GROUP'] = array(
	'tableCaption' => 'APP ASSIGN SELF SERVICE VALUE GROUP',
	'fieldLabels' => array(
		'ID' => 'ID',
		'GRP_UID' => 'GRP UID' 
	),
	'fieldTooltips' => array(
		'ID' => '',
		'GRP_UID' => '' 
	),
	'fieldPlaceholders' => array(
		'ID' => '',
		'GRP_UID' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>