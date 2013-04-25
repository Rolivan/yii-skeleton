<?php

// 4320 - 3 days
ini_set('session.gc_maxlifetime', 4320);
ini_set('session.cookie_lifetime', 4320);
ini_set('session.cache_expire', 4320);

// change the following paths if necessary
$yii=dirname(__FILE__).'/../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following lines when in production mode
if ($_SERVER['REMOTE_ADDR'] == '93.73.106.31' || $_SERVER['REMOTE_ADDR'] == '127.0.0.1') {
	defined('YII_DEBUG') or define('YII_DEBUG',true);
} else {
	defined('YII_DEBUG') or define('YII_DEBUG',false);
}
// specify how many levels of call stack should be shown in each log message
defined('YII_TRACE_LEVEL') or define('YII_TRACE_LEVEL',3);

require_once($yii);
Yii::createWebApplication($config)->run();