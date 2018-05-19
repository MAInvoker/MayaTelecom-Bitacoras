<?php
require("conexion.php");

$consulta = "SELECT * FROM ".DB_NAME.".categorias_soporte ORDER BY cat_name ASC";
$data = array();
	if($resultado = $mysqli->query($consulta)) {
		?>
			<select id="select_categoria" name="select_categoria">
				<option id="opt-0">--Selecciona una Categoría--</option>
		<?php
		while($row = $resultado->fetch_assoc()) {
			?>
				<option id="opt-<?php echo $row['cat_id']; ?>"><?php echo $row['cat_name']; ?></option>
			<?php
		}
		?>
			</select>
		<?php
		$resultado->close();
	}
?>
