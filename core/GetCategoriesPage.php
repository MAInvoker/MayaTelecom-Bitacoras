<?php
require("conexion.php");

$consulta = "SELECT * FROM ".DB_NAME.".categorias_soporte ORDER BY cat_name ASC";
$data = array();
	if($resultado = $mysqli->query($consulta)) {
		while($row = $resultado->fetch_assoc()) {
			$data[] = $row;
		}
		$resultado->close();
	}

?>

<div class="w3-panel w3-row-padding">
	<div class="w3-quarter" style="cursor: pointer;" id="btn-add-material" onclick="showAddCatForm();">
	    <div class="w3-container w3-red w3-padding-10">
	        <h4 id="add_cat_title_btn">Agregar nueva Categoría</h4>
	    </div>
	</div>

	<div class="w3-quarter" style="cursor: pointer;" id="btn-add-material" onclick="tryToEditCat();">
	    <div class="w3-container w3-blue w3-padding-10">
	        <h4 id="edit_cat_title_btn">Editar Categoría</h4>
	    </div>
	</div>

	<div class="w3-quarter" style="cursor: pointer;" id="btn-add-material" onclick="tryToDeleteCat();">
	    <div class="w3-container w3-green w3-padding-10">
	        <h4 id="delete_cat_title_btn">Eliminar Categoría</h4>
	    </div>
	</div>
</div>

<div id="cat_list_container" style="display: block;margin-left: 16px;" class="w3-panel">
	<div>
		<table class="maya_table w3-striped w3-white" style="width: 20%;">
			<tr>
				<td ></td>
				<td ><label style="text-align: center; font-size: 18px;"><strong>Categorías Actuales</strong></label></td>
			</tr>
	<?php
		foreach ($data as $key) {
			?>
			<tr>
				<td ><input type="checkbox" id="<?php echo $key['cat_id']?>"></td>
				<td ><label id="lbl-<?php echo $key['cat_id']?>"><?php echo $key['cat_name']; ?></label></td>
			</tr>
			<?php
		}
	?>
		</table>
	</div>
</div>

<div id="cat_form_container" style="display: none; margin-left: 16px;margin-top: 30px;" class="w3-panel" >
	<div>
		<form id="form_cat">
			<strong>Nombre de la Categoría: </strong><input type="text" id="cat_input" name="cat_input">
			<div>
				<input style="margin-top: 20px;" class="maya_button w3-red" type="button" name="btn_cat_post" value="Agregar Categoría" onclick="saveCategory();">
			</div>
		</form>
	</div>
</div>
