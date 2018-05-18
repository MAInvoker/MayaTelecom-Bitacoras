<?php
require("conexion.php");

$id = $_POST['cat_id'];
$value = $_POST['cat_edit'];
	$query = "UPDATE ".DB_NAME.".categorias_soporte SET `cat_name`='".$value."' WHERE `cat_id` = '".$id."'";
	//echo $query;
	if( $mysqli->query($query) === TRUE ){
		echo 1;
	}else{
		echo 0;
	}

?>