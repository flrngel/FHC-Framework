<?php
spl_autoload_register(function($class){
	$class=str_replace("\\","/",$class);
	$file = dirname(__FILE__)."/$class.php";
	if( !file_exists($file) ){
		$file = dirname(__FILE__)."/../../vendor/$class.php";
		if( !file_exists($file) ){
			echo "there's no class : $class , $file";
			return 0;
		}
	}
	require_once($file);
});
?>
