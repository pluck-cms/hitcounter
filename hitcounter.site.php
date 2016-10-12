<?php
defined('IN_PLUCK') or exit('Access denied!');
//{pluginname}_theme_main()

function hitcounter_theme_main() {
	echo getMessage();
}

function getMessage() {

	$countdir = 'data/settings/modules/hitcounter/';
	$countlog = $countdir . "countlog.txt";
    
//Make directory  settings (if it doesn't exist).
	if (!file_exists($countdir)) {
		mkdir($countdir);
		chmod($countdir, 0777);
	}
	if (!file_exists($countlog)) {
		$datei = fopen($countlog,"w");
		fwrite($datei, '1');
		fclose($datei);
	}
			
//opens countlog.txt to read the number of hits
	$datei = fopen($countlog,"r");
	$count = fgets($datei,1000);
	fclose($datei);
	$count = $count + 1 ;
	$message = "<p>" . $count . " hits </p>" ;

// opens countlog.txt to change new hit number
	$datei = fopen($countlog,"w");
	fwrite($datei, $count);
	fclose($datei);

	return $message;
}

