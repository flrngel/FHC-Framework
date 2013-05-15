<?
	$_SERVER['DOCUMENT_ROOT'] = dirname(__FILE__);
	
/*	ini_set('display_errors', 1); */
	//error_reporting(0);


	$page=$_GET['page'];
	if( empty($page) ) $page='home';

	$path=$_SERVER['DOCUMENT_ROOT']."/app/controllers/";
	$job=$path.$page.".php";

	if( !preg_match("/^".preg_quote($path,'/')."/" , realpath($job)) ) exit;

	$res=Array();

	foreach(glob("lib/include/*.*") as $filename) include($filename);

	include $job;
?>
