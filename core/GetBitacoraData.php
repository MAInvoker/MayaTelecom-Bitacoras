<?php
require("conexion.php");

date_default_timezone_set('America/Mexico_City');
        $datetime = date('d/m/Y', time());

$consulta = "SELECT * FROM ".DB_NAME.".bitacoras WHERE DATE_FORMAT(fecha, '%d/%m/%Y') = '".$datetime."' ORDER BY nombre ASC";
$data = array();
if($resultado = $mysqli->query($consulta)) {
	while($row = $resultado->fetch_assoc()) {
		$data[] = $row;
	}
	$resultado->close();
}
$response = array("data" => $data);
echo json_encode($response);
?>