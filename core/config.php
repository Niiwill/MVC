<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();


define("HOST","localhost");
define("USER","root");
define("PASS","");
define("DB","login");

require __DIR__ . './../vendor/autoload.php';
require 'helpers.php';
require 'router.php';








?>