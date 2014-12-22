<?php
require_once "lib/core/AutoLoader.php";

/**
 * Load .env
 */
try{
	FHC\Dotenv::load(__DIR__);
}catch(Exception $e){
}

/**
 * FHC-Framework Router starts from here
 */

$router = new Router();
?>
