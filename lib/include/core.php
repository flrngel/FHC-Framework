<?
	function render($filename,$layout="default.html"){
		global $res;
		if( $_REQUEST['dataType'] == "json" )
		{
			echo json_encode($res);
			return;
		}
		$path=$_SERVER['DOCUMENT_ROOT']."/app/views/$filename";
		$path_layout=$_SERVER['DOCUMENT_ROOT']."/app/views/layouts/".$layout;

		ob_start();
		include $path;
		$contents=ob_get_contents();
		ob_end_clean();

		include $path_layout;
	}
?>
