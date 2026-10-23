<?php
global $runnerTableSettings;
$runnerTableSettings['TASK'] = array(
	'name' => 'TASK',
	'shortName' => 'TASK',
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
	'afterEditDetails' => 'TASK',
	'afterAddDetail' => 'TASK',
	'detailsBadgeColor' => '4169e1',
	'sql' => 'SELECT
	PRO_UID,
	TAS_UID,
	TAS_ID,
	TAS_TITLE,
	TAS_DESCRIPTION,
	TAS_DEF_TITLE,
	TAS_DEF_SUBJECT_MESSAGE,
	TAS_DEF_PROC_CODE,
	TAS_DEF_MESSAGE,
	TAS_DEF_DESCRIPTION,
	TAS_TYPE,
	TAS_DURATION,
	TAS_DELAY_TYPE,
	TAS_TEMPORIZER,
	TAS_TYPE_DAY,
	TAS_TIMEUNIT,
	TAS_ALERT,
	TAS_PRIORITY_VARIABLE,
	TAS_ASSIGN_TYPE,
	TAS_ASSIGN_VARIABLE,
	TAS_GROUP_VARIABLE,
	TAS_MI_INSTANCE_VARIABLE,
	TAS_MI_COMPLETE_VARIABLE,
	TAS_ASSIGN_LOCATION,
	TAS_ASSIGN_LOCATION_ADHOC,
	TAS_TRANSFER_FLY,
	TAS_LAST_ASSIGNED,
	TAS_USER,
	TAS_CAN_UPLOAD,
	TAS_VIEW_UPLOAD,
	TAS_VIEW_ADDITIONAL_DOCUMENTATION,
	TAS_CAN_CANCEL,
	TAS_OWNER_APP,
	STG_UID,
	TAS_CAN_PAUSE,
	TAS_CAN_SEND_MESSAGE,
	TAS_CAN_DELETE_DOCS,
	TAS_SELF_SERVICE,
	TAS_START,
	TAS_TO_LAST_USER,
	TAS_SEND_LAST_EMAIL,
	TAS_DERIVATION,
	TAS_POSX,
	TAS_POSY,
	TAS_WIDTH,
	TAS_HEIGHT,
	TAS_COLOR,
	TAS_EVN_UID,
	TAS_BOUNDARY,
	TAS_DERIVATION_SCREEN_TPL,
	TAS_SELFSERVICE_TIMEOUT,
	TAS_SELFSERVICE_TIME,
	TAS_SELFSERVICE_TIME_UNIT,
	TAS_SELFSERVICE_TRIGGER_UID,
	TAS_SELFSERVICE_EXECUTION,
	TAS_NOT_EMAIL_FROM_FORMAT,
	TAS_OFFLINE,
	TAS_EMAIL_SERVER_UID,
	TAS_AUTO_ROOT,
	TAS_RECEIVE_SERVER_UID,
	TAS_RECEIVE_LAST_EMAIL,
	TAS_RECEIVE_EMAIL_FROM_FORMAT,
	TAS_RECEIVE_MESSAGE_TYPE,
	TAS_RECEIVE_MESSAGE_TEMPLATE,
	TAS_RECEIVE_SUBJECT_MESSAGE,
	TAS_RECEIVE_MESSAGE
FROM
	TASK',
	'keyFields' => array( 
		'TAS_UID' 
	),
	'deviceHideFields' => array(
		'1' => array( 
			 
		),
		'5' => array( 
			 
		) 
	),
	'fields' => array(
		'PRO_UID' => array(
			'name' => 'PRO_UID',
			'goodName' => 'PRO_UID',
			'strField' => 'PRO_UID',
			'index' => 1,
			'sqlExpression' => 'PRO_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_UID' => array(
			'name' => 'TAS_UID',
			'goodName' => 'TAS_UID',
			'strField' => 'TAS_UID',
			'index' => 2,
			'sqlExpression' => 'TAS_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_ID' => array(
			'name' => 'TAS_ID',
			'goodName' => 'TAS_ID',
			'strField' => 'TAS_ID',
			'index' => 3,
			'type' => 3,
			'autoinc' => true,
			'sqlExpression' => 'TAS_ID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TITLE' => array(
			'name' => 'TAS_TITLE',
			'goodName' => 'TAS_TITLE',
			'strField' => 'TAS_TITLE',
			'index' => 4,
			'type' => 201,
			'sqlExpression' => 'TAS_TITLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DESCRIPTION' => array(
			'name' => 'TAS_DESCRIPTION',
			'goodName' => 'TAS_DESCRIPTION',
			'strField' => 'TAS_DESCRIPTION',
			'index' => 5,
			'type' => 201,
			'sqlExpression' => 'TAS_DESCRIPTION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DEF_TITLE' => array(
			'name' => 'TAS_DEF_TITLE',
			'goodName' => 'TAS_DEF_TITLE',
			'strField' => 'TAS_DEF_TITLE',
			'index' => 6,
			'type' => 201,
			'sqlExpression' => 'TAS_DEF_TITLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DEF_SUBJECT_MESSAGE' => array(
			'name' => 'TAS_DEF_SUBJECT_MESSAGE',
			'goodName' => 'TAS_DEF_SUBJECT_MESSAGE',
			'strField' => 'TAS_DEF_SUBJECT_MESSAGE',
			'index' => 7,
			'type' => 201,
			'sqlExpression' => 'TAS_DEF_SUBJECT_MESSAGE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DEF_PROC_CODE' => array(
			'name' => 'TAS_DEF_PROC_CODE',
			'goodName' => 'TAS_DEF_PROC_CODE',
			'strField' => 'TAS_DEF_PROC_CODE',
			'index' => 8,
			'type' => 201,
			'sqlExpression' => 'TAS_DEF_PROC_CODE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DEF_MESSAGE' => array(
			'name' => 'TAS_DEF_MESSAGE',
			'goodName' => 'TAS_DEF_MESSAGE',
			'strField' => 'TAS_DEF_MESSAGE',
			'index' => 9,
			'type' => 201,
			'sqlExpression' => 'TAS_DEF_MESSAGE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DEF_DESCRIPTION' => array(
			'name' => 'TAS_DEF_DESCRIPTION',
			'goodName' => 'TAS_DEF_DESCRIPTION',
			'strField' => 'TAS_DEF_DESCRIPTION',
			'index' => 10,
			'type' => 201,
			'sqlExpression' => 'TAS_DEF_DESCRIPTION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TYPE' => array(
			'name' => 'TAS_TYPE',
			'goodName' => 'TAS_TYPE',
			'strField' => 'TAS_TYPE',
			'index' => 11,
			'sqlExpression' => 'TAS_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DURATION' => array(
			'name' => 'TAS_DURATION',
			'goodName' => 'TAS_DURATION',
			'strField' => 'TAS_DURATION',
			'index' => 12,
			'type' => 5,
			'sqlExpression' => 'TAS_DURATION',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DELAY_TYPE' => array(
			'name' => 'TAS_DELAY_TYPE',
			'goodName' => 'TAS_DELAY_TYPE',
			'strField' => 'TAS_DELAY_TYPE',
			'index' => 13,
			'sqlExpression' => 'TAS_DELAY_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TEMPORIZER' => array(
			'name' => 'TAS_TEMPORIZER',
			'goodName' => 'TAS_TEMPORIZER',
			'strField' => 'TAS_TEMPORIZER',
			'index' => 14,
			'type' => 5,
			'sqlExpression' => 'TAS_TEMPORIZER',
			'viewFormats' => array(
				'view' => array(
					'format' => 'Number' 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TYPE_DAY' => array(
			'name' => 'TAS_TYPE_DAY',
			'goodName' => 'TAS_TYPE_DAY',
			'strField' => 'TAS_TYPE_DAY',
			'index' => 15,
			'sqlExpression' => 'TAS_TYPE_DAY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TIMEUNIT' => array(
			'name' => 'TAS_TIMEUNIT',
			'goodName' => 'TAS_TIMEUNIT',
			'strField' => 'TAS_TIMEUNIT',
			'index' => 16,
			'sqlExpression' => 'TAS_TIMEUNIT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_ALERT' => array(
			'name' => 'TAS_ALERT',
			'goodName' => 'TAS_ALERT',
			'strField' => 'TAS_ALERT',
			'index' => 17,
			'sqlExpression' => 'TAS_ALERT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_PRIORITY_VARIABLE' => array(
			'name' => 'TAS_PRIORITY_VARIABLE',
			'goodName' => 'TAS_PRIORITY_VARIABLE',
			'strField' => 'TAS_PRIORITY_VARIABLE',
			'index' => 18,
			'sqlExpression' => 'TAS_PRIORITY_VARIABLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_ASSIGN_TYPE' => array(
			'name' => 'TAS_ASSIGN_TYPE',
			'goodName' => 'TAS_ASSIGN_TYPE',
			'strField' => 'TAS_ASSIGN_TYPE',
			'index' => 19,
			'sqlExpression' => 'TAS_ASSIGN_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_ASSIGN_VARIABLE' => array(
			'name' => 'TAS_ASSIGN_VARIABLE',
			'goodName' => 'TAS_ASSIGN_VARIABLE',
			'strField' => 'TAS_ASSIGN_VARIABLE',
			'index' => 20,
			'sqlExpression' => 'TAS_ASSIGN_VARIABLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_GROUP_VARIABLE' => array(
			'name' => 'TAS_GROUP_VARIABLE',
			'goodName' => 'TAS_GROUP_VARIABLE',
			'strField' => 'TAS_GROUP_VARIABLE',
			'index' => 21,
			'sqlExpression' => 'TAS_GROUP_VARIABLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_MI_INSTANCE_VARIABLE' => array(
			'name' => 'TAS_MI_INSTANCE_VARIABLE',
			'goodName' => 'TAS_MI_INSTANCE_VARIABLE',
			'strField' => 'TAS_MI_INSTANCE_VARIABLE',
			'index' => 22,
			'sqlExpression' => 'TAS_MI_INSTANCE_VARIABLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_MI_COMPLETE_VARIABLE' => array(
			'name' => 'TAS_MI_COMPLETE_VARIABLE',
			'goodName' => 'TAS_MI_COMPLETE_VARIABLE',
			'strField' => 'TAS_MI_COMPLETE_VARIABLE',
			'index' => 23,
			'sqlExpression' => 'TAS_MI_COMPLETE_VARIABLE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_ASSIGN_LOCATION' => array(
			'name' => 'TAS_ASSIGN_LOCATION',
			'goodName' => 'TAS_ASSIGN_LOCATION',
			'strField' => 'TAS_ASSIGN_LOCATION',
			'index' => 24,
			'sqlExpression' => 'TAS_ASSIGN_LOCATION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_ASSIGN_LOCATION_ADHOC' => array(
			'name' => 'TAS_ASSIGN_LOCATION_ADHOC',
			'goodName' => 'TAS_ASSIGN_LOCATION_ADHOC',
			'strField' => 'TAS_ASSIGN_LOCATION_ADHOC',
			'index' => 25,
			'sqlExpression' => 'TAS_ASSIGN_LOCATION_ADHOC',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TRANSFER_FLY' => array(
			'name' => 'TAS_TRANSFER_FLY',
			'goodName' => 'TAS_TRANSFER_FLY',
			'strField' => 'TAS_TRANSFER_FLY',
			'index' => 26,
			'sqlExpression' => 'TAS_TRANSFER_FLY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_LAST_ASSIGNED' => array(
			'name' => 'TAS_LAST_ASSIGNED',
			'goodName' => 'TAS_LAST_ASSIGNED',
			'strField' => 'TAS_LAST_ASSIGNED',
			'index' => 27,
			'sqlExpression' => 'TAS_LAST_ASSIGNED',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_USER' => array(
			'name' => 'TAS_USER',
			'goodName' => 'TAS_USER',
			'strField' => 'TAS_USER',
			'index' => 28,
			'sqlExpression' => 'TAS_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_CAN_UPLOAD' => array(
			'name' => 'TAS_CAN_UPLOAD',
			'goodName' => 'TAS_CAN_UPLOAD',
			'strField' => 'TAS_CAN_UPLOAD',
			'index' => 29,
			'sqlExpression' => 'TAS_CAN_UPLOAD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_VIEW_UPLOAD' => array(
			'name' => 'TAS_VIEW_UPLOAD',
			'goodName' => 'TAS_VIEW_UPLOAD',
			'strField' => 'TAS_VIEW_UPLOAD',
			'index' => 30,
			'sqlExpression' => 'TAS_VIEW_UPLOAD',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_VIEW_ADDITIONAL_DOCUMENTATION' => array(
			'name' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
			'goodName' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
			'strField' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
			'index' => 31,
			'sqlExpression' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_CAN_CANCEL' => array(
			'name' => 'TAS_CAN_CANCEL',
			'goodName' => 'TAS_CAN_CANCEL',
			'strField' => 'TAS_CAN_CANCEL',
			'index' => 32,
			'sqlExpression' => 'TAS_CAN_CANCEL',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_OWNER_APP' => array(
			'name' => 'TAS_OWNER_APP',
			'goodName' => 'TAS_OWNER_APP',
			'strField' => 'TAS_OWNER_APP',
			'index' => 33,
			'sqlExpression' => 'TAS_OWNER_APP',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'STG_UID' => array(
			'name' => 'STG_UID',
			'goodName' => 'STG_UID',
			'strField' => 'STG_UID',
			'index' => 34,
			'sqlExpression' => 'STG_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_CAN_PAUSE' => array(
			'name' => 'TAS_CAN_PAUSE',
			'goodName' => 'TAS_CAN_PAUSE',
			'strField' => 'TAS_CAN_PAUSE',
			'index' => 35,
			'sqlExpression' => 'TAS_CAN_PAUSE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_CAN_SEND_MESSAGE' => array(
			'name' => 'TAS_CAN_SEND_MESSAGE',
			'goodName' => 'TAS_CAN_SEND_MESSAGE',
			'strField' => 'TAS_CAN_SEND_MESSAGE',
			'index' => 36,
			'sqlExpression' => 'TAS_CAN_SEND_MESSAGE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_CAN_DELETE_DOCS' => array(
			'name' => 'TAS_CAN_DELETE_DOCS',
			'goodName' => 'TAS_CAN_DELETE_DOCS',
			'strField' => 'TAS_CAN_DELETE_DOCS',
			'index' => 37,
			'sqlExpression' => 'TAS_CAN_DELETE_DOCS',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SELF_SERVICE' => array(
			'name' => 'TAS_SELF_SERVICE',
			'goodName' => 'TAS_SELF_SERVICE',
			'strField' => 'TAS_SELF_SERVICE',
			'index' => 38,
			'sqlExpression' => 'TAS_SELF_SERVICE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_START' => array(
			'name' => 'TAS_START',
			'goodName' => 'TAS_START',
			'strField' => 'TAS_START',
			'index' => 39,
			'sqlExpression' => 'TAS_START',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_TO_LAST_USER' => array(
			'name' => 'TAS_TO_LAST_USER',
			'goodName' => 'TAS_TO_LAST_USER',
			'strField' => 'TAS_TO_LAST_USER',
			'index' => 40,
			'sqlExpression' => 'TAS_TO_LAST_USER',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SEND_LAST_EMAIL' => array(
			'name' => 'TAS_SEND_LAST_EMAIL',
			'goodName' => 'TAS_SEND_LAST_EMAIL',
			'strField' => 'TAS_SEND_LAST_EMAIL',
			'index' => 41,
			'sqlExpression' => 'TAS_SEND_LAST_EMAIL',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DERIVATION' => array(
			'name' => 'TAS_DERIVATION',
			'goodName' => 'TAS_DERIVATION',
			'strField' => 'TAS_DERIVATION',
			'index' => 42,
			'sqlExpression' => 'TAS_DERIVATION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_POSX' => array(
			'name' => 'TAS_POSX',
			'goodName' => 'TAS_POSX',
			'strField' => 'TAS_POSX',
			'index' => 43,
			'type' => 3,
			'sqlExpression' => 'TAS_POSX',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_POSY' => array(
			'name' => 'TAS_POSY',
			'goodName' => 'TAS_POSY',
			'strField' => 'TAS_POSY',
			'index' => 44,
			'type' => 3,
			'sqlExpression' => 'TAS_POSY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_WIDTH' => array(
			'name' => 'TAS_WIDTH',
			'goodName' => 'TAS_WIDTH',
			'strField' => 'TAS_WIDTH',
			'index' => 45,
			'type' => 3,
			'sqlExpression' => 'TAS_WIDTH',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_HEIGHT' => array(
			'name' => 'TAS_HEIGHT',
			'goodName' => 'TAS_HEIGHT',
			'strField' => 'TAS_HEIGHT',
			'index' => 46,
			'type' => 3,
			'sqlExpression' => 'TAS_HEIGHT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_COLOR' => array(
			'name' => 'TAS_COLOR',
			'goodName' => 'TAS_COLOR',
			'strField' => 'TAS_COLOR',
			'index' => 47,
			'sqlExpression' => 'TAS_COLOR',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_EVN_UID' => array(
			'name' => 'TAS_EVN_UID',
			'goodName' => 'TAS_EVN_UID',
			'strField' => 'TAS_EVN_UID',
			'index' => 48,
			'sqlExpression' => 'TAS_EVN_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_BOUNDARY' => array(
			'name' => 'TAS_BOUNDARY',
			'goodName' => 'TAS_BOUNDARY',
			'strField' => 'TAS_BOUNDARY',
			'index' => 49,
			'sqlExpression' => 'TAS_BOUNDARY',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_DERIVATION_SCREEN_TPL' => array(
			'name' => 'TAS_DERIVATION_SCREEN_TPL',
			'goodName' => 'TAS_DERIVATION_SCREEN_TPL',
			'strField' => 'TAS_DERIVATION_SCREEN_TPL',
			'index' => 50,
			'sqlExpression' => 'TAS_DERIVATION_SCREEN_TPL',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SELFSERVICE_TIMEOUT' => array(
			'name' => 'TAS_SELFSERVICE_TIMEOUT',
			'goodName' => 'TAS_SELFSERVICE_TIMEOUT',
			'strField' => 'TAS_SELFSERVICE_TIMEOUT',
			'index' => 51,
			'type' => 3,
			'sqlExpression' => 'TAS_SELFSERVICE_TIMEOUT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SELFSERVICE_TIME' => array(
			'name' => 'TAS_SELFSERVICE_TIME',
			'goodName' => 'TAS_SELFSERVICE_TIME',
			'strField' => 'TAS_SELFSERVICE_TIME',
			'index' => 52,
			'type' => 3,
			'sqlExpression' => 'TAS_SELFSERVICE_TIME',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SELFSERVICE_TIME_UNIT' => array(
			'name' => 'TAS_SELFSERVICE_TIME_UNIT',
			'goodName' => 'TAS_SELFSERVICE_TIME_UNIT',
			'strField' => 'TAS_SELFSERVICE_TIME_UNIT',
			'index' => 53,
			'sqlExpression' => 'TAS_SELFSERVICE_TIME_UNIT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SELFSERVICE_TRIGGER_UID' => array(
			'name' => 'TAS_SELFSERVICE_TRIGGER_UID',
			'goodName' => 'TAS_SELFSERVICE_TRIGGER_UID',
			'strField' => 'TAS_SELFSERVICE_TRIGGER_UID',
			'index' => 54,
			'sqlExpression' => 'TAS_SELFSERVICE_TRIGGER_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_SELFSERVICE_EXECUTION' => array(
			'name' => 'TAS_SELFSERVICE_EXECUTION',
			'goodName' => 'TAS_SELFSERVICE_EXECUTION',
			'strField' => 'TAS_SELFSERVICE_EXECUTION',
			'index' => 55,
			'sqlExpression' => 'TAS_SELFSERVICE_EXECUTION',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_NOT_EMAIL_FROM_FORMAT' => array(
			'name' => 'TAS_NOT_EMAIL_FROM_FORMAT',
			'goodName' => 'TAS_NOT_EMAIL_FROM_FORMAT',
			'strField' => 'TAS_NOT_EMAIL_FROM_FORMAT',
			'index' => 56,
			'type' => 3,
			'sqlExpression' => 'TAS_NOT_EMAIL_FROM_FORMAT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_OFFLINE' => array(
			'name' => 'TAS_OFFLINE',
			'goodName' => 'TAS_OFFLINE',
			'strField' => 'TAS_OFFLINE',
			'index' => 57,
			'sqlExpression' => 'TAS_OFFLINE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_EMAIL_SERVER_UID' => array(
			'name' => 'TAS_EMAIL_SERVER_UID',
			'goodName' => 'TAS_EMAIL_SERVER_UID',
			'strField' => 'TAS_EMAIL_SERVER_UID',
			'index' => 58,
			'sqlExpression' => 'TAS_EMAIL_SERVER_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_AUTO_ROOT' => array(
			'name' => 'TAS_AUTO_ROOT',
			'goodName' => 'TAS_AUTO_ROOT',
			'strField' => 'TAS_AUTO_ROOT',
			'index' => 59,
			'sqlExpression' => 'TAS_AUTO_ROOT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_SERVER_UID' => array(
			'name' => 'TAS_RECEIVE_SERVER_UID',
			'goodName' => 'TAS_RECEIVE_SERVER_UID',
			'strField' => 'TAS_RECEIVE_SERVER_UID',
			'index' => 60,
			'sqlExpression' => 'TAS_RECEIVE_SERVER_UID',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_LAST_EMAIL' => array(
			'name' => 'TAS_RECEIVE_LAST_EMAIL',
			'goodName' => 'TAS_RECEIVE_LAST_EMAIL',
			'strField' => 'TAS_RECEIVE_LAST_EMAIL',
			'index' => 61,
			'sqlExpression' => 'TAS_RECEIVE_LAST_EMAIL',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_EMAIL_FROM_FORMAT' => array(
			'name' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT',
			'goodName' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT',
			'strField' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT',
			'index' => 62,
			'type' => 3,
			'sqlExpression' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_MESSAGE_TYPE' => array(
			'name' => 'TAS_RECEIVE_MESSAGE_TYPE',
			'goodName' => 'TAS_RECEIVE_MESSAGE_TYPE',
			'strField' => 'TAS_RECEIVE_MESSAGE_TYPE',
			'index' => 63,
			'sqlExpression' => 'TAS_RECEIVE_MESSAGE_TYPE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_MESSAGE_TEMPLATE' => array(
			'name' => 'TAS_RECEIVE_MESSAGE_TEMPLATE',
			'goodName' => 'TAS_RECEIVE_MESSAGE_TEMPLATE',
			'strField' => 'TAS_RECEIVE_MESSAGE_TEMPLATE',
			'index' => 64,
			'sqlExpression' => 'TAS_RECEIVE_MESSAGE_TEMPLATE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_SUBJECT_MESSAGE' => array(
			'name' => 'TAS_RECEIVE_SUBJECT_MESSAGE',
			'goodName' => 'TAS_RECEIVE_SUBJECT_MESSAGE',
			'strField' => 'TAS_RECEIVE_SUBJECT_MESSAGE',
			'index' => 65,
			'type' => 201,
			'sqlExpression' => 'TAS_RECEIVE_SUBJECT_MESSAGE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		),
		'TAS_RECEIVE_MESSAGE' => array(
			'name' => 'TAS_RECEIVE_MESSAGE',
			'goodName' => 'TAS_RECEIVE_MESSAGE',
			'strField' => 'TAS_RECEIVE_MESSAGE',
			'index' => 66,
			'type' => 201,
			'sqlExpression' => 'TAS_RECEIVE_MESSAGE',
			'viewFormats' => array(
				'view' => array(
					 
				) 
			),
			'editFormats' => array(
				'edit' => array(
					'format' => 'Text area' 
				) 
			),
			'tableName' => 'TASK' 
		) 
	),
	'query' => array(
		'sql' => 'SELECT
	PRO_UID,
	TAS_UID,
	TAS_ID,
	TAS_TITLE,
	TAS_DESCRIPTION,
	TAS_DEF_TITLE,
	TAS_DEF_SUBJECT_MESSAGE,
	TAS_DEF_PROC_CODE,
	TAS_DEF_MESSAGE,
	TAS_DEF_DESCRIPTION,
	TAS_TYPE,
	TAS_DURATION,
	TAS_DELAY_TYPE,
	TAS_TEMPORIZER,
	TAS_TYPE_DAY,
	TAS_TIMEUNIT,
	TAS_ALERT,
	TAS_PRIORITY_VARIABLE,
	TAS_ASSIGN_TYPE,
	TAS_ASSIGN_VARIABLE,
	TAS_GROUP_VARIABLE,
	TAS_MI_INSTANCE_VARIABLE,
	TAS_MI_COMPLETE_VARIABLE,
	TAS_ASSIGN_LOCATION,
	TAS_ASSIGN_LOCATION_ADHOC,
	TAS_TRANSFER_FLY,
	TAS_LAST_ASSIGNED,
	TAS_USER,
	TAS_CAN_UPLOAD,
	TAS_VIEW_UPLOAD,
	TAS_VIEW_ADDITIONAL_DOCUMENTATION,
	TAS_CAN_CANCEL,
	TAS_OWNER_APP,
	STG_UID,
	TAS_CAN_PAUSE,
	TAS_CAN_SEND_MESSAGE,
	TAS_CAN_DELETE_DOCS,
	TAS_SELF_SERVICE,
	TAS_START,
	TAS_TO_LAST_USER,
	TAS_SEND_LAST_EMAIL,
	TAS_DERIVATION,
	TAS_POSX,
	TAS_POSY,
	TAS_WIDTH,
	TAS_HEIGHT,
	TAS_COLOR,
	TAS_EVN_UID,
	TAS_BOUNDARY,
	TAS_DERIVATION_SCREEN_TPL,
	TAS_SELFSERVICE_TIMEOUT,
	TAS_SELFSERVICE_TIME,
	TAS_SELFSERVICE_TIME_UNIT,
	TAS_SELFSERVICE_TRIGGER_UID,
	TAS_SELFSERVICE_EXECUTION,
	TAS_NOT_EMAIL_FROM_FORMAT,
	TAS_OFFLINE,
	TAS_EMAIL_SERVER_UID,
	TAS_AUTO_ROOT,
	TAS_RECEIVE_SERVER_UID,
	TAS_RECEIVE_LAST_EMAIL,
	TAS_RECEIVE_EMAIL_FROM_FORMAT,
	TAS_RECEIVE_MESSAGE_TYPE,
	TAS_RECEIVE_MESSAGE_TEMPLATE,
	TAS_RECEIVE_SUBJECT_MESSAGE,
	TAS_RECEIVE_MESSAGE
FROM
	TASK',
		'parsed' => true,
		'type' => 'SQLQuery',
		'fieldList' => array( 
			array(
				'sql' => 'PRO_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'PRO_UID' 
				),
				'encrypted' => false,
				'columnName' => 'PRO_UID' 
			),
			array(
				'sql' => 'TAS_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_UID' 
			),
			array(
				'sql' => 'TAS_ID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_ID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_ID' 
			),
			array(
				'sql' => 'TAS_TITLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TITLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TITLE' 
			),
			array(
				'sql' => 'TAS_DESCRIPTION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DESCRIPTION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DESCRIPTION' 
			),
			array(
				'sql' => 'TAS_DEF_TITLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DEF_TITLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DEF_TITLE' 
			),
			array(
				'sql' => 'TAS_DEF_SUBJECT_MESSAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DEF_SUBJECT_MESSAGE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DEF_SUBJECT_MESSAGE' 
			),
			array(
				'sql' => 'TAS_DEF_PROC_CODE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DEF_PROC_CODE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DEF_PROC_CODE' 
			),
			array(
				'sql' => 'TAS_DEF_MESSAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DEF_MESSAGE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DEF_MESSAGE' 
			),
			array(
				'sql' => 'TAS_DEF_DESCRIPTION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DEF_DESCRIPTION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DEF_DESCRIPTION' 
			),
			array(
				'sql' => 'TAS_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TYPE' 
			),
			array(
				'sql' => 'TAS_DURATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DURATION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DURATION' 
			),
			array(
				'sql' => 'TAS_DELAY_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DELAY_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DELAY_TYPE' 
			),
			array(
				'sql' => 'TAS_TEMPORIZER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TEMPORIZER' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TEMPORIZER' 
			),
			array(
				'sql' => 'TAS_TYPE_DAY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TYPE_DAY' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TYPE_DAY' 
			),
			array(
				'sql' => 'TAS_TIMEUNIT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TIMEUNIT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TIMEUNIT' 
			),
			array(
				'sql' => 'TAS_ALERT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_ALERT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_ALERT' 
			),
			array(
				'sql' => 'TAS_PRIORITY_VARIABLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_PRIORITY_VARIABLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_PRIORITY_VARIABLE' 
			),
			array(
				'sql' => 'TAS_ASSIGN_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_ASSIGN_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_ASSIGN_TYPE' 
			),
			array(
				'sql' => 'TAS_ASSIGN_VARIABLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_ASSIGN_VARIABLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_ASSIGN_VARIABLE' 
			),
			array(
				'sql' => 'TAS_GROUP_VARIABLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_GROUP_VARIABLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_GROUP_VARIABLE' 
			),
			array(
				'sql' => 'TAS_MI_INSTANCE_VARIABLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_MI_INSTANCE_VARIABLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_MI_INSTANCE_VARIABLE' 
			),
			array(
				'sql' => 'TAS_MI_COMPLETE_VARIABLE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_MI_COMPLETE_VARIABLE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_MI_COMPLETE_VARIABLE' 
			),
			array(
				'sql' => 'TAS_ASSIGN_LOCATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_ASSIGN_LOCATION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_ASSIGN_LOCATION' 
			),
			array(
				'sql' => 'TAS_ASSIGN_LOCATION_ADHOC',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_ASSIGN_LOCATION_ADHOC' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_ASSIGN_LOCATION_ADHOC' 
			),
			array(
				'sql' => 'TAS_TRANSFER_FLY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TRANSFER_FLY' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TRANSFER_FLY' 
			),
			array(
				'sql' => 'TAS_LAST_ASSIGNED',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_LAST_ASSIGNED' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_LAST_ASSIGNED' 
			),
			array(
				'sql' => 'TAS_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_USER' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_USER' 
			),
			array(
				'sql' => 'TAS_CAN_UPLOAD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_CAN_UPLOAD' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_CAN_UPLOAD' 
			),
			array(
				'sql' => 'TAS_VIEW_UPLOAD',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_VIEW_UPLOAD' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_VIEW_UPLOAD' 
			),
			array(
				'sql' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_VIEW_ADDITIONAL_DOCUMENTATION' 
			),
			array(
				'sql' => 'TAS_CAN_CANCEL',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_CAN_CANCEL' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_CAN_CANCEL' 
			),
			array(
				'sql' => 'TAS_OWNER_APP',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_OWNER_APP' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_OWNER_APP' 
			),
			array(
				'sql' => 'STG_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'STG_UID' 
				),
				'encrypted' => false,
				'columnName' => 'STG_UID' 
			),
			array(
				'sql' => 'TAS_CAN_PAUSE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_CAN_PAUSE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_CAN_PAUSE' 
			),
			array(
				'sql' => 'TAS_CAN_SEND_MESSAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_CAN_SEND_MESSAGE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_CAN_SEND_MESSAGE' 
			),
			array(
				'sql' => 'TAS_CAN_DELETE_DOCS',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_CAN_DELETE_DOCS' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_CAN_DELETE_DOCS' 
			),
			array(
				'sql' => 'TAS_SELF_SERVICE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SELF_SERVICE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SELF_SERVICE' 
			),
			array(
				'sql' => 'TAS_START',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_START' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_START' 
			),
			array(
				'sql' => 'TAS_TO_LAST_USER',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_TO_LAST_USER' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_TO_LAST_USER' 
			),
			array(
				'sql' => 'TAS_SEND_LAST_EMAIL',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SEND_LAST_EMAIL' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SEND_LAST_EMAIL' 
			),
			array(
				'sql' => 'TAS_DERIVATION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DERIVATION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DERIVATION' 
			),
			array(
				'sql' => 'TAS_POSX',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_POSX' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_POSX' 
			),
			array(
				'sql' => 'TAS_POSY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_POSY' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_POSY' 
			),
			array(
				'sql' => 'TAS_WIDTH',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_WIDTH' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_WIDTH' 
			),
			array(
				'sql' => 'TAS_HEIGHT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_HEIGHT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_HEIGHT' 
			),
			array(
				'sql' => 'TAS_COLOR',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_COLOR' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_COLOR' 
			),
			array(
				'sql' => 'TAS_EVN_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_EVN_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_EVN_UID' 
			),
			array(
				'sql' => 'TAS_BOUNDARY',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_BOUNDARY' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_BOUNDARY' 
			),
			array(
				'sql' => 'TAS_DERIVATION_SCREEN_TPL',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_DERIVATION_SCREEN_TPL' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_DERIVATION_SCREEN_TPL' 
			),
			array(
				'sql' => 'TAS_SELFSERVICE_TIMEOUT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SELFSERVICE_TIMEOUT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SELFSERVICE_TIMEOUT' 
			),
			array(
				'sql' => 'TAS_SELFSERVICE_TIME',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SELFSERVICE_TIME' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SELFSERVICE_TIME' 
			),
			array(
				'sql' => 'TAS_SELFSERVICE_TIME_UNIT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SELFSERVICE_TIME_UNIT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SELFSERVICE_TIME_UNIT' 
			),
			array(
				'sql' => 'TAS_SELFSERVICE_TRIGGER_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SELFSERVICE_TRIGGER_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SELFSERVICE_TRIGGER_UID' 
			),
			array(
				'sql' => 'TAS_SELFSERVICE_EXECUTION',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_SELFSERVICE_EXECUTION' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_SELFSERVICE_EXECUTION' 
			),
			array(
				'sql' => 'TAS_NOT_EMAIL_FROM_FORMAT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_NOT_EMAIL_FROM_FORMAT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_NOT_EMAIL_FROM_FORMAT' 
			),
			array(
				'sql' => 'TAS_OFFLINE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_OFFLINE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_OFFLINE' 
			),
			array(
				'sql' => 'TAS_EMAIL_SERVER_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_EMAIL_SERVER_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_EMAIL_SERVER_UID' 
			),
			array(
				'sql' => 'TAS_AUTO_ROOT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_AUTO_ROOT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_AUTO_ROOT' 
			),
			array(
				'sql' => 'TAS_RECEIVE_SERVER_UID',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_SERVER_UID' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_SERVER_UID' 
			),
			array(
				'sql' => 'TAS_RECEIVE_LAST_EMAIL',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_LAST_EMAIL' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_LAST_EMAIL' 
			),
			array(
				'sql' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_EMAIL_FROM_FORMAT' 
			),
			array(
				'sql' => 'TAS_RECEIVE_MESSAGE_TYPE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_MESSAGE_TYPE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_MESSAGE_TYPE' 
			),
			array(
				'sql' => 'TAS_RECEIVE_MESSAGE_TEMPLATE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_MESSAGE_TEMPLATE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_MESSAGE_TEMPLATE' 
			),
			array(
				'sql' => 'TAS_RECEIVE_SUBJECT_MESSAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_SUBJECT_MESSAGE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_SUBJECT_MESSAGE' 
			),
			array(
				'sql' => 'TAS_RECEIVE_MESSAGE',
				'parsed' => true,
				'type' => 'FieldListItem',
				'alias' => '',
				'expression' => array(
					'sql' => '',
					'parsed' => true,
					'type' => 'SQLField',
					'table' => 'TASK',
					'name' => 'TAS_RECEIVE_MESSAGE' 
				),
				'encrypted' => false,
				'columnName' => 'TAS_RECEIVE_MESSAGE' 
			) 
		),
		'fromList' => array( 
			array(
				'sql' => 'TASK',
				'parsed' => true,
				'type' => 'FromListItem',
				'table' => array(
					'sql' => 'TASK',
					'parsed' => true,
					'type' => 'SQLTable',
					'columns' => array( 
						'PRO_UID',
						'TAS_UID',
						'TAS_ID',
						'TAS_TITLE',
						'TAS_DESCRIPTION',
						'TAS_DEF_TITLE',
						'TAS_DEF_SUBJECT_MESSAGE',
						'TAS_DEF_PROC_CODE',
						'TAS_DEF_MESSAGE',
						'TAS_DEF_DESCRIPTION',
						'TAS_TYPE',
						'TAS_DURATION',
						'TAS_DELAY_TYPE',
						'TAS_TEMPORIZER',
						'TAS_TYPE_DAY',
						'TAS_TIMEUNIT',
						'TAS_ALERT',
						'TAS_PRIORITY_VARIABLE',
						'TAS_ASSIGN_TYPE',
						'TAS_ASSIGN_VARIABLE',
						'TAS_GROUP_VARIABLE',
						'TAS_MI_INSTANCE_VARIABLE',
						'TAS_MI_COMPLETE_VARIABLE',
						'TAS_ASSIGN_LOCATION',
						'TAS_ASSIGN_LOCATION_ADHOC',
						'TAS_TRANSFER_FLY',
						'TAS_LAST_ASSIGNED',
						'TAS_USER',
						'TAS_CAN_UPLOAD',
						'TAS_VIEW_UPLOAD',
						'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
						'TAS_CAN_CANCEL',
						'TAS_OWNER_APP',
						'STG_UID',
						'TAS_CAN_PAUSE',
						'TAS_CAN_SEND_MESSAGE',
						'TAS_CAN_DELETE_DOCS',
						'TAS_SELF_SERVICE',
						'TAS_START',
						'TAS_TO_LAST_USER',
						'TAS_SEND_LAST_EMAIL',
						'TAS_DERIVATION',
						'TAS_POSX',
						'TAS_POSY',
						'TAS_WIDTH',
						'TAS_HEIGHT',
						'TAS_COLOR',
						'TAS_EVN_UID',
						'TAS_BOUNDARY',
						'TAS_DERIVATION_SCREEN_TPL',
						'TAS_SELFSERVICE_TIMEOUT',
						'TAS_SELFSERVICE_TIME',
						'TAS_SELFSERVICE_TIME_UNIT',
						'TAS_SELFSERVICE_TRIGGER_UID',
						'TAS_SELFSERVICE_EXECUTION',
						'TAS_NOT_EMAIL_FROM_FORMAT',
						'TAS_OFFLINE',
						'TAS_EMAIL_SERVER_UID',
						'TAS_AUTO_ROOT',
						'TAS_RECEIVE_SERVER_UID',
						'TAS_RECEIVE_LAST_EMAIL',
						'TAS_RECEIVE_EMAIL_FROM_FORMAT',
						'TAS_RECEIVE_MESSAGE_TYPE',
						'TAS_RECEIVE_MESSAGE_TEMPLATE',
						'TAS_RECEIVE_SUBJECT_MESSAGE',
						'TAS_RECEIVE_MESSAGE' 
					),
					'name' => 'TASK' 
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
			),
			array(
				'fieldIndex' => 10,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 11,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 12,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 13,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 14,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 15,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 16,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 17,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 18,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 19,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 20,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 21,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 22,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 23,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 24,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 25,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 26,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 27,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 28,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 29,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 30,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 31,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 32,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 33,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 34,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 35,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 36,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 37,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 38,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 39,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 40,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 41,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 42,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 43,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 44,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 45,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 46,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 47,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 48,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 49,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 50,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 51,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 52,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 53,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 54,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 55,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 56,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 57,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 58,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 59,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 60,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 61,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 62,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 63,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 64,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			),
			array(
				'fieldIndex' => 65,
				'orderByIndex' => -1,
				'groupByIndex' => -1,
				'whereIndex' => -1,
				'havingIndex' => -1 
			) 
		),
		'headSql' => 'SELECT',
		'fieldListSql' => 'PRO_UID,
	TAS_UID,
	TAS_ID,
	TAS_TITLE,
	TAS_DESCRIPTION,
	TAS_DEF_TITLE,
	TAS_DEF_SUBJECT_MESSAGE,
	TAS_DEF_PROC_CODE,
	TAS_DEF_MESSAGE,
	TAS_DEF_DESCRIPTION,
	TAS_TYPE,
	TAS_DURATION,
	TAS_DELAY_TYPE,
	TAS_TEMPORIZER,
	TAS_TYPE_DAY,
	TAS_TIMEUNIT,
	TAS_ALERT,
	TAS_PRIORITY_VARIABLE,
	TAS_ASSIGN_TYPE,
	TAS_ASSIGN_VARIABLE,
	TAS_GROUP_VARIABLE,
	TAS_MI_INSTANCE_VARIABLE,
	TAS_MI_COMPLETE_VARIABLE,
	TAS_ASSIGN_LOCATION,
	TAS_ASSIGN_LOCATION_ADHOC,
	TAS_TRANSFER_FLY,
	TAS_LAST_ASSIGNED,
	TAS_USER,
	TAS_CAN_UPLOAD,
	TAS_VIEW_UPLOAD,
	TAS_VIEW_ADDITIONAL_DOCUMENTATION,
	TAS_CAN_CANCEL,
	TAS_OWNER_APP,
	STG_UID,
	TAS_CAN_PAUSE,
	TAS_CAN_SEND_MESSAGE,
	TAS_CAN_DELETE_DOCS,
	TAS_SELF_SERVICE,
	TAS_START,
	TAS_TO_LAST_USER,
	TAS_SEND_LAST_EMAIL,
	TAS_DERIVATION,
	TAS_POSX,
	TAS_POSY,
	TAS_WIDTH,
	TAS_HEIGHT,
	TAS_COLOR,
	TAS_EVN_UID,
	TAS_BOUNDARY,
	TAS_DERIVATION_SCREEN_TPL,
	TAS_SELFSERVICE_TIMEOUT,
	TAS_SELFSERVICE_TIME,
	TAS_SELFSERVICE_TIME_UNIT,
	TAS_SELFSERVICE_TRIGGER_UID,
	TAS_SELFSERVICE_EXECUTION,
	TAS_NOT_EMAIL_FROM_FORMAT,
	TAS_OFFLINE,
	TAS_EMAIL_SERVER_UID,
	TAS_AUTO_ROOT,
	TAS_RECEIVE_SERVER_UID,
	TAS_RECEIVE_LAST_EMAIL,
	TAS_RECEIVE_EMAIL_FROM_FORMAT,
	TAS_RECEIVE_MESSAGE_TYPE,
	TAS_RECEIVE_MESSAGE_TEMPLATE,
	TAS_RECEIVE_SUBJECT_MESSAGE,
	TAS_RECEIVE_MESSAGE',
		'fromListSql' => 'FROM
	TASK',
		'orderBySql' => '',
		'tailSql' => '' 
	),
	'originalTable' => 'TASK',
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
			'PRO_UID',
			'TAS_UID',
			'TAS_ID',
			'TAS_TITLE',
			'TAS_DESCRIPTION',
			'TAS_DEF_TITLE',
			'TAS_DEF_SUBJECT_MESSAGE',
			'TAS_DEF_PROC_CODE',
			'TAS_DEF_MESSAGE',
			'TAS_DEF_DESCRIPTION',
			'TAS_TYPE',
			'TAS_DURATION',
			'TAS_DELAY_TYPE',
			'TAS_TEMPORIZER',
			'TAS_TYPE_DAY',
			'TAS_TIMEUNIT',
			'TAS_ALERT',
			'TAS_PRIORITY_VARIABLE',
			'TAS_ASSIGN_TYPE',
			'TAS_ASSIGN_VARIABLE',
			'TAS_GROUP_VARIABLE',
			'TAS_MI_INSTANCE_VARIABLE',
			'TAS_MI_COMPLETE_VARIABLE',
			'TAS_ASSIGN_LOCATION',
			'TAS_ASSIGN_LOCATION_ADHOC',
			'TAS_TRANSFER_FLY',
			'TAS_LAST_ASSIGNED',
			'TAS_USER',
			'TAS_CAN_UPLOAD',
			'TAS_VIEW_UPLOAD',
			'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
			'TAS_CAN_CANCEL',
			'TAS_OWNER_APP',
			'STG_UID',
			'TAS_CAN_PAUSE',
			'TAS_CAN_SEND_MESSAGE',
			'TAS_CAN_DELETE_DOCS',
			'TAS_SELF_SERVICE',
			'TAS_START',
			'TAS_TO_LAST_USER',
			'TAS_SEND_LAST_EMAIL',
			'TAS_DERIVATION',
			'TAS_POSX',
			'TAS_POSY',
			'TAS_WIDTH',
			'TAS_HEIGHT',
			'TAS_COLOR',
			'TAS_EVN_UID',
			'TAS_BOUNDARY',
			'TAS_DERIVATION_SCREEN_TPL',
			'TAS_SELFSERVICE_TIMEOUT',
			'TAS_SELFSERVICE_TIME',
			'TAS_SELFSERVICE_TIME_UNIT',
			'TAS_SELFSERVICE_TRIGGER_UID',
			'TAS_SELFSERVICE_EXECUTION',
			'TAS_NOT_EMAIL_FROM_FORMAT',
			'TAS_OFFLINE',
			'TAS_EMAIL_SERVER_UID',
			'TAS_AUTO_ROOT',
			'TAS_RECEIVE_SERVER_UID',
			'TAS_RECEIVE_LAST_EMAIL',
			'TAS_RECEIVE_EMAIL_FROM_FORMAT',
			'TAS_RECEIVE_MESSAGE_TYPE',
			'TAS_RECEIVE_MESSAGE_TEMPLATE',
			'TAS_RECEIVE_SUBJECT_MESSAGE',
			'TAS_RECEIVE_MESSAGE' 
		),
		'searchSuggest' => true,
		'highlightSearchResults' => true,
		'hideDataUntilSearch' => false,
		'hideFilterUntilSearch' => false,
		'googleLikeSearchFields' => array( 
			'PRO_UID',
			'TAS_UID',
			'TAS_ID',
			'TAS_TITLE',
			'TAS_DESCRIPTION',
			'TAS_DEF_TITLE',
			'TAS_DEF_SUBJECT_MESSAGE',
			'TAS_DEF_PROC_CODE',
			'TAS_DEF_MESSAGE',
			'TAS_DEF_DESCRIPTION',
			'TAS_TYPE',
			'TAS_DURATION',
			'TAS_DELAY_TYPE',
			'TAS_TEMPORIZER',
			'TAS_TYPE_DAY',
			'TAS_TIMEUNIT',
			'TAS_ALERT',
			'TAS_PRIORITY_VARIABLE',
			'TAS_ASSIGN_TYPE',
			'TAS_ASSIGN_VARIABLE',
			'TAS_GROUP_VARIABLE',
			'TAS_MI_INSTANCE_VARIABLE',
			'TAS_MI_COMPLETE_VARIABLE',
			'TAS_ASSIGN_LOCATION',
			'TAS_ASSIGN_LOCATION_ADHOC',
			'TAS_TRANSFER_FLY',
			'TAS_LAST_ASSIGNED',
			'TAS_USER',
			'TAS_CAN_UPLOAD',
			'TAS_VIEW_UPLOAD',
			'TAS_VIEW_ADDITIONAL_DOCUMENTATION',
			'TAS_CAN_CANCEL',
			'TAS_OWNER_APP',
			'STG_UID',
			'TAS_CAN_PAUSE',
			'TAS_CAN_SEND_MESSAGE',
			'TAS_CAN_DELETE_DOCS',
			'TAS_SELF_SERVICE',
			'TAS_START',
			'TAS_TO_LAST_USER',
			'TAS_SEND_LAST_EMAIL',
			'TAS_DERIVATION',
			'TAS_POSX',
			'TAS_POSY',
			'TAS_WIDTH',
			'TAS_HEIGHT',
			'TAS_COLOR',
			'TAS_EVN_UID',
			'TAS_BOUNDARY',
			'TAS_DERIVATION_SCREEN_TPL',
			'TAS_SELFSERVICE_TIMEOUT',
			'TAS_SELFSERVICE_TIME',
			'TAS_SELFSERVICE_TIME_UNIT',
			'TAS_SELFSERVICE_TRIGGER_UID',
			'TAS_SELFSERVICE_EXECUTION',
			'TAS_NOT_EMAIL_FROM_FORMAT',
			'TAS_OFFLINE',
			'TAS_EMAIL_SERVER_UID',
			'TAS_AUTO_ROOT',
			'TAS_RECEIVE_SERVER_UID',
			'TAS_RECEIVE_LAST_EMAIL',
			'TAS_RECEIVE_EMAIL_FROM_FORMAT',
			'TAS_RECEIVE_MESSAGE_TYPE',
			'TAS_RECEIVE_MESSAGE_TEMPLATE',
			'TAS_RECEIVE_SUBJECT_MESSAGE',
			'TAS_RECEIVE_MESSAGE' 
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
	$runnerTableLabels['TASK'] = array(
	'tableCaption' => 'TASK',
	'fieldLabels' => array(
		'PRO_UID' => 'PRO UID',
		'TAS_UID' => 'TAS UID',
		'TAS_ID' => 'TAS ID',
		'TAS_TITLE' => 'TAS TITLE',
		'TAS_DESCRIPTION' => 'TAS DESCRIPTION',
		'TAS_DEF_TITLE' => 'TAS DEF TITLE',
		'TAS_DEF_SUBJECT_MESSAGE' => 'TAS DEF SUBJECT MESSAGE',
		'TAS_DEF_PROC_CODE' => 'TAS DEF PROC CODE',
		'TAS_DEF_MESSAGE' => 'TAS DEF MESSAGE',
		'TAS_DEF_DESCRIPTION' => 'TAS DEF DESCRIPTION',
		'TAS_TYPE' => 'TAS TYPE',
		'TAS_DURATION' => 'TAS DURATION',
		'TAS_DELAY_TYPE' => 'TAS DELAY TYPE',
		'TAS_TEMPORIZER' => 'TAS TEMPORIZER',
		'TAS_TYPE_DAY' => 'TAS TYPE DAY',
		'TAS_TIMEUNIT' => 'TAS TIMEUNIT',
		'TAS_ALERT' => 'TAS ALERT',
		'TAS_PRIORITY_VARIABLE' => 'TAS PRIORITY VARIABLE',
		'TAS_ASSIGN_TYPE' => 'TAS ASSIGN TYPE',
		'TAS_ASSIGN_VARIABLE' => 'TAS ASSIGN VARIABLE',
		'TAS_GROUP_VARIABLE' => 'TAS GROUP VARIABLE',
		'TAS_MI_INSTANCE_VARIABLE' => 'TAS MI INSTANCE VARIABLE',
		'TAS_MI_COMPLETE_VARIABLE' => 'TAS MI COMPLETE VARIABLE',
		'TAS_ASSIGN_LOCATION' => 'TAS ASSIGN LOCATION',
		'TAS_ASSIGN_LOCATION_ADHOC' => 'TAS ASSIGN LOCATION ADHOC',
		'TAS_TRANSFER_FLY' => 'TAS TRANSFER FLY',
		'TAS_LAST_ASSIGNED' => 'TAS LAST ASSIGNED',
		'TAS_USER' => 'TAS USER',
		'TAS_CAN_UPLOAD' => 'TAS CAN UPLOAD',
		'TAS_VIEW_UPLOAD' => 'TAS VIEW UPLOAD',
		'TAS_VIEW_ADDITIONAL_DOCUMENTATION' => 'TAS VIEW ADDITIONAL DOCUMENTATION',
		'TAS_CAN_CANCEL' => 'TAS CAN CANCEL',
		'TAS_OWNER_APP' => 'TAS OWNER APP',
		'STG_UID' => 'STG UID',
		'TAS_CAN_PAUSE' => 'TAS CAN PAUSE',
		'TAS_CAN_SEND_MESSAGE' => 'TAS CAN SEND MESSAGE',
		'TAS_CAN_DELETE_DOCS' => 'TAS CAN DELETE DOCS',
		'TAS_SELF_SERVICE' => 'TAS SELF SERVICE',
		'TAS_START' => 'TAS START',
		'TAS_TO_LAST_USER' => 'TAS TO LAST USER',
		'TAS_SEND_LAST_EMAIL' => 'TAS SEND LAST EMAIL',
		'TAS_DERIVATION' => 'TAS DERIVATION',
		'TAS_POSX' => 'TAS POSX',
		'TAS_POSY' => 'TAS POSY',
		'TAS_WIDTH' => 'TAS WIDTH',
		'TAS_HEIGHT' => 'TAS HEIGHT',
		'TAS_COLOR' => 'TAS COLOR',
		'TAS_EVN_UID' => 'TAS EVN UID',
		'TAS_BOUNDARY' => 'TAS BOUNDARY',
		'TAS_DERIVATION_SCREEN_TPL' => 'TAS DERIVATION SCREEN TPL',
		'TAS_SELFSERVICE_TIMEOUT' => 'TAS SELFSERVICE TIMEOUT',
		'TAS_SELFSERVICE_TIME' => 'TAS SELFSERVICE TIME',
		'TAS_SELFSERVICE_TIME_UNIT' => 'TAS SELFSERVICE TIME UNIT',
		'TAS_SELFSERVICE_TRIGGER_UID' => 'TAS SELFSERVICE TRIGGER UID',
		'TAS_SELFSERVICE_EXECUTION' => 'TAS SELFSERVICE EXECUTION',
		'TAS_NOT_EMAIL_FROM_FORMAT' => 'TAS NOT EMAIL FROM FORMAT',
		'TAS_OFFLINE' => 'TAS OFFLINE',
		'TAS_EMAIL_SERVER_UID' => 'TAS EMAIL SERVER UID',
		'TAS_AUTO_ROOT' => 'TAS AUTO ROOT',
		'TAS_RECEIVE_SERVER_UID' => 'TAS RECEIVE SERVER UID',
		'TAS_RECEIVE_LAST_EMAIL' => 'TAS RECEIVE LAST EMAIL',
		'TAS_RECEIVE_EMAIL_FROM_FORMAT' => 'TAS RECEIVE EMAIL FROM FORMAT',
		'TAS_RECEIVE_MESSAGE_TYPE' => 'TAS RECEIVE MESSAGE TYPE',
		'TAS_RECEIVE_MESSAGE_TEMPLATE' => 'TAS RECEIVE MESSAGE TEMPLATE',
		'TAS_RECEIVE_SUBJECT_MESSAGE' => 'TAS RECEIVE SUBJECT MESSAGE',
		'TAS_RECEIVE_MESSAGE' => 'TAS RECEIVE MESSAGE' 
	),
	'fieldTooltips' => array(
		'PRO_UID' => '',
		'TAS_UID' => '',
		'TAS_ID' => '',
		'TAS_TITLE' => '',
		'TAS_DESCRIPTION' => '',
		'TAS_DEF_TITLE' => '',
		'TAS_DEF_SUBJECT_MESSAGE' => '',
		'TAS_DEF_PROC_CODE' => '',
		'TAS_DEF_MESSAGE' => '',
		'TAS_DEF_DESCRIPTION' => '',
		'TAS_TYPE' => '',
		'TAS_DURATION' => '',
		'TAS_DELAY_TYPE' => '',
		'TAS_TEMPORIZER' => '',
		'TAS_TYPE_DAY' => '',
		'TAS_TIMEUNIT' => '',
		'TAS_ALERT' => '',
		'TAS_PRIORITY_VARIABLE' => '',
		'TAS_ASSIGN_TYPE' => '',
		'TAS_ASSIGN_VARIABLE' => '',
		'TAS_GROUP_VARIABLE' => '',
		'TAS_MI_INSTANCE_VARIABLE' => '',
		'TAS_MI_COMPLETE_VARIABLE' => '',
		'TAS_ASSIGN_LOCATION' => '',
		'TAS_ASSIGN_LOCATION_ADHOC' => '',
		'TAS_TRANSFER_FLY' => '',
		'TAS_LAST_ASSIGNED' => '',
		'TAS_USER' => '',
		'TAS_CAN_UPLOAD' => '',
		'TAS_VIEW_UPLOAD' => '',
		'TAS_VIEW_ADDITIONAL_DOCUMENTATION' => '',
		'TAS_CAN_CANCEL' => '',
		'TAS_OWNER_APP' => '',
		'STG_UID' => '',
		'TAS_CAN_PAUSE' => '',
		'TAS_CAN_SEND_MESSAGE' => '',
		'TAS_CAN_DELETE_DOCS' => '',
		'TAS_SELF_SERVICE' => '',
		'TAS_START' => '',
		'TAS_TO_LAST_USER' => '',
		'TAS_SEND_LAST_EMAIL' => '',
		'TAS_DERIVATION' => '',
		'TAS_POSX' => '',
		'TAS_POSY' => '',
		'TAS_WIDTH' => '',
		'TAS_HEIGHT' => '',
		'TAS_COLOR' => '',
		'TAS_EVN_UID' => '',
		'TAS_BOUNDARY' => '',
		'TAS_DERIVATION_SCREEN_TPL' => '',
		'TAS_SELFSERVICE_TIMEOUT' => '',
		'TAS_SELFSERVICE_TIME' => '',
		'TAS_SELFSERVICE_TIME_UNIT' => '',
		'TAS_SELFSERVICE_TRIGGER_UID' => '',
		'TAS_SELFSERVICE_EXECUTION' => '',
		'TAS_NOT_EMAIL_FROM_FORMAT' => '',
		'TAS_OFFLINE' => '',
		'TAS_EMAIL_SERVER_UID' => '',
		'TAS_AUTO_ROOT' => '',
		'TAS_RECEIVE_SERVER_UID' => '',
		'TAS_RECEIVE_LAST_EMAIL' => '',
		'TAS_RECEIVE_EMAIL_FROM_FORMAT' => '',
		'TAS_RECEIVE_MESSAGE_TYPE' => '',
		'TAS_RECEIVE_MESSAGE_TEMPLATE' => '',
		'TAS_RECEIVE_SUBJECT_MESSAGE' => '',
		'TAS_RECEIVE_MESSAGE' => '' 
	),
	'fieldPlaceholders' => array(
		'PRO_UID' => '',
		'TAS_UID' => '',
		'TAS_ID' => '',
		'TAS_TITLE' => '',
		'TAS_DESCRIPTION' => '',
		'TAS_DEF_TITLE' => '',
		'TAS_DEF_SUBJECT_MESSAGE' => '',
		'TAS_DEF_PROC_CODE' => '',
		'TAS_DEF_MESSAGE' => '',
		'TAS_DEF_DESCRIPTION' => '',
		'TAS_TYPE' => '',
		'TAS_DURATION' => '',
		'TAS_DELAY_TYPE' => '',
		'TAS_TEMPORIZER' => '',
		'TAS_TYPE_DAY' => '',
		'TAS_TIMEUNIT' => '',
		'TAS_ALERT' => '',
		'TAS_PRIORITY_VARIABLE' => '',
		'TAS_ASSIGN_TYPE' => '',
		'TAS_ASSIGN_VARIABLE' => '',
		'TAS_GROUP_VARIABLE' => '',
		'TAS_MI_INSTANCE_VARIABLE' => '',
		'TAS_MI_COMPLETE_VARIABLE' => '',
		'TAS_ASSIGN_LOCATION' => '',
		'TAS_ASSIGN_LOCATION_ADHOC' => '',
		'TAS_TRANSFER_FLY' => '',
		'TAS_LAST_ASSIGNED' => '',
		'TAS_USER' => '',
		'TAS_CAN_UPLOAD' => '',
		'TAS_VIEW_UPLOAD' => '',
		'TAS_VIEW_ADDITIONAL_DOCUMENTATION' => '',
		'TAS_CAN_CANCEL' => '',
		'TAS_OWNER_APP' => '',
		'STG_UID' => '',
		'TAS_CAN_PAUSE' => '',
		'TAS_CAN_SEND_MESSAGE' => '',
		'TAS_CAN_DELETE_DOCS' => '',
		'TAS_SELF_SERVICE' => '',
		'TAS_START' => '',
		'TAS_TO_LAST_USER' => '',
		'TAS_SEND_LAST_EMAIL' => '',
		'TAS_DERIVATION' => '',
		'TAS_POSX' => '',
		'TAS_POSY' => '',
		'TAS_WIDTH' => '',
		'TAS_HEIGHT' => '',
		'TAS_COLOR' => '',
		'TAS_EVN_UID' => '',
		'TAS_BOUNDARY' => '',
		'TAS_DERIVATION_SCREEN_TPL' => '',
		'TAS_SELFSERVICE_TIMEOUT' => '',
		'TAS_SELFSERVICE_TIME' => '',
		'TAS_SELFSERVICE_TIME_UNIT' => '',
		'TAS_SELFSERVICE_TRIGGER_UID' => '',
		'TAS_SELFSERVICE_EXECUTION' => '',
		'TAS_NOT_EMAIL_FROM_FORMAT' => '',
		'TAS_OFFLINE' => '',
		'TAS_EMAIL_SERVER_UID' => '',
		'TAS_AUTO_ROOT' => '',
		'TAS_RECEIVE_SERVER_UID' => '',
		'TAS_RECEIVE_LAST_EMAIL' => '',
		'TAS_RECEIVE_EMAIL_FROM_FORMAT' => '',
		'TAS_RECEIVE_MESSAGE_TYPE' => '',
		'TAS_RECEIVE_MESSAGE_TEMPLATE' => '',
		'TAS_RECEIVE_SUBJECT_MESSAGE' => '',
		'TAS_RECEIVE_MESSAGE' => '' 
	),
	'pageTitles' => array(
		 
	) 
);
}
?>