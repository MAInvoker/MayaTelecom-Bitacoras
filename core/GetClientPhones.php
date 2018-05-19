<?php
require("conexion.php");

$consulta = "SELECT id,nombre,telefono,movil FROM ".DB_NAME.".usuarios ORDER BY nombre ASC";
$data = array();
	if($resultado = $mysqli->query($consulta)) {
		while($row = $resultado->fetch_assoc()) {
			$data[] = $row;
		}
		$resultado->close();
	}

$response = array("response" => $data);

echo json_encode($response);

?>