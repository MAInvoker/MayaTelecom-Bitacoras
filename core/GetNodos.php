<?php
require("conexion.php");

$consulta = "SELECT * FROM ".DB_NAME.".login ORDER BY nodo ASC";
$data = array();
	if($resultado = $mysqli->query($consulta)) {
		?>
			<select class="form-control" id="select_nodo" name="select_nodo">
				<option value="">--Selecciona un Nodo--</option>
		<?php
		while($row = $resultado->fetch_assoc()) {
			?>
				<option value="<?php echo $row['nodo']; ?>"><?php echo $row['nodo']; ?></option>
			<?php
		}
		?>
			</select>
		<?php
		$resultado->close();
	}
?>
