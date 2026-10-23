<?php
global $runnerTableSettings;
$runnerTableSettings['DIM_TIME_DELEGATE'] = array(
	'name' => 'DIM_TIME_DELEGATE',
	'shortName' => 'DIM_TIME_DELEGATE',
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
	'afterEditDetails' => 'DIM_TIME_DELEGATE',
	'afterAddDetail' => 'DIM_TIME_DELEGATE',
	'detailsBadgeColor' => '00c2c5',
	'sql' => 'SELECT
	TIME_ID,
	MONTH_ID,
	QTR_ID,
	YEAR_ID,
	MONTH_NAME,
	MONTH_DESC,
	QTR_NAME,
	QTR_DESC
FROM
	DIM_TIME_DELEGATE',
	'keyFields' => array( 
		'TIME_ID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'TIME_ID' => array(
			'name' => 'TIME_ID',
			'goodName' => 'TIME_ID',
			'strField' => 'TIME_ID',
			'index' => 1,
			'sqlExpression' => 'TIME_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'MONTH_ID' => array(
			'name' => 'MONTH_ID',
			'goodName' => 'MONTH_ID',
			'strField' => 'MONTH_ID',
			'index' => 2,
			'type' => 3,
			'sqlExpression' => 'MONTH_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'QTR_ID' => array(
			'name' => 'QTR_ID',
			'goodName' => 'QTR_ID',
			'strField' => 'QTR_ID',
			'index' => 3,
			'type' => 3,
			'sqlExpression' => 'QTR_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'YEAR_ID' => array(
			'name' => 'YEAR_ID',
			'goodName' => 'YEAR_ID',
			'strField' => 'YEAR_ID',
			'index' => 4,
			'type' => 3,
			'sqlExpression' => 'YEAR_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'MONTH_NAME' => array(
			'name' => 'MONTH_NAME',
			'goodName' => 'MONTH_NAME',
			'strField' => 'MONTH_NAME',
			'index' => 5,
			'sqlExpression' => 'MONTH_NAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'MONTH_DESC' => array(
			'name' => 'MONTH_DESC',
			'goodName' => 'MONTH_DESC',
			'strField' => 'MONTH_DESC',
			'index' => 6,
			'sqlExpression' => 'MONTH_DESC',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'QTR_NAME' => array(
			'name' => 'QTR_NAME',
			'goodName' => 'QTR_NAME',
			'strField' => 'QTR_NAME',
			'index' => 7,
			'sqlExpression' => 'QTR_NAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		),
		'QTR_DESC' => array(
			'name' => 'QTR_DESC',
			'goodName' => 'QTR_DESC',
			'strField' => 'QTR_DESC',
			'index' => 8,
			'sqlExpression' => 'QTR_DESC',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DIM_TIME_DELEGATE' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	TIME_ID,
	MONTH_ID,
	QTR_ID,
	YEAR_ID,
	MONTH_NAME,
	MONTH_DESC,
	QTR_NAME,
	QTR_DESC
FROM
	DIM_TIME_DELEGATE',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'TIME_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'TIME_ID' 
				),
				'encrypted' => false,
				'columnName' => 'TIME_ID' 
			),
			array(
				'sql' => 'MONTH_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'MONTH_ID' 
				),
				'encrypted' => false,
				'columnName' => 'MONTH_ID' 
			),
			array(
				'sql' => 'QTR_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'QTR_ID' 
				),
				'encrypted' => false,
				'columnName' => 'QTR_ID' 
			),
			array(
				'sql' => 'YEAR_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'YEAR_ID' 
				),
				'encrypted' => false,
				'columnName' => 'YEAR_ID' 
			),
			array(
				'sql' => 'MONTH_NAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'MONTH_NAME' 
				),
				'encrypted' => false,
				'columnName' => 'MONTH_NAME' 
			),
			array(
				'sql' => 'MONTH_DESC',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'MONTH_DESC' 
				),
				'encrypted' => false,
				'columnName' => 'MONTH_DESC' 
			),
			array(
				'sql' => 'QTR_NAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'QTR_NAME' 
				),
				'encrypted' => false,
				'columnName' => 'QTR_NAME' 
			),
			array(
				'sql' => 'QTR_DESC',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DIM_TIME_DELEGATE',
					'name' => 'QTR_DESC' 
				),
				'encrypted' => false,
				'columnName' => 'QTR_DESC' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'DIM_TIME_DELEGATE',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'DIM_TIME_DELEGATE',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'TIME_ID',
						'MONTH_ID',
						'QTR_ID',
						'YEAR_ID',
						'MONTH_NAME',
						'MONTH_DESC',
						'QTR_NAME',
						'QTR_DESC' 
					),
					'name' => 'DIM_TIME_DELEGATE' 
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
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'TIME_ID,
	MONTH_ID,
	QTR_ID,
	YEAR_ID,
	MONTH_NAME,
	MONTH_DESC,
	QTR_NAME,
	QTR_DESC',
		'fromListSql' => 'FROM
	DIM_TIME_DELEGATE',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'DIM_TIME_DELEGATE',
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
			'TIME_ID',
			'MONTH_ID',
			'QTR_ID',
			'YEAR_ID',
			'MONTH_NAME',
			'MONTH_DESC',
			'QTR_NAME',
			'QTR_DESC' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'TIME_ID',
			'MONTH_ID',
			'QTR_ID',
			'YEAR_ID',
			'MONTH_NAME',
			'MONTH_DESC',
			'QTR_NAME',
			'QTR_DESC' 
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
	$runnerTableLabels['DIM_TIME_DELEGATE'] = array(
	'tableCaption' => 'DIM TIME DELEGATE',
	'fieldLabels' => array(
		'TIME_ID' => 'TIME ID',
		'MONTH_ID' => 'MONTH ID',
		'QTR_ID' => 'QTR ID',
		'YEAR_ID' => 'YEAR ID',
		'MONTH_NAME' => 'MONTH NAME',
		'MONTH_DESC' => 'MONTH DESC',
		'QTR_NAME' => 'QTR NAME',
		'QTR_DESC' => 'QTR DESC' 
	),
	'fieldTooltips' => array(
		'TIME_ID' => '',
		'MONTH_ID' => '',
		'QTR_ID' => '',
		'YEAR_ID' => '',
		'MONTH_NAME' => '',
		'MONTH_DESC' => '',
		'QTR_NAME' => '',
		'QTR_DESC' => '' 
	),
	'fieldPlaceholders' => array(
		'TIME_ID' => '',
		'MONTH_ID' => '',
		'QTR_ID' => '',
		'YEAR_ID' => '',
		'MONTH_NAME' => '',
		'MONTH_DESC' => '',
		'QTR_NAME' => '',
		'QTR_DESC' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>