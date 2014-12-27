<?php

define("FHC_ROOT",realpath(dirname(__FILE__)."/../../")."/");

spl_autoload_register(function($class_str){
	$find = function ($path){
		$path=FHC_ROOT.$path;
		if( file_exists($path) ){
			require_once($path);
			return true;
		}
		return false;
	};
	// Load FHC-Framework
	$class_name = str_replace("\\","/",$class_str);
	$path = "/lib/core/$class_name.php";

	$globi=0;
	while( !$find_flag = $find($path) ){
		if( $globi == 0 ){
			$glob_list = array();
			$glob_list += glob("app/*", GLOB_ONLYDIR);
			$glob_list += glob("vendor/*", GLOB_ONLYDIR);
			$glob_n = count($glob_list);
		}
		if( $globi == $glob_n ) break;
		$path = $glob_list[$globi]."/$class_name.php";
		$globi++;
	}

	if( $find_flag == false ){
		die("no class : `$class_name`");
	}
});
?>
