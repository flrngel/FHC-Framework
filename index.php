<?
	$_SERVER['DOCUMENT_ROOT'] = dirname(__FILE__);

/*	ini_set('display_errors', 1);
error_reporting(E_ALL); */


	$mode=$_GET['mode'];
	if( empty($mode) ) $mode='home';

	$path=$_SERVER['DOCUMENT_ROOT']."/app/controllers/";
	$job=$path.$mode.".php";

	if( !preg_match("/^".preg_quote($path,'/')."/" , realpath($job)) ) exit;
	
	$res=Array();

  include "functions.php";
  include $job;
?>
