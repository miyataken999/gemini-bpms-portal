<?php
$runnerProjectSettings = array(
	'restAPIReturnEncodedBinary' => true,
	'restAPIAuthType' => 'basic',
	'menuIds' => array( 
		'main' 
	),
	'tablesAdvSecurity' => array(
		'ABE_CONFIGURATION' => array(
			'table' => 374208 
		),
		'ABE_REQUESTS' => array(
			'table' => 374274 
		),
		'ABE_RESPONSES' => array(
			'table' => 374319 
		),
		'DIM_TIME_DELEGATE' => array(
			'table' => 374355 
		),
		'DYNAFORM' => array(
			'table' => 374394 
		),
		'USERS' => array(
			'table' => 374439 
		),
		'TASK_USER' => array(
			'table' => 374556 
		),
		'TASK' => array(
			'table' => 374583 
		),
		'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' => array(
			'table' => 374811 
		),
		'APP_CACHE_VIEW' => array(
			'table' => 374830 
		),
		'APP_DELAY' => array(
			'table' => 374941 
		) 
	),
	'phpSpreadsheet' => false,
	'ext' => 'php',
	'security' => array(
		'projectName' => '',
		'loginDataSource' => '',
		'loginForm' => 3,
		'dynamicPermissions' => false,
		'dpTablePrefix' => '',
		'dpTableConnId' => '',
		'providers' => array( 
			 
		),
		'enabled' => false,
		'advancedSecurityAvailable' => false,
		'userGroupsAvailable' => false,
		'hardcodedLogin' => false,
		'defaultProviderCode' => '',
		'adOnlyLogin' => false,
		'sessionControl' => array(
			'lifeTime' => 15,
			'sessionName' => 'df5VNYDHaZ8XhSLRD6RU',
			'JWTSecret' => 'AVqZd4tobGst7JD9QHC8' 
		),
		'registration' => array(
			'remindMethod' => 0,
			'hashAlgorithm' => 0,
			'passwordValidation' => array(
				'strong' => false,
				'minimumLength' => 8,
				'uniqueCharacters' => 4,
				'digitsAndSymbols' => 2,
				'upperAndLowerCase' => false 
			),
			'registerPage' => false 
		),
		'captchaSettings' => array(
			'captchaType' => 0,
			'siteKey' => '',
			'secretKey' => '',
			'passesCount' => 5 
		),
		'emailSettings' => array(
			'fromEmail' => '',
			'usePHPDefinedSMTP' => false,
			'useBuiltInMailer' => false,
			'SMTPServer' => 'localhost',
			'SMTPPort' => 25,
			'SMTPUser' => '',
			'SMTPPassword' => '',
			'securityProtocol' => 0 
		),
		'advancedSecurity' => array(
			'allowGuestLogin' => false 
		),
		'auditAndLocking' => array(
			'loggingMode' => 0,
			'loggingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'loggingFile' => 'audit.log',
			'logSecurityActions' => false,
			'lockAfterUnsuccessfulLogin' => false,
			'enableLocking' => false,
			'lockingTable' => array(
				'connId' => '',
				'table' => '' 
			),
			'tables' => array(
				 
			) 
		),
		'twoFactorSettings' => array(
			'available' => false,
			'required' => false,
			'enable' => true,
			'remember' => true,
			'types' => array(
				 
			),
			'twoFactorField' => '',
			'emailField' => '',
			'phoneField' => '',
			'codeField' => '',
			'projectName' => '' 
		),
		'staticPermissions' => array(
			'groups' => array(
				 
			) 
		),
		'adAdminGroups' => array( 
			 
		),
		'showUserSource' => false,
		'dbProviderCodes' => array( 
			 
		) 
	),
	'notifications' => array(
		'enabled' => false,
		'table' => array(
			'connId' => '',
			'table' => '' 
		) 
	),
	'allTables' => array(
		'ABE_CONFIGURATION' => array(
			'gid' => 374208,
			'name' => 'ABE_CONFIGURATION',
			'shortName' => 'ABE_CONFIGURATION',
			'type' => 0,
			'caption' => array(
				'English' => 'ABE CONFIGURATION' 
			),
			'connId' => 'conn',
			'color' => '00c2c5',
			'originalTable' => 'ABE_CONFIGURATION' 
		),
		'ABE_REQUESTS' => array(
			'gid' => 374274,
			'name' => 'ABE_REQUESTS',
			'shortName' => 'ABE_REQUESTS',
			'type' => 0,
			'caption' => array(
				'English' => 'ABE REQUESTS' 
			),
			'connId' => 'conn',
			'color' => 'e07878',
			'originalTable' => 'ABE_REQUESTS' 
		),
		'ABE_RESPONSES' => array(
			'gid' => 374319,
			'name' => 'ABE_RESPONSES',
			'shortName' => 'ABE_RESPONSES',
			'type' => 0,
			'caption' => array(
				'English' => 'ABE RESPONSES' 
			),
			'connId' => 'conn',
			'color' => '00c2c5',
			'originalTable' => 'ABE_RESPONSES' 
		),
		'DIM_TIME_DELEGATE' => array(
			'gid' => 374355,
			'name' => 'DIM_TIME_DELEGATE',
			'shortName' => 'DIM_TIME_DELEGATE',
			'type' => 0,
			'caption' => array(
				'English' => 'DIM TIME DELEGATE' 
			),
			'connId' => 'conn',
			'color' => '00c2c5',
			'originalTable' => 'DIM_TIME_DELEGATE' 
		),
		'DYNAFORM' => array(
			'gid' => 374394,
			'name' => 'DYNAFORM',
			'shortName' => 'DYNAFORM',
			'type' => 0,
			'caption' => array(
				'English' => 'DYNAFORM' 
			),
			'connId' => 'conn',
			'color' => '6b8e23',
			'originalTable' => 'DYNAFORM' 
		),
		'USERS' => array(
			'gid' => 374439,
			'name' => 'USERS',
			'shortName' => 'USERS',
			'type' => 0,
			'caption' => array(
				'English' => 'USERS' 
			),
			'connId' => 'conn',
			'color' => 'edca00',
			'originalTable' => 'USERS' 
		),
		'TASK_USER' => array(
			'gid' => 374556,
			'name' => 'TASK_USER',
			'shortName' => 'TASK_USER',
			'type' => 0,
			'caption' => array(
				'English' => 'TASK USER' 
			),
			'connId' => 'conn',
			'color' => '6b8e23',
			'originalTable' => 'TASK_USER' 
		),
		'TASK' => array(
			'gid' => 374583,
			'name' => 'TASK',
			'shortName' => 'TASK',
			'type' => 0,
			'caption' => array(
				'English' => 'TASK' 
			),
			'connId' => 'conn',
			'color' => '4169e1',
			'originalTable' => 'TASK' 
		),
		'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' => array(
			'gid' => 374811,
			'name' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
			'shortName' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
			'type' => 0,
			'caption' => array(
				'English' => 'APP ASSIGN SELF SERVICE VALUE GROUP' 
			),
			'connId' => 'conn',
			'color' => '2f4f4f',
			'originalTable' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' 
		),
		'APP_CACHE_VIEW' => array(
			'gid' => 374830,
			'name' => 'APP_CACHE_VIEW',
			'shortName' => 'APP_CACHE_VIEW',
			'type' => 0,
			'caption' => array(
				'English' => 'APP CACHE VIEW' 
			),
			'connId' => 'conn',
			'color' => '5f9ea0',
			'originalTable' => 'APP_CACHE_VIEW' 
		),
		'APP_DELAY' => array(
			'gid' => 374941,
			'name' => 'APP_DELAY',
			'shortName' => 'APP_DELAY',
			'type' => 0,
			'caption' => array(
				'English' => 'APP DELAY' 
			),
			'connId' => 'conn',
			'color' => '7b68ee',
			'originalTable' => 'APP_DELAY' 
		) 
	),
	'tablesByShort' => array(
		'ABE_CONFIGURATION' => 'ABE_CONFIGURATION',
		'ABE_REQUESTS' => 'ABE_REQUESTS',
		'ABE_RESPONSES' => 'ABE_RESPONSES',
		'DIM_TIME_DELEGATE' => 'DIM_TIME_DELEGATE',
		'DYNAFORM' => 'DYNAFORM',
		'USERS' => 'USERS',
		'TASK_USER' => 'TASK_USER',
		'TASK' => 'TASK',
		'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
		'APP_CACHE_VIEW' => 'APP_CACHE_VIEW',
		'APP_DELAY' => 'APP_DELAY' 
	),
	'tablesByGood' => array(
		'ABE_CONFIGURATION' => 'ABE_CONFIGURATION',
		'ABE_REQUESTS' => 'ABE_REQUESTS',
		'ABE_RESPONSES' => 'ABE_RESPONSES',
		'DIM_TIME_DELEGATE' => 'DIM_TIME_DELEGATE',
		'DYNAFORM' => 'DYNAFORM',
		'USERS' => 'USERS',
		'TASK_USER' => 'TASK_USER',
		'TASK' => 'TASK',
		'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP' => 'APP_ASSIGN_SELF_SERVICE_VALUE_GROUP',
		'APP_CACHE_VIEW' => 'APP_CACHE_VIEW',
		'APP_DELAY' => 'APP_DELAY' 
	),
	'events' => array( 
		 
	),
	'languages' => array( 
		array(
			'name' => 'English',
			'nativeName' => 'English',
			'rtl' => false,
			'filename' => 'English.lng' 
		) 
	),
	'languageNames' => array( 
		'English' 
	),
	'defaultLanguage' => 'English',
	'detectDefaultLanguage' => true,
	'charset' => 'utf-8',
	'codepage' => 65001,
	'defaultConnID' => 'conn',
	'wrConnectionID' => '',
	'wizardBuild' => '44023',
	'projectBuild' => 'aESYDefVU99H',
	'projectTheme' => 'cerulean',
	'projectSize' => 'small',
	'customErrorMsg' => array(
		'text' => 'Error occured.',
		'type' => 0 
	),
	'cloudSettings' => array(
		'cloudAmazonRegion' => '',
		'cloudAmazonBucket' => '',
		'cloudAmazonAccessKey' => '',
		'cloudAmazonSecretKey' => '',
		'cloudWasabiRegion' => '',
		'cloudWasabiBucket' => '',
		'cloudWasabiAccessKey' => '',
		'cloudWasabiSecretKey' => '',
		'cloudGDriveClientId' => '',
		'cloudGDriveClientSecret' => '',
		'cloudOneDriveClientId' => '',
		'cloudOneDriveClientSecret' => '',
		'cloudOneDriveDrive' => '',
		'cloudOneDriveAccountType' => 0,
		'cloudOneDriveDirectoryId' => '',
		'cloudDropboxClientId' => '',
		'cloudDropboxClientSecret' => '' 
	),
	'mapSettings' => array(
		'embed' => true,
		'provider' => 0,
		'apikey' => '' 
	),
	'viewPluginsWithJS' => array( 
		 
	),
	'rtlLanguages' => array(
		'English' => false 
	),
	'smsSettings' => array(
		'smsProvider' => 4,
		'iBusername' => '',
		'iBpassword' => '',
		'iBsender' => '',
		'essUsername' => '',
		'essPassword' => '',
		'essSender' => '',
		'gwApiToken' => '',
		'gwSender' => '',
		'mbAuth' => '',
		'mbSender' => '',
		'twilioSID' => '',
		'twilioAuth' => '',
		'twilioNumber' => '',
		'phoneField' => '',
		'counryCode' => '+1',
		'wauUsername' => '',
		'wauPassword' => '',
		'wauSender' => '' 
	) 
);

?>