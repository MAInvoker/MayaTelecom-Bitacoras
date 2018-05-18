<?php
require("conexion.php");

$id = $_POST['cat_id'];
	$query = "DELETE FROM ".DB_NAME.".categorias_soporte WHERE `cat_id` = '".$id."'";
	//echo $query;
	if( $mysqli->query($query) === TRUE ){
		echo 1;
	}else{
		echo 0;
	}

?>