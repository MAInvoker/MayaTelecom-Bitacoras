<?php 
session_start();

$type = $_SESSION['type'];
$user_name = $_SESSION['support_name'];
$data = array("type" => $type, "user_name" => $user_name);
$response = array("response" => $data);

echo json_encode($response);
?>