<?php

// uncomment the following to define a path alias
// Yii::setPathOfAlias('local','path/to/local-folder');

// This is the main Web application configuration. Any writable
// CWebApplication properties can be configured here.
return array(
	'basePath'=>dirname(__FILE__).DIRECTORY_SEPARATOR.'..',
	'name'=>'Music eStore',

	// preloading 'log' component
	'preload'=>array('log'),

	// autoloading model and component classes
	'import'=>array(
		'application.models.*',
		'application.components.*',
		'application.controllers.*',
	),

 
	'modules'=>array(
		// uncomment the following to enable the Gii tool
		
		'gii'=>array(
			'class'=>'system.gii.GiiModule',
			'password'=>'martin',
			// If removed, Gii defaults to localhost only. Edit carefully to taste.
			'ipFilters'=>array('127.0.0.1','::1'),
		),
	

	),

	// application components
	'components'=>array(
		'user'=>array(
			// enable cookie-based authentication
			'allowAutoLogin'=>true,
		),
		 'upload'=>array(
		            'class'=>'ext.upload.components.UploadComponents'
		           ),
           		// uncomment the following to enable URLs in path-format
		
/*		'urlManager'=>array(
			'urlFormat'=>'path',
			'showScriptName'=>false,
                        		'caseSensitive'=>false, 
                        			'rules'=>array(
				'<controller:\w+>/<id:\d+>'=>'<controller>/view',
				'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
				'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',
			),
		), */
		
/*		'db'=>array(
			'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
		),
*/		// uncomment the following to use a MySQL database
		
		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=rightern_musicstore',
			'emulatePrepare' => true,
			'username' => 'rightern_news',
			'password' => 'M0nster.com',
			'charset' => 'utf8',
		),

/*		'db'=>array(
			'connectionString' => 'mysql:host=localhost;dbname=musicstore',
			'emulatePrepare' => true,
			'username' => 'root',
			'password' => '',
			'charset' => 'utf8',
		), */
		
		'errorHandler'=>array(
			// use 'site/error' action to display errors
			'errorAction'=>'site/error',
		),
		'log'=>array(
			'class'=>'CLogRouter',
			'routes'=>array(
				array(
					'class'=>'CFileLogRoute',
					'levels'=>'error, warning',
				),
				// uncomment the following to show log messages on web pages
				/*
				array(
					'class'=>'CWebLogRoute',
				),
				*/
			),
		),
	),

	// application-level parameters that can be accessed
	// using Yii::app()->params['paramName']
	'params'=>array(
		// this is used in contact page
		'adminEmail'=>'webmaster@example.com',
		'powered_by' => 'www.haiinteractive.com',
		'project' => 'Music eStore',
		'img_browse_url' => 'http://admin.localhost.com/musicstore/images/',
		'img_thumb_url' => 'C:/wamp/www/Hai_interactive/adminpanel/musicstore/images/',		
		'song_thumb_url' => 'C:/wamp/www/Hai_interactive/adminpanel/musicstore/images/songs_thumb/',
		'song_url' => 'C:/wamp/www/Hai_interactive/adminpanel/musicstore/images/songs/',
	),


);


