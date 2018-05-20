<?php
session_start();
require("conexion.php");

 date_default_timezone_set('America/Mexico_City');
        $datetime = date('Y/m/d', time());
        //print_r($datetime);

	$query = "INSERT INTO ".DB_NAME.".bitacoras (`nombre`,`nodo`,`categoria`,`cliente`,`asunto`,`resumen`,`fecha`) 
	VALUES ('".$_SESSION['support_name']."','".$_POST['select_nodo']."','".$_POST['select_categoria']."',
		'".$_POST['phone_client']."','".$_POST['asunto']."','".$_POST['resumen_text']."','".$datetime."')";
	//echo $query;
	if( $mysqli->query($query) === TRUE ){
		echo 1;
	}else{
		echo 0;
	}
//
?>