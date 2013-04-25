<?php

/*$filepath = __DIR__.'/runtime/logs/'.date('Y-m-d').'_cron.log';
try {
	$fh = fopen($filepath, 'a+');
	fwrite($fh, "\n".'['.date('Y/m/d H:i:s').']: Start cron'."\n");
} catch(Exception $e) { }
*/

// change the following paths if necessary
$yiic = dirname(__FILE__).'/../../framework/yiic.php';
$config = dirname(__FILE__).'/config/cron.php';
require_once($yiic);

/*
try {
	$fh = fopen($filepath, 'a+');
	fwrite($fh, '['.date('Y/m/d H:i:s').']: Finish cron'."\n");
} catch(Exception $e) { }

if ($fh) {
	fclose($fh);
}
 */