<?php
global $runnerTableSettings;
$runnerTableSettings['ABE_RESPONSES'] = array(
	'name' => 'ABE_RESPONSES',
	'shortName' => 'ABE_RESPONSES',
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
	'afterEditDetails' => 'ABE_RESPONSES',
	'afterAddDetail' => 'ABE_RESPONSES',
	'detailsBadgeColor' => '00c2c5',
	'sql' => 'SELECT
	ABE_RES_UID,
	ABE_REQ_UID,
	ABE_RES_CLIENT_IP,
	ABE_RES_DATA,
	ABE_RES_DATE,
	ABE_RES_STATUS,
	ABE_RES_MESSAGE
FROM
	ABE_RESPONSES',
	'keyFields' => array( 
		'ABE_RES_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'ABE_RES_UID' => array(
			'name' => 'ABE_RES_UID',
			'goodName' => 'ABE_RES_UID',
			'strField' => 'ABE_RES_UID',
			'index' => 1,
			'sqlExpression' => 'ABE_RES_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_RESPONSES' 
		),
		'ABE_REQ_UID' => array(
			'name' => 'ABE_REQ_UID',
			'goodName' => 'ABE_REQ_UID',
			'strField' => 'ABE_REQ_UID',
			'index' => 2,
			'sqlExpression' => 'ABE_REQ_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_RESPONSES' 
		),
		'ABE_RES_CLIENT_IP' => array(
			'name' => 'ABE_RES_CLIENT_IP',
			'goodName' => 'ABE_RES_CLIENT_IP',
			'strField' => 'ABE_RES_CLIENT_IP',
			'index' => 3,
			'sqlExpression' => 'ABE_RES_CLIENT_IP',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_RESPONSES' 
		),
		'ABE_RES_DATA' => array(
			'name' => 'ABE_RES_DATA',
			'goodName' => 'ABE_RES_DATA',
			'strField' => 'ABE_RES_DATA',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'ABE_RES_DATA',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'ABE_RESPONSES' 
		),
		'ABE_RES_DATE' => array(
			'name' => 'ABE_RES_DATE',
			'goodName' => 'ABE_RES_DATE',
			'strField' => 'ABE_RES_DATE',
			'index' => 5,
			'type' => 135,
			'sqlExpression' => 'ABE_RES_DATE',
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
			'tableName' => 'ABE_RESPONSES' 
		),
		'ABE_RES_STATUS' => array(
			'name' => 'ABE_RES_STATUS',
			'goodName' => 'ABE_RES_STATUS',
			'strField' => 'ABE_RES_STATUS',
			'index' => 6,
			'sqlExpression' => 'ABE_RES_STATUS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_RESPONSES' 
		),
		'ABE_RES_MESSAGE' => array(
			'name' => 'ABE_RES_MESSAGE',
			'goodName' => 'ABE_RES_MESSAGE',
			'strField' => 'ABE_RES_MESSAGE',
			'index' => 7,
			'sqlExpression' => 'ABE_RES_MESSAGE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'ABE_RESPONSES' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	ABE_RES_UID,
	ABE_REQ_UID,
	ABE_RES_CLIENT_IP,
	ABE_RES_DATA,
	ABE_RES_DATE,
	ABE_RES_STATUS,
	ABE_RES_MESSAGE
FROM
	ABE_RESPONSES',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'ABE_RES_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_RES_UID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_RES_UID' 
			),
			array(
				'sql' => 'ABE_REQ_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_REQ_UID' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_REQ_UID' 
			),
			array(
				'sql' => 'ABE_RES_CLIENT_IP',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_RES_CLIENT_IP' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_RES_CLIENT_IP' 
			),
			array(
				'sql' => 'ABE_RES_DATA',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_RES_DATA' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_RES_DATA' 
			),
			array(
				'sql' => 'ABE_RES_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_RES_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_RES_DATE' 
			),
			array(
				'sql' => 'ABE_RES_STATUS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_RES_STATUS' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_RES_STATUS' 
			),
			array(
				'sql' => 'ABE_RES_MESSAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'ABE_RESPONSES',
					'name' => 'ABE_RES_MESSAGE' 
				),
				'encrypted' => false,
				'columnName' => 'ABE_RES_MESSAGE' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'ABE_RESPONSES',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'ABE_RESPONSES',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'ABE_RES_UID',
						'ABE_REQ_UID',
						'ABE_RES_CLIENT_IP',
						'ABE_RES_DATA',
						'ABE_RES_DATE',
						'ABE_RES_STATUS',
						'ABE_RES_MESSAGE' 
					),
					'name' => 'ABE_RESPONSES' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'ABE_RES_UID,
	ABE_REQ_UID,
	ABE_RES_CLIENT_IP,
	ABE_RES_DATA,
	ABE_RES_DATE,
	ABE_RES_STATUS,
	ABE_RES_MESSAGE',
		'fromListSql' => 'FROM
	ABE_RESPONSES',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'ABE_RESPONSES',
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
			'ABE_RES_UID',
			'ABE_REQ_UID',
			'ABE_RES_CLIENT_IP',
			'ABE_RES_DATA',
			'ABE_RES_DATE',
			'ABE_RES_STATUS',
			'ABE_RES_MESSAGE' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'ABE_RES_UID',
			'ABE_REQ_UID',
			'ABE_RES_CLIENT_IP',
			'ABE_RES_DATA',
			'ABE_RES_DATE',
			'ABE_RES_STATUS',
			'ABE_RES_MESSAGE' 
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
	$runnerTableLabels['ABE_RESPONSES'] = array(
	'tableCaption' => 'ABE RESPONSES',
	'fieldLabels' => array(
		'ABE_RES_UID' => 'ABE RES UID',
		'ABE_REQ_UID' => 'ABE REQ UID',
		'ABE_RES_CLIENT_IP' => 'ABE RES CLIENT IP',
		'ABE_RES_DATA' => 'ABE RES DATA',
		'ABE_RES_DATE' => 'ABE RES DATE',
		'ABE_RES_STATUS' => 'ABE RES STATUS',
		'ABE_RES_MESSAGE' => 'ABE RES MESSAGE' 
	),
	'fieldTooltips' => array(
		'ABE_RES_UID' => '',
		'ABE_REQ_UID' => '',
		'ABE_RES_CLIENT_IP' => '',
		'ABE_RES_DATA' => '',
		'ABE_RES_DATE' => '',
		'ABE_RES_STATUS' => '',
		'ABE_RES_MESSAGE' => '' 
	),
	'fieldPlaceholders' => array(
		'ABE_RES_UID' => '',
		'ABE_REQ_UID' => '',
		'ABE_RES_CLIENT_IP' => '',
		'ABE_RES_DATA' => '',
		'ABE_RES_DATE' => '',
		'ABE_RES_STATUS' => '',
		'ABE_RES_MESSAGE' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>