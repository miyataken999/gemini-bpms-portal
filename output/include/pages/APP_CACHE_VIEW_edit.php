<?php
			$optionsArray = array(
	'captcha' => array(
		'captcha' => false 
	),
	'fields' => array(
		'gridFields' => array( 
			'APP_UID',
			'DEL_INDEX',
			'DEL_LAST_INDEX',
			'APP_NUMBER',
			'APP_STATUS',
			'USR_UID',
			'PREVIOUS_USR_UID',
			'TAS_UID',
			'PRO_UID',
			'DEL_DELEGATE_DATE',
			'DEL_INIT_DATE',
			'DEL_FINISH_DATE',
			'DEL_TASK_DUE_DATE',
			'DEL_RISK_DATE',
			'DEL_THREAD_STATUS',
			'APP_THREAD_STATUS',
			'APP_TITLE',
			'APP_PRO_TITLE',
			'APP_TAS_TITLE',
			'APP_CURRENT_USER',
			'APP_DEL_PREVIOUS_USER',
			'DEL_PRIORITY',
			'DEL_DURATION',
			'DEL_QUEUE_DURATION',
			'DEL_DELAY_DURATION',
			'DEL_STARTED',
			'DEL_FINISHED',
			'DEL_DELAYED',
			'APP_CREATE_DATE',
			'APP_FINISH_DATE',
			'APP_UPDATE_DATE',
			'APP_OVERDUE_PERCENTAGE' 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'updateOnEditFields' => array( 
			 
		),
		'fieldItems' => array(
			'APP_UID' => array( 
				'integrated_edit_field' 
			),
			'DEL_INDEX' => array( 
				'integrated_edit_field1' 
			),
			'DEL_LAST_INDEX' => array( 
				'integrated_edit_field2' 
			),
			'APP_NUMBER' => array( 
				'integrated_edit_field3' 
			),
			'APP_STATUS' => array( 
				'integrated_edit_field4' 
			),
			'USR_UID' => array( 
				'integrated_edit_field5' 
			),
			'PREVIOUS_USR_UID' => array( 
				'integrated_edit_field6' 
			),
			'TAS_UID' => array( 
				'integrated_edit_field7' 
			),
			'PRO_UID' => array( 
				'integrated_edit_field8' 
			),
			'DEL_DELEGATE_DATE' => array( 
				'integrated_edit_field9' 
			),
			'DEL_INIT_DATE' => array( 
				'integrated_edit_field10' 
			),
			'DEL_FINISH_DATE' => array( 
				'integrated_edit_field11' 
			),
			'DEL_TASK_DUE_DATE' => array( 
				'integrated_edit_field12' 
			),
			'DEL_RISK_DATE' => array( 
				'integrated_edit_field13' 
			),
			'DEL_THREAD_STATUS' => array( 
				'integrated_edit_field14' 
			),
			'APP_THREAD_STATUS' => array( 
				'integrated_edit_field15' 
			),
			'APP_TITLE' => array( 
				'integrated_edit_field16' 
			),
			'APP_PRO_TITLE' => array( 
				'integrated_edit_field17' 
			),
			'APP_TAS_TITLE' => array( 
				'integrated_edit_field18' 
			),
			'APP_CURRENT_USER' => array( 
				'integrated_edit_field19' 
			),
			'APP_DEL_PREVIOUS_USER' => array( 
				'integrated_edit_field20' 
			),
			'DEL_PRIORITY' => array( 
				'integrated_edit_field21' 
			),
			'DEL_DURATION' => array( 
				'integrated_edit_field22' 
			),
			'DEL_QUEUE_DURATION' => array( 
				'integrated_edit_field23' 
			),
			'DEL_DELAY_DURATION' => array( 
				'integrated_edit_field24' 
			),
			'DEL_STARTED' => array( 
				'integrated_edit_field25' 
			),
			'DEL_FINISHED' => array( 
				'integrated_edit_field26' 
			),
			'DEL_DELAYED' => array( 
				'integrated_edit_field27' 
			),
			'APP_CREATE_DATE' => array( 
				'integrated_edit_field28' 
			),
			'APP_FINISH_DATE' => array( 
				'integrated_edit_field29' 
			),
			'APP_UPDATE_DATE' => array( 
				'integrated_edit_field30' 
			),
			'APP_OVERDUE_PERCENTAGE' => array( 
				'integrated_edit_field31' 
			) 
		) 
	),
	'pageLinks' => array(
		'edit' => false,
		'add' => false,
		'view' => true,
		'print' => false 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					'edit_message' 
				),
				'below-grid' => array( 
					'edit_save',
					'edit_back_list',
					'edit_close',
					'hamburger' 
				),
				'top' => array( 
					'edit_header' 
				),
				'grid' => array( 
					'integrated_edit_field',
					'integrated_edit_field1',
					'integrated_edit_field2',
					'integrated_edit_field3',
					'integrated_edit_field4',
					'integrated_edit_field5',
					'integrated_edit_field6',
					'integrated_edit_field7',
					'integrated_edit_field8',
					'integrated_edit_field9',
					'integrated_edit_field10',
					'integrated_edit_field11',
					'integrated_edit_field12',
					'integrated_edit_field13',
					'integrated_edit_field14',
					'integrated_edit_field15',
					'integrated_edit_field16',
					'integrated_edit_field17',
					'integrated_edit_field18',
					'integrated_edit_field19',
					'integrated_edit_field20',
					'integrated_edit_field21',
					'integrated_edit_field22',
					'integrated_edit_field23',
					'integrated_edit_field24',
					'integrated_edit_field25',
					'integrated_edit_field26',
					'integrated_edit_field27',
					'integrated_edit_field28',
					'integrated_edit_field29',
					'integrated_edit_field30',
					'integrated_edit_field31' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					'message_block' 
				) 
			),
			'itemForms' => array(
				'edit_message' => 'above-grid',
				'edit_save' => 'below-grid',
				'edit_back_list' => 'below-grid',
				'edit_close' => 'below-grid',
				'hamburger' => 'below-grid',
				'edit_header' => 'top',
				'integrated_edit_field' => 'grid',
				'integrated_edit_field1' => 'grid',
				'integrated_edit_field2' => 'grid',
				'integrated_edit_field3' => 'grid',
				'integrated_edit_field4' => 'grid',
				'integrated_edit_field5' => 'grid',
				'integrated_edit_field6' => 'grid',
				'integrated_edit_field7' => 'grid',
				'integrated_edit_field8' => 'grid',
				'integrated_edit_field9' => 'grid',
				'integrated_edit_field10' => 'grid',
				'integrated_edit_field11' => 'grid',
				'integrated_edit_field12' => 'grid',
				'integrated_edit_field13' => 'grid',
				'integrated_edit_field14' => 'grid',
				'integrated_edit_field15' => 'grid',
				'integrated_edit_field16' => 'grid',
				'integrated_edit_field17' => 'grid',
				'integrated_edit_field18' => 'grid',
				'integrated_edit_field19' => 'grid',
				'integrated_edit_field20' => 'grid',
				'integrated_edit_field21' => 'grid',
				'integrated_edit_field22' => 'grid',
				'integrated_edit_field23' => 'grid',
				'integrated_edit_field24' => 'grid',
				'integrated_edit_field25' => 'grid',
				'integrated_edit_field26' => 'grid',
				'integrated_edit_field27' => 'grid',
				'integrated_edit_field28' => 'grid',
				'integrated_edit_field29' => 'grid',
				'integrated_edit_field30' => 'grid',
				'integrated_edit_field31' => 'grid' 
			),
			'itemLocations' => array(
				'integrated_edit_field' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field1' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field2' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field3' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field4' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field5' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field6' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field7' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field8' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field9' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field10' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field11' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field12' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field13' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field14' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field15' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field16' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field17' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field18' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field19' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field20' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field21' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field22' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field23' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field24' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field25' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field26' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field27' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field28' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field29' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field30' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				),
				'integrated_edit_field31' => array(
					'location' => 'grid',
					'cellId' => 'c3' 
				) 
			),
			'itemVisiblity' => array(
				 
			) 
		),
		'itemsByType' => array(
			'edit_header' => array( 
				'edit_header' 
			),
			'hamburger' => array( 
				'hamburger' 
			),
			'edit_reset' => array( 
				'edit_reset' 
			),
			'edit_message' => array( 
				'edit_message' 
			),
			'edit_save' => array( 
				'edit_save' 
			),
			'edit_back_list' => array( 
				'edit_back_list' 
			),
			'edit_close' => array( 
				'edit_close' 
			),
			'integrated_edit_field' => array( 
				'integrated_edit_field',
				'integrated_edit_field1',
				'integrated_edit_field2',
				'integrated_edit_field3',
				'integrated_edit_field4',
				'integrated_edit_field5',
				'integrated_edit_field6',
				'integrated_edit_field7',
				'integrated_edit_field8',
				'integrated_edit_field9',
				'integrated_edit_field10',
				'integrated_edit_field11',
				'integrated_edit_field12',
				'integrated_edit_field13',
				'integrated_edit_field14',
				'integrated_edit_field15',
				'integrated_edit_field16',
				'integrated_edit_field17',
				'integrated_edit_field18',
				'integrated_edit_field19',
				'integrated_edit_field20',
				'integrated_edit_field21',
				'integrated_edit_field22',
				'integrated_edit_field23',
				'integrated_edit_field24',
				'integrated_edit_field25',
				'integrated_edit_field26',
				'integrated_edit_field27',
				'integrated_edit_field28',
				'integrated_edit_field29',
				'integrated_edit_field30',
				'integrated_edit_field31' 
			),
			'edit_view' => array( 
				'edit_view' 
			) 
		),
		'cellMaps' => array(
			'grid' => array(
				'cells' => array(
					'c3' => array(
						'cols' => array( 
							0 
						),
						'rows' => array( 
							0 
						),
						'tags' => array( 
							 
						),
						'items' => array( 
							'integrated_edit_field',
							'integrated_edit_field1',
							'integrated_edit_field2',
							'integrated_edit_field3',
							'integrated_edit_field4',
							'integrated_edit_field5',
							'integrated_edit_field6',
							'integrated_edit_field7',
							'integrated_edit_field8',
							'integrated_edit_field9',
							'integrated_edit_field10',
							'integrated_edit_field11',
							'integrated_edit_field12',
							'integrated_edit_field13',
							'integrated_edit_field14',
							'integrated_edit_field15',
							'integrated_edit_field16',
							'integrated_edit_field17',
							'integrated_edit_field18',
							'integrated_edit_field19',
							'integrated_edit_field20',
							'integrated_edit_field21',
							'integrated_edit_field22',
							'integrated_edit_field23',
							'integrated_edit_field24',
							'integrated_edit_field25',
							'integrated_edit_field26',
							'integrated_edit_field27',
							'integrated_edit_field28',
							'integrated_edit_field29',
							'integrated_edit_field30',
							'integrated_edit_field31' 
						),
						'fixedAtServer' => true,
						'fixedAtClient' => false 
					) 
				),
				'width' => 1,
				'height' => 1 
			) 
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
	'misc' => array(
		'type' => 'edit',
		'breadcrumb' => false,
		'nextPrev' => false 
	),
	'events' => array(
		'maps' => array( 
			 
		),
		'mapsData' => array(
			 
		),
		'buttons' => array( 
			 
		) 
	),
	'edit' => array(
		'updateSelected' => false 
	) 
);
			$pageArray = array(
	'id' => 'edit',
	'type' => 'edit',
	'layoutId' => 'nomenu',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'edit-above-grid',
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
						'edit_message' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'below-grid' => array(
			'modelId' => 'edit-below-grid',
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
						'edit_save',
						'edit_back_list',
						'edit_close' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						'hamburger' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'top' => array(
			'modelId' => 'edit-header',
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
						'edit_header' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'simple-edit',
			'grid' => array( 
				array(
					'cells' => array( 
						array(
							'cell' => 'c3' 
						) 
					),
					'section' => '' 
				) 
			),
			'cells' => array(
				'c3' => array(
					'model' => 'c3',
					'items' => array( 
						'integrated_edit_field',
						'integrated_edit_field1',
						'integrated_edit_field2',
						'integrated_edit_field3',
						'integrated_edit_field4',
						'integrated_edit_field5',
						'integrated_edit_field6',
						'integrated_edit_field7',
						'integrated_edit_field8',
						'integrated_edit_field9',
						'integrated_edit_field10',
						'integrated_edit_field11',
						'integrated_edit_field12',
						'integrated_edit_field13',
						'integrated_edit_field14',
						'integrated_edit_field15',
						'integrated_edit_field16',
						'integrated_edit_field17',
						'integrated_edit_field18',
						'integrated_edit_field19',
						'integrated_edit_field20',
						'integrated_edit_field21',
						'integrated_edit_field22',
						'integrated_edit_field23',
						'integrated_edit_field24',
						'integrated_edit_field25',
						'integrated_edit_field26',
						'integrated_edit_field27',
						'integrated_edit_field28',
						'integrated_edit_field29',
						'integrated_edit_field30',
						'integrated_edit_field31' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'columnCount' => 1,
			'inlineLabels' => false,
			'separateLabels' => false 
		) 
	),
	'items' => array(
		'edit_header' => array(
			'type' => 'edit_header' 
		),
		'hamburger' => array(
			'type' => 'hamburger',
			'items' => array( 
				'edit_reset',
				'edit_view' 
			) 
		),
		'edit_reset' => array(
			'type' => 'edit_reset' 
		),
		'edit_message' => array(
			'type' => 'edit_message' 
		),
		'edit_save' => array(
			'type' => 'edit_save' 
		),
		'edit_back_list' => array(
			'type' => 'edit_back_list' 
		),
		'edit_close' => array(
			'type' => 'edit_close' 
		),
		'integrated_edit_field' => array(
			'field' => 'APP_UID',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field1' => array(
			'field' => 'DEL_INDEX',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field2' => array(
			'field' => 'DEL_LAST_INDEX',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field3' => array(
			'field' => 'APP_NUMBER',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field4' => array(
			'field' => 'APP_STATUS',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field5' => array(
			'field' => 'USR_UID',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field6' => array(
			'field' => 'PREVIOUS_USR_UID',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field7' => array(
			'field' => 'TAS_UID',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field8' => array(
			'field' => 'PRO_UID',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field9' => array(
			'field' => 'DEL_DELEGATE_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field10' => array(
			'field' => 'DEL_INIT_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field11' => array(
			'field' => 'DEL_FINISH_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field12' => array(
			'field' => 'DEL_TASK_DUE_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field13' => array(
			'field' => 'DEL_RISK_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field14' => array(
			'field' => 'DEL_THREAD_STATUS',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field15' => array(
			'field' => 'APP_THREAD_STATUS',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field16' => array(
			'field' => 'APP_TITLE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field17' => array(
			'field' => 'APP_PRO_TITLE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field18' => array(
			'field' => 'APP_TAS_TITLE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field19' => array(
			'field' => 'APP_CURRENT_USER',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field20' => array(
			'field' => 'APP_DEL_PREVIOUS_USER',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field21' => array(
			'field' => 'DEL_PRIORITY',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field22' => array(
			'field' => 'DEL_DURATION',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field23' => array(
			'field' => 'DEL_QUEUE_DURATION',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field24' => array(
			'field' => 'DEL_DELAY_DURATION',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field25' => array(
			'field' => 'DEL_STARTED',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field26' => array(
			'field' => 'DEL_FINISHED',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field27' => array(
			'field' => 'DEL_DELAYED',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field28' => array(
			'field' => 'APP_CREATE_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field29' => array(
			'field' => 'APP_FINISH_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field30' => array(
			'field' => 'APP_UPDATE_DATE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'integrated_edit_field31' => array(
			'field' => 'APP_OVERDUE_PERCENTAGE',
			'type' => 'integrated_edit_field',
			'orientation' => 0 
		),
		'edit_view' => array(
			'type' => 'edit_view' 
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