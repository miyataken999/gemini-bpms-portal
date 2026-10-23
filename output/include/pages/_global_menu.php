<?php
			$optionsArray = array(
	'welcome' => array(
		'welcomePageSkip' => false,
		'welcomeItems' => array(
			'logo' => array(
				'menutItem' => false 
			),
			'menu' => array(
				'menutItem' => false 
			),
			'welcome_item' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'ABE_CONFIGURATION',
				'page' => 'list' 
			),
			'welcome_item1' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'ABE_REQUESTS',
				'page' => 'list' 
			),
			'welcome_item2' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'ABE_RESPONSES',
				'page' => 'list' 
			),
			'welcome_item3' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'DIM_TIME_DELEGATE',
				'page' => 'list' 
			),
			'welcome_item4' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'DYNAFORM',
				'page' => 'list' 
			),
			'welcome_item5' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'USERS',
				'page' => 'list' 
			),
			'welcome_item6' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'TASK_USER',
				'page' => 'list' 
			),
			'welcome_item7' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'TASK',
				'page' => 'list' 
			),
			'welcome_item8' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
				'page' => 'list' 
			),
			'welcome_item9' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'APP_CACHE_VIEW',
				'page' => 'list' 
			),
			'welcome_item10' => array(
				'menutItem' => true,
				'group' => false,
				'linkType' => 0,
				'items' => null,
				'table' => 'APP_DELAY',
				'page' => 'list' 
			) 
		) 
	),
	'fields' => array(
		'gridFields' => array( 
			 
		),
		'searchRequiredFields' => array( 
			 
		),
		'searchPanelFields' => array( 
			 
		),
		'fieldItems' => array(
			 
		) 
	),
	'layoutHelper' => array(
		'formItems' => array(
			'formItems' => array(
				'above-grid' => array( 
					 
				),
				'supertop' => array( 
					'logo',
					'menu' 
				),
				'grid' => array( 
					'welcome_item',
					'welcome_item1',
					'welcome_item2',
					'welcome_item3',
					'welcome_item4',
					'welcome_item5',
					'welcome_item6',
					'welcome_item7',
					'welcome_item8',
					'welcome_item9',
					'welcome_item10' 
				) 
			),
			'formXtTags' => array(
				'above-grid' => array( 
					 
				) 
			),
			'itemForms' => array(
				'logo' => 'supertop',
				'menu' => 'supertop',
				'welcome_item' => 'grid',
				'welcome_item1' => 'grid',
				'welcome_item2' => 'grid',
				'welcome_item3' => 'grid',
				'welcome_item4' => 'grid',
				'welcome_item5' => 'grid',
				'welcome_item6' => 'grid',
				'welcome_item7' => 'grid',
				'welcome_item8' => 'grid',
				'welcome_item9' => 'grid',
				'welcome_item10' => 'grid' 
			),
			'itemLocations' => array(
				 
			),
			'itemVisiblity' => array(
				'menu' => 3 
			) 
		),
		'itemsByType' => array(
			'logo' => array( 
				'logo' 
			),
			'menu' => array( 
				'menu' 
			),
			'welcome_item' => array( 
				'welcome_item',
				'welcome_item1',
				'welcome_item2',
				'welcome_item3',
				'welcome_item4',
				'welcome_item5',
				'welcome_item6',
				'welcome_item7',
				'welcome_item8',
				'welcome_item9',
				'welcome_item10' 
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
			array(
				'id' => 'main',
				'horizontal' => true 
			) 
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
	'id' => 'menu',
	'type' => 'menu',
	'layoutId' => 'topbar',
	'disabled' => false,
	'default' => 0,
	'forms' => array(
		'above-grid' => array(
			'modelId' => 'empty-above-grid',
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
		'supertop' => array(
			'modelId' => 'menu-topbar-menu',
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
						'logo',
						'menu' 
					) 
				),
				'c2' => array(
					'model' => 'c2',
					'items' => array( 
						 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		),
		'grid' => array(
			'modelId' => 'welcome',
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
						'welcome_item',
						'welcome_item1',
						'welcome_item2',
						'welcome_item3',
						'welcome_item4',
						'welcome_item5',
						'welcome_item6',
						'welcome_item7',
						'welcome_item8',
						'welcome_item9',
						'welcome_item10' 
					) 
				) 
			),
			'deferredItems' => array( 
				 
			),
			'recsPerRow' => 1 
		) 
	),
	'items' => array(
		'logo' => array(
			'type' => 'logo' 
		),
		'menu' => array(
			'type' => 'menu' 
		),
		'welcome_item' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'ABE_CONFIGURATION',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'ABE_CONFIGURATION',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'earphone' 
			),
			'linkComments' => array(
				'text' => 'ABE CONFIGURATION description',
				'type' => 0 
			),
			'background' => '#00c2c5',
			'linkType' => 0 
		),
		'welcome_item1' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'ABE_REQUESTS',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'ABE_REQUESTS',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'earphone' 
			),
			'linkComments' => array(
				'text' => 'ABE REQUESTS description',
				'type' => 0 
			),
			'background' => '#e07878',
			'linkType' => 0 
		),
		'welcome_item2' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'ABE_RESPONSES',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'ABE_RESPONSES',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'earphone' 
			),
			'linkComments' => array(
				'text' => 'ABE RESPONSES description',
				'type' => 0 
			),
			'background' => '#00c2c5',
			'linkType' => 0 
		),
		'welcome_item3' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'DIM_TIME_DELEGATE',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'DIM_TIME_DELEGATE',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'calendar' 
			),
			'linkComments' => array(
				'text' => 'DIM TIME DELEGATE description',
				'type' => 0 
			),
			'background' => '#00c2c5',
			'linkType' => 0 
		),
		'welcome_item4' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'DYNAFORM',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'DYNAFORM',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'star' 
			),
			'linkComments' => array(
				'text' => 'DYNAFORM description',
				'type' => 0 
			),
			'background' => '#6b8e23',
			'linkType' => 0 
		),
		'welcome_item5' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'USERS',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'USERS',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'leaf' 
			),
			'background' => '#edca00',
			'linkType' => 0 
		),
		'welcome_item6' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'TASK_USER',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'TASK_USER',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'camera' 
			),
			'background' => '#6b8e23',
			'linkType' => 0 
		),
		'welcome_item7' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'TASK',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'TASK',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'send' 
			),
			'background' => '#4169e1',
			'linkType' => 0 
		),
		'welcome_item8' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
				'type' => 6 
			),
			'linkIcon' => array(
				'glyph' => 'fire' 
			),
			'background' => '#2f4f4f',
			'linkType' => 0 
		),
		'welcome_item9' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'APP_CACHE_VIEW',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'APP_CACHE_VIEW',
				'type' => 6 
			),
			'background' => '#5f9ea0',
			'linkType' => 0 
		),
		'welcome_item10' => array(
			'type' => 'welcome_item',
			'linkUrl' => '',
			'linkTable' => 'APP_DELAY',
			'linkPage' => 'list',
			'linkText' => array(
				'table' => 'APP_DELAY',
				'type' => 6 
			),
			'background' => '#7b68ee',
			'linkType' => 0 
		) 
	),
	'version' => 13,
	'imageItem' => array(
		'type' => 'page_image' 
	),
	'imageBgColor' => '#f2f2f2',
	'controlsBgColor' => 'white',
	'imagePosition' => 'right',
	'welcomePageStay' => true,
	'listTotals' => 1,
	'title' => array(
		 
	) 
);
		?>