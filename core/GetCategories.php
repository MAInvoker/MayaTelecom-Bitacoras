<?php
require("conexion.php");

$consulta = "SELECT * FROM ".DB_NAME.".categorias_soporte ORDER BY cat_name ASC";
$data = array();
	if($resultado = $mysqli->query($consulta)) {
		?>
			<select class="form-control" id="select_categoria" name="select_categoria">
				<option value="">--Selecciona una Categoría--</option>
		<?php
		while($row = $resultado->fetch_assoc()) {
			?>
				<option value="<?php echo $row['cat_name']; ?>"><?php echo $row['cat_name']; ?></option>
			<?php
		}
		?>
			</select>
		<?php
		$resultado->close();
	}
?>
