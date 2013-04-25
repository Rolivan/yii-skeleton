<?php
return array(
    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Teamfinding - поиск команды; поиск стартапа.',
    // preloading 'log' component
    'preload' => array('log'),
    // autoloading model and component classes
    'import' => array(
        'application.models.*',
        'application.components.*',
    ),
    'modules' => array(
        'gii' => array(
            'class' => 'system.gii.GiiModule',
            'password' => 'yii',
            // If removed, Gii defaults to localhost only. Edit carefully to taste.
            'ipFilters' => array('127.0.0.1', '::1'),
        ),
        'email' => array(
            'delivery' => 'php', //php
        )
    ),
    // application components
    'components' => array(
        'user' => array(
            // enable cookie-based authentication
            'allowAutoLogin' => true,
        ),
        // uncomment the following to enable URLs in path-format

        'urlManager' => array(
            'class' => 'application.components.UrlManager',
            'urlFormat' => 'path',
            'showScriptName' => false,
            'rules' => array(
                
            ),
        ),
        'ih' => array(
            'class' => 'CImageHandler',
        ),
        
        'db' => array(
            'connectionString' => 'mysql:host=127.0.0.1;dbname=database',
            'emulatePrepare' => true,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
        
        'errorHandler' => array(
            'errorAction' => 'site/error',
        ),
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'categories' => 'system.db.CDbCommand',
                    'levels' => 'trace, info, error, warning',
                ),
                array(
                    'class' => 'CWebLogRoute',
                ),
            ),
        ),
    ),

    'params' => array(
        
    ),
    'sourceLanguage' => 'en',
    'language' => 'en',
);