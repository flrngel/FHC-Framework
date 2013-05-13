<?
	$_SERVER['DOCUMENT_ROOT'] = dirname(__FILE__);
	
/*	ini_set('display_errors', 1); */
	//error_reporting(0);


	$mode=$_GET['mode'];
	if( empty($mode) ) $mode='home';

	$path=$_SERVER['DOCUMENT_ROOT']."/app/controllers/";
	$job=$path.$mode.".php";

	if( !preg_match("/^".preg_quote($path,'/')."/" , realpath($job)) ) exit;

	$res=Array();

	foreach(glob("lib/include/*.*") as $filename) include($filename);

  include $job;
?>
