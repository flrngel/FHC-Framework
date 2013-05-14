<?
	function render($filename){
		global $res;
		if( $_REQUEST['dataType'] == "json" )
		{
			echo json_encode($resa);
			return;
		}
		$path=$_SERVER['DOCUMENT_ROOT']."/app/views/$filename";
		include $path;
	}
?>
