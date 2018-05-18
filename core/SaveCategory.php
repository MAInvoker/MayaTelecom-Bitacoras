<?php
require("conexion.php");

	$query = "INSERT INTO ".DB_NAME.".categorias_soporte (`cat_name`) VALUES ('".$_POST['cat_input']."')";
	//echo $query;
	if( $mysqli->query($query) === TRUE ){
		echo 1;
	}else{
		echo 0;
	}

?>