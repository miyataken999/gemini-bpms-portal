<?php
			$optionsArray = array(
	'totals' => array(
		'ABE_REQ_UID' => array(
			'totalsType' => '' 
		),
		'ABE_UID' => array(
			'totalsType' => '' 
		),
		'APP_UID' => array(
			'totalsType' => '' 
		),
		'DEL_INDEX' => array(
			'totalsType' => '' 
		),
		'ABE_REQ_SENT_TO' => array(
			'totalsType' => '' 
		),
		'ABE_REQ_SUBJECT' => array(
			'totalsType' => '' 
		),
		'ABE_REQ_BODY' => array(
			'totalsType' => '' 
		),
		'ABE_REQ_DATE' => array(
			'totalsType' => '' 
		),
		'ABE_REQ_STATUS' => array(
			'totalsType' => '' 
		),
		'ABE_REQ_ANSWERED' => array(
			'totalsType' => '' 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
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
		'exportFields' => array( 
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
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			'ABE_REQ_UID' => array( 
				'export_field' 
			),
			'ABE_UID' => array( 
				'export_field1' 
			),
			'APP_UID' => array( 
				'export_field2' 
			),
			'DEL_INDEX' => array( 
				'export_field3' 
			),
			'ABE_REQ_SENT_TO' => array( 
				'export_field4' 
			),
			'ABE_REQ_SUBJECT' => array( 
				'export_field5' 
			),
			'ABE_REQ_BODY' => array( 
				'export_field6' 
			),
			'ABE_REQ_DATE' => array( 
				'export_field7' 
			),
			'ABE_REQ_STATUS' => array( 
				'export_field8' 
			),
			'ABE_REQ_ANSWERED' => array( 
				'export_field9' 
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
					'export_header' 
				),
				'grid' => array( 
					'export_field',
					'export_field1',
					'export_field2',
					'export_field3',
					'export_field4',
					'export_field5',
					'export_field6',
					'export_field7',
					'export_field8',
					'export_field9' 
				),
				'footer' => array( 
					'export_export',
					'export_cancel' 
				) 
			),
			'formXtTags' => array(
				'supertop' => array( 
					 
				) 
			),
			'itemForms' => array(
				'export_header' => 'top',
				'export_field' => 'grid',
				'export_field1' => 'grid',
				'export_field2' => 'grid',
				'export_field3' => 'grid',
				'export_field4' => 'grid',
				'export_field5' => 'grid',
				'export_field6' => 'grid',
				'export_field7' => 'grid',
				'export_field8' => 'grid',
				'export_field9' => 'grid',
				'export_export' => 'footer',
				'export_cancel' => 'footer' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'export_header' => array( 
				'export_header' 
			),
			'export_export' => array( 
				'export_export' 
			),
			'export_cancel' => array( 
				'export_cancel' 
			),
			'export_field' => array( 
				'export_field',
				'export_field1',
				'export_field2',
				'export_field3',
				'export_field4',
				'export_field5',
				'export_field6',
				'export_field7',
				'export_field8',
				'export_field9' 
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
	),
	'export' => array(
		'format' => 2,
		'selectFields' => false,
		'delimiter' => ',',
		'selectDelimiter' => false,
		'exportFileTypes' => array(
			'excel' => true,
			'word' => true,
			'csv' => true,
			'xml' => false 
		) 
	) 
);
			$pageArray = array(
	'id' => 'export',
	'type' => 'export',
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
			'modelId' => 'export-header',
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
						'export_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'export-grid',
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
						'export_field',
						'export_field1',
						'export_field2',
						'export_field3',
						'export_field4',
						'export_field5',
						'export_field6',
						'export_field7',
						'export_field8',
						'export_field9' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'footer' => array(
			'modelId' => 'export-footer',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c1' 
						),
						array(
							'cell' => 'c2' 
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
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'export_export',
						'export_cancel' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'export_header' => array(
			'type' => 'export_header' 
		),
		'export_export' => array(
			'type' => 'export_export' 
		),
		'export_cancel' => array(
			'type' => 'export_cancel' 
		),
		'export_field' => array(
			'field' => 'ABE_REQ_UID',
			'type' => 'export_field' 
		),
		'export_field1' => array(
			'field' => 'ABE_UID',
			'type' => 'export_field' 
		),
		'export_field2' => array(
			'field' => 'APP_UID',
			'type' => 'export_field' 
		),
		'export_field3' => array(
			'field' => 'DEL_INDEX',
			'type' => 'export_field' 
		),
		'export_field4' => array(
			'field' => 'ABE_REQ_SENT_TO',
			'type' => 'export_field' 
		),
		'export_field5' => array(
			'field' => 'ABE_REQ_SUBJECT',
			'type' => 'export_field' 
		),
		'export_field6' => array(
			'field' => 'ABE_REQ_BODY',
			'type' => 'export_field' 
		),
		'export_field7' => array(
			'field' => 'ABE_REQ_DATE',
			'type' => 'export_field' 
		),
		'export_field8' => array(
			'field' => 'ABE_REQ_STATUS',
			'type' => 'export_field' 
		),
		'export_field9' => array(
			'field' => 'ABE_REQ_ANSWERED',
			'type' => 'export_field' 
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
		 
	),
	'exportFormat' => 2,
	'exportDelimiter' => ',',
	'exportSelectDelimiter' => false,
	'exportSelectFields' => false 
);
		?>