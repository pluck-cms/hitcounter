<?php
//Make sure the file isn't accessed directly.
defined('IN_PLUCK') or exit('Access denied!');

//{plugin}_info
  function hitcounter_info() {
    $module_info = array(
        'name'          => 'hit counter',
        'intro'         => 'A simple hit counter based on http://justintadlock.com/web-design/counter',
        'version'       => '0.1',
        'author'        => 'Justin Tadlock, grwebguy',
        'website'       => 'https://github.com/pluck-cms/',
        'compatibility' => '4.7'
    );
    return $module_info; 
 }
