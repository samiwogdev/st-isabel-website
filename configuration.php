<?php

//error_reporting(E_COMPILE_ERROR | E_RECOVERABLE_ERROR | E_ERROR | E_CORE_ERROR);
error_reporting(E_ALL);
define("DS", DIRECTORY_SEPARATOR); //Define directory separator
//date_default_timezone_set('Africa/Lagos');
if (!is_dir(__DIR__ . DS . "logs")) { // check if folder exist
    mkdir(__DIR__ . DS . "logs"); //create folder
}
//__DIR__ :This will give you the absolute path to the current file.
$errorFile = __DIR__ . DS . "logs" . DS . "app_error.log"; // create app_error log with .log file format
$sqlErrorFile = __DIR__ . DS . "logs" . DS . "sql-error.log"; // create sql-error log with .log file format

set_time_limit(0);  //Limits the maximum execution time. The maximum execution time, in seconds. If set to zero, no time limit is imposed.
ini_set('display_errors', TRUE); //This determines whether errors should be printed to the screen as part of the output or if they should be hidden from the user
ini_set('log_errors', TRUE); // Tells whether script error messages should be logged to the server's error log
ini_set('error_log', $errorFile); // Name of the file where script errors should be logged
ini_set('log_errors_max_len', 1024); // Set the maximum length of log_errors in bytes

//Database connection info
$USERNAME = "root";
$PASSWORD = "";
$CONNECTION_STRING = 'mysql:host=127.0.0.1;dbname=bitbybit';


spl_autoload_register(function($class_name) {
    include_once __DIR__ . DIRECTORY_SEPARATOR . "model" . DIRECTORY_SEPARATOR . $class_name . ".php";
});



