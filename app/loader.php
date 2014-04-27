<?php
// ini_set("display_errors", 0);
// ini_set("display_startup_errors", 0);
// error_reporting(E_ALL);

include(dirname(__FILE__) . '/configs/system.php');
include(dirname(__FILE__) . '/configs/site.php');
include(dirname(__FILE__) . '/functions.php');
include(dirname(__FILE__) . '/classes/Singleton.php');
include(dirname(__FILE__) . '/../vender/smarty/libs/Smarty.class.php');
include(dirname(__FILE__) . '/classes/SmartyWrap.php');
include(dirname(__FILE__) . '/classes/DataBase.php');

// register_shutdown_function(function() {
// 	$e = error_get_last();
// 	if( $e['type'] == E_ERROR ||
// 		$e['type'] == E_PARSE ||
// 		$e['type'] == E_CORE_ERROR ||
// 		$e['type'] == E_COMPILE_ERROR ||
// 		$e['type'] == E_USER_ERROR )
// 	{
// 		echo "エラーが発生しました。\n";
// 		echo "<br />";
// 		echo "Error type:\t {$e['type']}\n";
// 		echo "<br />";
// 		echo "Error message:\t {$e['message']}\n";
// 		echo "<br />";
// 		echo "Error file:\t {$e['file']}\n";
// 		echo "<br />";
// 		echo "Error line:\t {$e['line']}\n";
// 	}
// });

// // エラー時に例外をスローするようにコールバック関数を登録
// set_error_handler(function($errno, $errstr, $errfile, $errline){
// throw new ErrorException($errstr, $errno, 0, $errfile, $errline);
// });

