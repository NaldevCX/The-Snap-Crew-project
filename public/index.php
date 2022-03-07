<?php
session_start();

// [SERVER_SOFTWARE] => Apache/2.4.51 (Win64) OpenSSL/1.1.1l PHP/8.0.13
// [SERVER_NAME] => localhost
// [SERVER_ADDR] => ::1
// [SERVER_PORT] => 80
// [REMOTE_ADDR] => ::1
// [DOCUMENT_ROOT] => C:/xampp/htdocs
// [REQUEST_SCHEME] => http

$ROOT_PATH = $_SERVER['REQUEST_SCHEME'] . "://" . $_SERVER['SERVER_NAME'] . $_SERVER['PHP_SELF']; // Gets the file path 
$ROOT_PATH = str_replace("index.php", "", $ROOT_PATH); // replaces index.php in the string root_path with ""

define('ROOT', $ROOT_PATH);
define('ASSETS', $ROOT_PATH. "assets/");

include "../app/init.php"; //Includes every essential file to the webapp.


$app = new App();
?>