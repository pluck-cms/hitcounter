<?php
//Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');

//{plugin}_info
  function hitcounter_info() {
	global $lang;
    $module_info = array(
        'name'          => $lang['hitcounter']['name'],
        'intro'         => $lang['hitcounter']['intro'],
        'version'       => '0.2',
        'author'        => 'Justin Tadlock, grwebguy',
        'website'       => 'https://github.com/pluck-cms/hitcounter',
        'compatibility' => '4.7'
    );
    return $module_info; 
 }
