<?
	function render($filename){
		global $res;
    $path=$_SERVER['DOCUMENT_ROOT']."/app/views/$filename";
    include $path;
  }
?>
