<?php
require_once "lib/core/AutoLoader.php";

/**
 * Load .env
 */
Dotenv::load(__DIR__);

/**
 * FHC-Framework Router starts from here
 */

$router = new Router();
?>
