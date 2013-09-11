<?
session_start();
function render($filename,$layout="default.html"){
	define("__RENDERED__",true);
	global $res;
	if( $_REQUEST['fhc_dataType'] == "json" )
	{
		echo json_encode($res);
		return;
	}
	$path=$_SERVER['DOCUMENT_ROOT']."/app/views/$filename";
	$path_layout=$_SERVER['DOCUMENT_ROOT']."/app/views/layouts/".$layout;

	if( $layout != null )
	{	
		ob_start();
		include $path;
		$contents=ob_get_contents();
		ob_end_clean();

		include $path_layout;
	}
	else{
		include $path;
	}
}
?>
