<?php
require("conexion.php");

//$date1 = $_POST['date1'];
//$date2 = $_POST['date2'];

$date1 = "2018-05-21";
$date2 = "2018-05-22";


$consulta = "SELECT * FROM ".DB_NAME.".bitacoras WHERE fecha BETWEEN '".$date1."' AND '".$date2."' ORDER BY id ASC";
//echo $consulta;
$data = array();
if($resultado = $mysqli->query($consulta)) {
		
	while($row = $resultado->fetch_assoc()) {
		$data[] = $row;
	}
	$resultado->close();
}
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