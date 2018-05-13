<?php

define('DB_SERVER','localhost');
define('DB_NAME','mikrowisp4');
define('DB_USER','root');
define('DB_PASS','');

$mysqli = new mysqli(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
 
if($mysqli->connect_errno) {
    echo "Lo sentimos, este sitio web está experimentando problemas.";
    echo "Error: Fallo al conectarse a MySQL debido a: \n";
    echo "Errno: " . $mysqli->connect_errno . "\n";
    echo "Error: " . $mysqli->connect_error . "\n";
    exit;
}
 
return $mysqli;
 
 ?> 