<?
	function render($filename){
		global $res;
		if( $_REQUEST['dataType'] == "json" )
		{
			echo json_encode($res);
			return;
		}
		$path=$_SERVER['DOCUMENT_ROOT']."/app/views/$filename";
		include $path;
	}
?>
