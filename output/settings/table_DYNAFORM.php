<?php
global $runnerTableSettings;
$runnerTableSettings['DYNAFORM'] = array(
	'name' => 'DYNAFORM',
	'shortName' => 'DYNAFORM',
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
	'afterEditDetails' => 'DYNAFORM',
	'afterAddDetail' => 'DYNAFORM',
	'detailsBadgeColor' => '6b8e23',
	'sql' => 'SELECT
	DYN_UID,
	DYN_TITLE,
	DYN_DESCRIPTION,
	PRO_UID,
	DYN_TYPE,
	DYN_FILENAME,
	DYN_CONTENT,
	DYN_LABEL,
	DYN_VERSION,
	DYN_UPDATE_DATE
FROM
	DYNAFORM',
	'keyFields' => array( 
		'DYN_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'DYN_UID' => array(
			'name' => 'DYN_UID',
			'goodName' => 'DYN_UID',
			'strField' => 'DYN_UID',
			'index' => 1,
			'sqlExpression' => 'DYN_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_TITLE' => array(
			'name' => 'DYN_TITLE',
			'goodName' => 'DYN_TITLE',
			'strField' => 'DYN_TITLE',
			'index' => 2,
			'type' => 201,
			'sqlExpression' => 'DYN_TITLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_DESCRIPTION' => array(
			'name' => 'DYN_DESCRIPTION',
			'goodName' => 'DYN_DESCRIPTION',
			'strField' => 'DYN_DESCRIPTION',
			'index' => 3,
			'type' => 201,
			'sqlExpression' => 'DYN_DESCRIPTION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'PRO_UID' => array(
			'name' => 'PRO_UID',
			'goodName' => 'PRO_UID',
			'strField' => 'PRO_UID',
			'index' => 4,
			'sqlExpression' => 'PRO_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_TYPE' => array(
			'name' => 'DYN_TYPE',
			'goodName' => 'DYN_TYPE',
			'strField' => 'DYN_TYPE',
			'index' => 5,
			'sqlExpression' => 'DYN_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_FILENAME' => array(
			'name' => 'DYN_FILENAME',
			'goodName' => 'DYN_FILENAME',
			'strField' => 'DYN_FILENAME',
			'index' => 6,
			'sqlExpression' => 'DYN_FILENAME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_CONTENT' => array(
			'name' => 'DYN_CONTENT',
			'goodName' => 'DYN_CONTENT',
			'strField' => 'DYN_CONTENT',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'DYN_CONTENT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_LABEL' => array(
			'name' => 'DYN_LABEL',
			'goodName' => 'DYN_LABEL',
			'strField' => 'DYN_LABEL',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'DYN_LABEL',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_VERSION' => array(
			'name' => 'DYN_VERSION',
			'goodName' => 'DYN_VERSION',
			'strField' => 'DYN_VERSION',
			'index' => 9,
			'type' => 3,
			'sqlExpression' => 'DYN_VERSION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'DYNAFORM' 
		),
		'DYN_UPDATE_DATE' => array(
			'name' => 'DYN_UPDATE_DATE',
			'goodName' => 'DYN_UPDATE_DATE',
			'strField' => 'DYN_UPDATE_DATE',
			'index' => 10,
			'type' => 135,
			'sqlExpression' => 'DYN_UPDATE_DATE',
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
			'tableName' => 'DYNAFORM' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	DYN_UID,
	DYN_TITLE,
	DYN_DESCRIPTION,
	PRO_UID,
	DYN_TYPE,
	DYN_FILENAME,
	DYN_CONTENT,
	DYN_LABEL,
	DYN_VERSION,
	DYN_UPDATE_DATE
FROM
	DYNAFORM',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'DYN_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_UID' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_UID' 
			),
			array(
				'sql' => 'DYN_TITLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_TITLE' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_TITLE' 
			),
			array(
				'sql' => 'DYN_DESCRIPTION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_DESCRIPTION' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_DESCRIPTION' 
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
					'table' => 'DYNAFORM',
					'name' => 'PRO_UID' 
				),
				'encrypted' => false,
				'columnName' => 'PRO_UID' 
			),
			array(
				'sql' => 'DYN_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_TYPE' 
			),
			array(
				'sql' => 'DYN_FILENAME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_FILENAME' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_FILENAME' 
			),
			array(
				'sql' => 'DYN_CONTENT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_CONTENT' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_CONTENT' 
			),
			array(
				'sql' => 'DYN_LABEL',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_LABEL' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_LABEL' 
			),
			array(
				'sql' => 'DYN_VERSION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_VERSION' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_VERSION' 
			),
			array(
				'sql' => 'DYN_UPDATE_DATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'DYNAFORM',
					'name' => 'DYN_UPDATE_DATE' 
				),
				'encrypted' => false,
				'columnName' => 'DYN_UPDATE_DATE' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'DYNAFORM',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'DYNAFORM',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'DYN_UID',
						'DYN_TITLE',
						'DYN_DESCRIPTION',
						'PRO_UID',
						'DYN_TYPE',
						'DYN_FILENAME',
						'DYN_CONTENT',
						'DYN_LABEL',
						'DYN_VERSION',
						'DYN_UPDATE_DATE' 
					),
					'name' => 'DYNAFORM' 
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
		'fieldListSql' => 'DYN_UID,
	DYN_TITLE,
	DYN_DESCRIPTION,
	PRO_UID,
	DYN_TYPE,
	DYN_FILENAME,
	DYN_CONTENT,
	DYN_LABEL,
	DYN_VERSION,
	DYN_UPDATE_DATE',
		'fromListSql' => 'FROM
	DYNAFORM',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'DYNAFORM',
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
			'DYN_UID',
			'DYN_TITLE',
			'DYN_DESCRIPTION',
			'PRO_UID',
			'DYN_TYPE',
			'DYN_FILENAME',
			'DYN_CONTENT',
			'DYN_LABEL',
			'DYN_VERSION',
			'DYN_UPDATE_DATE' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'DYN_UID',
			'DYN_TITLE',
			'DYN_DESCRIPTION',
			'PRO_UID',
			'DYN_TYPE',
			'DYN_FILENAME',
			'DYN_CONTENT',
			'DYN_LABEL',
			'DYN_VERSION',
			'DYN_UPDATE_DATE' 
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
	$runnerTableLabels['DYNAFORM'] = array(
	'tableCaption' => 'DYNAFORM',
	'fieldLabels' => array(
		'DYN_UID' => 'DYN UID',
		'DYN_TITLE' => 'DYN TITLE',
		'DYN_DESCRIPTION' => 'DYN DESCRIPTION',
		'PRO_UID' => 'PRO UID',
		'DYN_TYPE' => 'DYN TYPE',
		'DYN_FILENAME' => 'DYN FILENAME',
		'DYN_CONTENT' => 'DYN CONTENT',
		'DYN_LABEL' => 'DYN LABEL',
		'DYN_VERSION' => 'DYN VERSION',
		'DYN_UPDATE_DATE' => 'DYN UPDATE DATE' 
	),
	'fieldTooltips' => array(
		'DYN_UID' => '',
		'DYN_TITLE' => '',
		'DYN_DESCRIPTION' => '',
		'PRO_UID' => '',
		'DYN_TYPE' => '',
		'DYN_FILENAME' => '',
		'DYN_CONTENT' => '',
		'DYN_LABEL' => '',
		'DYN_VERSION' => '',
		'DYN_UPDATE_DATE' => '' 
	),
	'fieldPlaceholders' => array(
		'DYN_UID' => '',
		'DYN_TITLE' => '',
		'DYN_DESCRIPTION' => '',
		'PRO_UID' => '',
		'DYN_TYPE' => '',
		'DYN_FILENAME' => '',
		'DYN_CONTENT' => '',
		'DYN_LABEL' => '',
		'DYN_VERSION' => '',
		'DYN_UPDATE_DATE' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>