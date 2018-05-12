<?php 
session_start();

$_SESSION['type'] = 0; //soporte tecnico
//$_SESSION['type'] = 1; //admin
$_SESSION['support_name'] = "Manuel Acosta";

$user_name = $_SESSION['support_name'];
$type = $_SESSION['type'];
$data = array("type" => $type, "user_name" => $user_name);
$response = array("response" => $data);

echo json_encode($response);
?>