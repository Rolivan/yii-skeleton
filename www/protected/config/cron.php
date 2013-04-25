<?php

return array(

    'basePath' => dirname(__FILE__) . DIRECTORY_SEPARATOR . '..',
    'name' => 'Cron',
    'preload' => array('log'),
    'import' => array(
        'application.components.*',
        'application.models.*',
        'application.components.Log',
    ),
    
    'modules' => array(

    ),

    'components' => array(
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'logFile' => 'cron.log',
                    'levels' => 'error, warning',
                ),
                array(
                    'class' => 'CFileLogRoute',
                    'logFile' => 'cron_trace.log',
                    'levels' => 'trace',
                ),
            ),
        ),
        'db' => array(
            'class' => 'CDbConnection',
            //'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
            'connectionString' => 'mysql:host=127.0.0.1;dbname=database',
            'emulatePrepare' => false,
            'username' => 'root',
            'password' => '',
            'charset' => 'utf8',
        ),
    ),
    'params' => array(
        'cli' => true,
        
    ),
    'sourceLanguage' => 'en',
    'language' => 'en',
);