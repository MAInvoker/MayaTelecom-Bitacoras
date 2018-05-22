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
?>
       
<div style="display: block;" class="maya_logbook_container">
	<div>
		<table class="maya_table w3-striped w3-white" style="width: 40%;">
			<tr>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Soporte</strong></label></td>
				
				<td ><label style="text-align: center; font-size: 18px;"><strong>Aunto</strong></label></td>
		
				<td ><label style="text-align: center; font-size: 18px;"><strong>Fecha</strong></label></td>
			</tr>
	<?php
		foreach ($data as $key) {
			?>
			<tr>
				<td ><label id="lbl-<?php echo $key['id']?>" style="cursor: pointer;text-align: center"><?php echo $key['nombre']; ?></label></td>
				<td ><label id="lbl-<?php echo $key['id']?>" style="cursor: pointer;text-align: center"><?php echo $key['asunto']; ?></label></td>
				<td ><label id="lbl-<?php echo $key['id']?>" style="cursor: pointer;text-align: center"><?php $fecha=date('d/m/Y', strtotime($key['fecha'])); echo $fecha; ?></label></td>
			</tr>
			<?php
		}
	?>
		</table>
	</div>
</div>