<?
	$_SERVER['DOCUMENT_ROOT'] = dirname(__FILE__);
	
	ini_set('display_errors', 1); 
	error_reporting(E_ALL^E_NOTICE^E_WARNING);


	$page=$_GET['page'];
	if( empty($page) ) $page='index';

	$path=$_SERVER['DOCUMENT_ROOT']."/app/controllers/";
	$viewpath_default=$page.".html";

	$job=$path.$page.".php";
	if( !is_file($job) ){
		if( is_dir($path.$page) ){
			$job=$path.$page."/index.php";
			$viewpath_default=$page."/index.html";
		}
	}

	if( !preg_match("/^".preg_quote($path,'/')."/" , realpath($job)) ) exit;

	$res=Array();

	foreach(glob("lib/include/*.*") as $filename) include($filename);

	include $job;

	if( !defined("__RENDERED__") ){
		render($viewpath_default);
	}
?>
