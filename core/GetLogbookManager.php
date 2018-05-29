<?php
require("conexion.php");

$date1 = $_POST['date1'];
$date2 = $_POST['date2'];

$consulta = "SELECT * FROM ".DB_NAME.".bitacoras WHERE fecha BETWEEN '".$date1."' AND '".$date2."' ";
//echo $_POST['selected-filter'];
if($_POST['selected-filter'] != "0"){
	if($_POST['selected-filter'] == "nombre"){
		$consulta.=" AND nombre LIKE '%".$_POST['filter-text']."%' ";
	}
	elseif ($_POST['selected-filter'] == "nodo") {
		$consulta.=" AND nodo = '".$_POST['filter-text']."' ";
	}
	elseif ($_POST['selected-filter'] == "emisor") {
		$consulta.=" AND emisor = '".$_POST['filter-text']."' ";
	}
}

$consulta.= " ORDER BY fecha ASC";
//echo $consulta;
$data = array();
if($resultado = $mysqli->query($consulta)) {
		
	while($row = $resultado->fetch_assoc()) {
		$data[] = $row;
	}
	$resultado->close();
}
if(count($data) > 0){
	$response = array("data" => $data);
	echo json_encode($response);
}else{
	echo 0;
}
?>