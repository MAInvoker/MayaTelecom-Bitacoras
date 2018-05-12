<?php
session_start();
$user_name = $_SESSION['support_name'];
?>
<div style="display: block;" class="maya_logbook_container">
	<form>
		<div>
			<strong>Soporte Técnico: <?php echo $user_name; ?></strong>	
		</div>
		<div>
			<div style="display:inline-flex;">
				<strong>Selecciona Nodo: </strong>
				<select id="select_nodo" name="select_nodo">
					<option>opcion1</option>
					<option>opcion1</option>
					<option>opcion1</option>
					<option>opcion1</option>
				</select>
			</div>
		</div>
		<div>
			<div style="display:inline-flex;">
				<strong>Selecciona Categoría: </strong>
				<select id="select_categoria" name="select_categoria">
					<option>cat1</option>
					<option>cat1</option>
					<option>cat1</option>
					<option>cat1</option>
				</select>
			</div>
		</div>
		<div>
			<div style="display: inline-flex;">
				<strong># del Cliente: </strong> <input type="text" name="cliente_number">
			</div>
		</div>
		<div>
			<strong>Resumen: </stron><br>
			<textarea name="resumen_text"></textarea>
		</div>
	</form>
</div>