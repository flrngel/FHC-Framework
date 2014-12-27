<?php
namespace FHC;
class Controller{
	function run($page,$type){
		$arr=explode("/",$page);
		spl_autoload_call($page);
		$class = (end($arr));
		new $class;
	}
};
?>
