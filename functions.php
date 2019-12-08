<?php
//Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');

$filei = 'data/settings/modules/hitcounter/hitcounter.txt';
if (!file_exists($filei)) {
	file_put_contents($filei, 'hits');
}
unset($filei);

function hitcounter_word() {
	$filei = 'data/settings/modules/hitcounter/hitcounter.txt';
	return file_get_contents($filei);
}

function save_hitcounter_word($word) {
	$filei = 'data/settings/modules/hitcounter/hitcounter.txt';
	file_put_contents($filei, $word);
}

?>