<?php

$RELPATH = dirname(__FILE__).DIRECTORY_SEPARATOR;
$URL = "http://127.0.0.1/chandan-dev/qr-code/";


$directory = "uploads/";


$directory_path = $REALPATH.$directory;
$directory_url = $URL.$directory;

define('BASE_URL', "http://127.0.0.1/chandan-dev/qr-code/");   
define('EXAMPLE_TMP_SERVERPATH', $directory_path);   
define('EXAMPLE_TMP_URLRELPATH', $directory_url);   

?>