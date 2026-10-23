<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'APP_DELAY_UID' => array( 
				'import_field' 
			),
			'PRO_UID' => array( 
				'import_field1' 
			),
			'APP_UID' => array( 
				'import_field2' 
			),
			'APP_NUMBER' => array( 
				'import_field3' 
			),
			'APP_THREAD_INDEX' => array( 
				'import_field4' 
			),
			'APP_DEL_INDEX' => array( 
				'import_field5' 
			),
			'APP_TYPE' => array( 
				'import_field6' 
			),
			'APP_STATUS' => array( 
				'import_field7' 
			),
			'APP_NEXT_TASK' => array( 
				'import_field8' 
			),
			'APP_DELEGATION_USER' => array( 
				'import_field9' 
			),
			'APP_ENABLE_ACTION_USER' => array( 
				'import_field10' 
			),
			'APP_ENABLE_ACTION_DATE' => array( 
				'import_field11' 
			),
			'APP_DISABLE_ACTION_USER' => array( 
				'import_field12' 
			),
			'APP_DISABLE_ACTION_DATE' => array( 
				'import_field13' 
			),
			'APP_AUTOMATIC_DISABLED_DATE' => array( 
				'import_field14' 
			),
			'APP_DELEGATION_USER_ID' => array( 
				'import_field15' 
			),
			'PRO_ID' => array( 
				'import_field16' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => false,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'supertop' => array( 
					 
				),
				'top' => array( 
					'import_header' 
				),
				'grid' => array( 
					'import_field',
					'import_field1',
					'import_field2',
					'import_field3',
					'import_field4',
					'import_field5',
					'import_field6',
					'import_field7',
					'import_field8',
					'import_field9',
					'import_field10',
					'import_field11',
					'import_field12',
					'import_field13',
					'import_field14',
					'import_field15',
					'import_field16' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'import_header' => 'top',
				'import_field' => 'grid',
				'import_field1' => 'grid',
				'import_field2' => 'grid',
				'import_field3' => 'grid',
				'import_field4' => 'grid',
				'import_field5' => 'grid',
				'import_field6' => 'grid',
				'import_field7' => 'grid',
				'import_field8' => 'grid',
				'import_field9' => 'grid',
				'import_field10' => 'grid',
				'import_field11' => 'grid',
				'import_field12' => 'grid',
				'import_field13' => 'grid',
				'import_field14' => 'grid',
				'import_field15' => 'grid',
				'import_field16' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'import_header' => array( 
				'import_header' 
			),
			'import_field' => array( 
				'import_field',
				'import_field1',
				'import_field2',
				'import_field3',
				'import_field4',
				'import_field5',
				'import_field6',
				'import_field7',
				'import_field8',
				'import_field9',
				'import_field10',
				'import_field11',
				'import_field12',
				'import_field13',
				'import_field14',
				'import_field15',
				'import_field16' 
			) 
		),
		'cellMaps' => array(
			 
		) 
	),
	'page' => array(
		'verticalBar' => false,
		'labeledButtons' => array(
			'update_records' => array(
				 
			),
			'print_pages' => array(
				 
			),
			'register_activate_message' => array(
				 
			),
			'details_found' => array(
				 
			) 
		),
		'hasCustomButtons' => false,
		'customButtons' => array( 
			 
		),
		'codeSnippets' => array( 
			 
		),
		'clickHandlerSnippets' => array( 
			 
		),
		'hasNotifications' => false,
		'menus' => array( 
			 
		),
		'calcTotalsFor' => 1,
		'hasCharts' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	) 
);
			$pageArray = array(
	'id' => 'import',
	'type' => 'import',
	'layoutId' => 'first',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'supertop' => array(
			'modelId' => 'panel-top',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'import-header',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'import-grid',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c1' => array(
					'model' => 'c1',
					'items' => array( 
						'import_field',
						'import_field1',
						'import_field2',
						'import_field3',
						'import_field4',
						'import_field5',
						'import_field6',
						'import_field7',
						'import_field8',
						'import_field9',
						'import_field10',
						'import_field11',
						'import_field12',
						'import_field13',
						'import_field14',
						'import_field15',
						'import_field16' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'import_header' => array(
			'type' => 'import_header' 
		),
		'import_field' => array(
			'field' => 'APP_DELAY_UID',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'PRO_UID',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'APP_UID',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'APP_NUMBER',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'APP_THREAD_INDEX',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'APP_DEL_INDEX',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'APP_TYPE',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'APP_STATUS',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'APP_NEXT_TASK',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'APP_DELEGATION_USER',
			'type' => 'import_field' 
		),
		'import_field10' => array(
			'field' => 'APP_ENABLE_ACTION_USER',
			'type' => 'import_field' 
		),
		'import_field11' => array(
			'field' => 'APP_ENABLE_ACTION_DATE',
			'type' => 'import_field' 
		),
		'import_field12' => array(
			'field' => 'APP_DISABLE_ACTION_USER',
			'type' => 'import_field' 
		),
		'import_field13' => array(
			'field' => 'APP_DISABLE_ACTION_DATE',
			'type' => 'import_field' 
		),
		'import_field14' => array(
			'field' => 'APP_AUTOMATIC_DISABLED_DATE',
			'type' => 'import_field' 
		),
		'import_field15' => array(
			'field' => 'APP_DELEGATION_USER_ID',
			'type' => 'import_field' 
		),
		'import_field16' => array(
			'field' => 'PRO_ID',
			'type' => 'import_field' 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>