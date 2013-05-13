<?
	function __autoload($name){
		$file = $_SERVER['DOCUMENT_ROOT']."/lib/classes/class.$name.inc";
		if( !file_exists($file) ){
			echo "미정의 클래스명 : $name ; ".$_SERVER['PHP_SELF'];
			return 0;
		}
		require_once($file);
	}
?>
