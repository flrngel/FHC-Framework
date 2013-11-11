<?
session_start();
function render($filename,$layout="default.html"){
	define("__RENDERED__",true);
	global $res;
	if( $_REQUEST['fhc_dataType'] == "json" ){
		if( $_REQUEST['var'] ){
			$var=$_REQUEST['var'];
			if( $res[$var] ){
				echo json_encode($res[$var]);
			}
		}else{
			echo json_encode($res);
		}
		return;
	}else if( $_REQUEST['fhc_dataType'] == 'html' ){
		// <URL>.html means no layout
		$layout=null;
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
