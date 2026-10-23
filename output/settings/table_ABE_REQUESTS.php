<?php
global $runnerTableSettings;
$runnerTableSettings['ABE_REQUESTS'] = array(
	'name' => 'ABE_REQUESTS',
	'shortName' => 'ABE_REQUESTS',
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
	'afterEditDetails' => 'ABE_REQUESTS',
	'afterAddDetail' => 'ABE_REQUESTS',
	'detailsBadgeColor' => 'e07878',
	'sql' => 'SELECT
	ABE_REQ_UID,
	ABE_UID,
	APP_UID,
	DEL_INDEX,
	ABE_REQ_SENT_TO,
	ABE_REQ_SUBJECT,
	ABE_REQ_BODY,
	ABE_REQ_DATE,
	ABE_REQ_STATUS,
	ABE_REQ_ANSWERED
FROM
	ABE_REQUESTS',
	'keyFields' => array( 
		'ABE_REQ_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ABE_REQ_UID' => array(
			'name' => 'ABE_REQ_UID',
			'goodName' => 'ABE_REQ_UID',
			'strField' => 'ABE_REQ_UID',
			'index' => 1,
			'sqlExpression' => 'ABE_REQ_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_UID' => array(
			'name' => 'ABE_UID',
			'goodName' => 'ABE_UID',
			'strField' => 'ABE_UID',
			'index' => 2,
			'sqlExpression' => 'ABE_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
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
			'tableName' => 'ABE_REQUESTS' 
		),
		'DEL_INDEX' => array(
			'name' => 'DEL_INDEX',
			'goodName' => 'DEL_INDEX',
			'strField' => 'DEL_INDEX',
			'index' => 4,
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
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_REQ_SENT_TO' => array(
			'name' => 'ABE_REQ_SENT_TO',
			'goodName' => 'ABE_REQ_SENT_TO',
			'strField' => 'ABE_REQ_SENT_TO',
			'index' => 5,
			'sqlExpression' => 'ABE_REQ_SENT_TO',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_REQ_SUBJECT' => array(
			'name' => 'ABE_REQ_SUBJECT',
			'goodName' => 'ABE_REQ_SUBJECT',
			'strField' => 'ABE_REQ_SUBJECT',
			'index' => 6,
			'sqlExpression' => 'ABE_REQ_SUBJECT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_REQ_BODY' => array(
			'name' => 'ABE_REQ_BODY',
			'goodName' => 'ABE_REQ_BODY',
			'strField' => 'ABE_REQ_BODY',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'ABE_REQ_BODY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_REQ_DATE' => array(
			'name' => 'ABE_REQ_DATE',
			'goodName' => 'ABE_REQ_DATE',
			'strField' => 'ABE_REQ_DATE',
			'index' => 8,
			'type' => 135,
			'sqlExpression' => 'ABE_REQ_DATE',
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
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_REQ_STATUS' => array(
			'name' => 'ABE_REQ_STATUS',
			'goodName' => 'ABE_REQ_STATUS',
			'strField' => 'ABE_REQ_STATUS',
			'index' => 9,
			'sqlExpression' => 'ABE_REQ_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
		),
		'ABE_REQ_ANSWERED' => array(
			'name' => 'ABE_REQ_ANSWERED',
			'goodName' => 'ABE_REQ_ANSWERED',
			'strField' => 'ABE_REQ_ANSWERED',
			'index' => 10,
			'type' => 16,
			'sqlExpression' => 'ABE_REQ_ANSWERED',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_REQUESTS' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ABE_REQ_UID,
	ABE_UID,
	APP_UID,
	DEL_INDEX,
	ABE_REQ_SENT_TO,
	ABE_REQ_SUBJECT,
	ABE_REQ_BODY,
	ABE_REQ_DATE,
	ABE_REQ_STATUS,
	ABE_REQ_ANSWERED
FROM
	ABE_REQUESTS',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ABE_REQ_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_UID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_UID' 
			),
			array(
				'sql' => 'ABE_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_UID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_UID' 
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
					'table' => 'ABE_REQUESTS',
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
					'table' => 'ABE_REQUESTS',
					'name' => 'DEL_INDEX' 
				),
				'encrypted' => false,
				'columnName' => 'DEL_INDEX' 
			),
			array(
				'sql' => 'ABE_REQ_SENT_TO',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_SENT_TO' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_SENT_TO' 
			),
			array(
				'sql' => 'ABE_REQ_SUBJECT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_SUBJECT' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_SUBJECT' 
			),
			array(
				'sql' => 'ABE_REQ_BODY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_BODY' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_BODY' 
			),
			array(
				'sql' => 'ABE_REQ_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_DATE' 
			),
			array(
				'sql' => 'ABE_REQ_STATUS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_STATUS' 
			),
			array(
				'sql' => 'ABE_REQ_ANSWERED',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_REQUESTS',
					'name' => 'ABE_REQ_ANSWERED' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_ANSWERED' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'ABE_REQUESTS',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'ABE_REQUESTS',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ABE_REQ_UID',
						'ABE_UID',
						'APP_UID',
						'DEL_INDEX',
						'ABE_REQ_SENT_TO',
						'ABE_REQ_SUBJECT',
						'ABE_REQ_BODY',
						'ABE_REQ_DATE',
						'ABE_REQ_STATUS',
						'ABE_REQ_ANSWERED' 
					),
					'name' => 'ABE_REQUESTS' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ABE_REQ_UID,
	ABE_UID,
	APP_UID,
	DEL_INDEX,
	ABE_REQ_SENT_TO,
	ABE_REQ_SUBJECT,
	ABE_REQ_BODY,
	ABE_REQ_DATE,
	ABE_REQ_STATUS,
	ABE_REQ_ANSWERED',
		'fromListSql' => 'FROM
	ABE_REQUESTS',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'ABE_REQUESTS',
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
			'ABE_REQ_UID',
			'ABE_UID',
			'APP_UID',
			'DEL_INDEX',
			'ABE_REQ_SENT_TO',
			'ABE_REQ_SUBJECT',
			'ABE_REQ_BODY',
			'ABE_REQ_DATE',
			'ABE_REQ_STATUS',
			'ABE_REQ_ANSWERED' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ABE_REQ_UID',
			'ABE_UID',
			'APP_UID',
			'DEL_INDEX',
			'ABE_REQ_SENT_TO',
			'ABE_REQ_SUBJECT',
			'ABE_REQ_BODY',
			'ABE_REQ_DATE',
			'ABE_REQ_STATUS',
			'ABE_REQ_ANSWERED' 
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
	$runnerTableLabels['ABE_REQUESTS'] = array(
	'tableCaption' => 'ABE REQUESTS',
	'fieldLabels' => array(
		'ABE_REQ_UID' => 'ABE REQ UID',
		'ABE_UID' => 'ABE UID',
		'APP_UID' => 'APP UID',
		'DEL_INDEX' => 'DEL INDEX',
		'ABE_REQ_SENT_TO' => 'ABE REQ SENT TO',
		'ABE_REQ_SUBJECT' => 'ABE REQ SUBJECT',
		'ABE_REQ_BODY' => 'ABE REQ BODY',
		'ABE_REQ_DATE' => 'ABE REQ DATE',
		'ABE_REQ_STATUS' => 'ABE REQ STATUS',
		'ABE_REQ_ANSWERED' => 'ABE REQ ANSWERED' 
	),
	'fieldTooltips' => array(
		'ABE_REQ_UID' => '',
		'ABE_UID' => '',
		'APP_UID' => '',
		'DEL_INDEX' => '',
		'ABE_REQ_SENT_TO' => '',
		'ABE_REQ_SUBJECT' => '',
		'ABE_REQ_BODY' => '',
		'ABE_REQ_DATE' => '',
		'ABE_REQ_STATUS' => '',
		'ABE_REQ_ANSWERED' => '' 
	),
	'fieldPlaceholders' => array(
		'ABE_REQ_UID' => '',
		'ABE_UID' => '',
		'APP_UID' => '',
		'DEL_INDEX' => '',
		'ABE_REQ_SENT_TO' => '',
		'ABE_REQ_SUBJECT' => '',
		'ABE_REQ_BODY' => '',
		'ABE_REQ_DATE' => '',
		'ABE_REQ_STATUS' => '',
		'ABE_REQ_ANSWERED' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>