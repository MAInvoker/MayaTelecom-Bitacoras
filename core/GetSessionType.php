<?php 
session_start();

$_SESSION['type'] = 0; //soporte tecnico
//$_SESSION['type'] = 1; //admin
$type = $_SESSION['type'];
return $type;

?>