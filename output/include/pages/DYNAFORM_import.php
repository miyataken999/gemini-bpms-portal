<?php
			$optionsArray = array(
	'fields' => array(
		'gridFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'DYN_UID' => array( 
				'import_field' 
			),
			'DYN_TITLE' => array( 
				'import_field1' 
			),
			'DYN_DESCRIPTION' => array( 
				'import_field2' 
			),
			'PRO_UID' => array( 
				'import_field3' 
			),
			'DYN_TYPE' => array( 
				'import_field4' 
			),
			'DYN_FILENAME' => array( 
				'import_field5' 
			),
			'DYN_CONTENT' => array( 
				'import_field6' 
			),
			'DYN_LABEL' => array( 
				'import_field7' 
			),
			'DYN_VERSION' => array( 
				'import_field8' 
			),
			'DYN_UPDATE_DATE' => array( 
				'import_field9' 
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
					'import_field9' 
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
				'import_field9' => 'grid' 
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
				'import_field9' 
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
						'import_field9' 
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
			'field' => 'DYN_UID',
			'type' => 'import_field' 
		),
		'import_field1' => array(
			'field' => 'DYN_TITLE',
			'type' => 'import_field' 
		),
		'import_field2' => array(
			'field' => 'DYN_DESCRIPTION',
			'type' => 'import_field' 
		),
		'import_field3' => array(
			'field' => 'PRO_UID',
			'type' => 'import_field' 
		),
		'import_field4' => array(
			'field' => 'DYN_TYPE',
			'type' => 'import_field' 
		),
		'import_field5' => array(
			'field' => 'DYN_FILENAME',
			'type' => 'import_field' 
		),
		'import_field6' => array(
			'field' => 'DYN_CONTENT',
			'type' => 'import_field' 
		),
		'import_field7' => array(
			'field' => 'DYN_LABEL',
			'type' => 'import_field' 
		),
		'import_field8' => array(
			'field' => 'DYN_VERSION',
			'type' => 'import_field' 
		),
		'import_field9' => array(
			'field' => 'DYN_UPDATE_DATE',
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