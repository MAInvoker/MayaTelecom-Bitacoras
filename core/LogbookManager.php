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

$consulta.= " ORDER BY nombre,id ASC";
//echo $consulta;
$data = array();
if($resultado = $mysqli->query($consulta)) {
		
	while($row = $resultado->fetch_assoc()) {
		$data[] = $row;
	}
	$resultado->close();
}
if(count($data) > 0){
?>
<div id="cat_list_container" style="display: block;margin-left: 16px;" class="w3-panel">
	<div>
		<table class="maya_table w3-striped w3-white">
			<tr>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Soporte Técnico</strong></label></td>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Nodo</strong></label></td>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Asunto</strong></label></td>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Categoría</strong></label></td>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Fecha</strong></label></td>
			</tr>
	<?php
		foreach ($data as $key) {
			?>
			<tr style="cursor: pointer;">
				<td ><label style="cursor: pointer;text-align: center;"><strong><?php echo $key['nombre']?></strong></label></td>
				<td ><label style="cursor: pointer;text-align: center;"><strong><?php echo $key['nodo']?></strong></label></td>
				<td ><label style="cursor: pointer;text-align: center;"><strong><?php echo $key['asunto']?></strong></label></td>
				<td ><label style="cursor: pointer;text-align: center;"><strong><?php echo $key['categoria']?></strong></label></td>
				<td ><label style="cursor: pointer;text-align: center;"><strong><?php echo $key['fecha']?></strong></label></td>
			</tr>
			<?php
		}
	?>
		</table>
	</div>
</div>
<?php
}else{
	echo 0;
}
?>