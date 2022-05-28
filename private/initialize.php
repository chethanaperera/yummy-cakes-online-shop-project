<?php 
require_once("db_credentials.php");
require_once("db_functions.php");
require_once("class_database.php");
require_once("class_product.php");

$database = db_connect();
Database::set_database($database);

?>