<?php
session_start();
$user_name = $_SESSION['support_name'];

require("conexion.php");
$consulta = "SELECT * FROM ".DB_NAME.".bitacora ORDER BY name ASC";
$data = array();
	if($resultado = $mysqli->query($consulta)) {
		while($row = $resultado->fetch_assoc()) {
			$data[] = $row;
		}
		$resultado->close();
	}

?>
<div style="display: block;" class="maya_logbook_container">
	<form id="form_bit" autocomplete="off" class="autocomplete">
		<div>
			<strong>Soporte Técnico: <?php echo $user_name; ?></strong>	
		</div>
		<div>
			<div style="display:inline-flex;">
				<strong>Selecciona Nodo: </strong>
				<div id="container_select_nodo">
					
				</div>
				<!--<select id="select_nodo" name="select_nodo">
					<option id="optn-0">--Selecciona un Nodo--</option>
					<option>opcion1</option>
					<option>opcion1</option>
					<option>opcion1</option>
				</select>-->
			</div>
		</div>
		<div>
			<div style="display:inline-flex;">
				<strong>Selecciona Categoría: </strong>
				<div id="container_select_cat">
					
				</div>
				<!--<select id="select_categoria" name="select_categoria">
					<option>cat1</option>
					<option>cat1</option>
					<option>cat1</option>
					<option>cat1</option>
				</select>-->
			</div>
		</div>
		<div>
			<div id="client_">
				<strong> Teléfono del Cliente: </strong>
				<!--Make sure the form has the autocomplete function switched off:-->
				  <div class="autocomplete" style="width:300px;">
				    <input class="autocomplete" id="phone_numbers_client" type="text" name="phone_client" placeholder="# del Cliente">			    
				  </div>
			</div>
		</div>
		<div>
			<div id="asunto_">
				<strong> Asunto: </strong>
				  <div class="autocomplete" style="width:300px;">
				    <input class="form-control" id="asunto" type="text" name="asunto" placeholder="Asunto del soporte">			    
				  </div>
			</div>
		</div>
		<div>
			<strong>Resumen: </stron><br>
			<textarea class="form-control" id="resumen_text" name="resumen_text"></textarea>
		</div>
		<div class="form-group">
			<input style="margin-top: 20px;" type="button" class="maya_button w3-green" value="Guardar" onclick="saveBitacora();">
		</div>
	</form>
</div>

<script>

/*An array containing all the country names in the world:*/
/*var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola","Anguilla","Antigua & Barbuda","Argentina","Armenia","Aruba","Australia","Austria","Azerbaijan","Bahamas","Bahrain","Bangladesh","Barbados","Belarus","Belgium","Belize","Benin","Bermuda","Bhutan","Bolivia","Bosnia & Herzegovina","Botswana","Brazil","British Virgin Islands","Brunei","Bulgaria","Burkina Faso","Burundi","Cambodia","Cameroon","Canada","Cape Verde","Cayman Islands","Central Arfrican Republic","Chad","Chile","China","Colombia","Congo","Cook Islands","Costa Rica","Cote D Ivoire","Croatia","Cuba","Curacao","Cyprus","Czech Republic","Denmark","Djibouti","Dominica","Dominican Republic","Ecuador","Egypt","El Salvador","Equatorial Guinea","Eritrea","Estonia","Ethiopia","Falkland Islands","Faroe Islands","Fiji","Finland","France","French Polynesia","French West Indies","Gabon","Gambia","Georgia","Germany","Ghana","Gibraltar","Greece","Greenland","Grenada","Guam","Guatemala","Guernsey","Guinea","Guinea Bissau","Guyana","Haiti","Honduras","Hong Kong","Hungary","Iceland","India","Indonesia","Iran","Iraq","Ireland","Isle of Man","Israel","Italy","Jamaica","Japan","Jersey","Jordan","Kazakhstan","Kenya","Kiribati","Kosovo","Kuwait","Kyrgyzstan","Laos","Latvia","Lebanon","Lesotho","Liberia","Libya","Liechtenstein","Lithuania","Luxembourg","Macau","Macedonia","Madagascar","Malawi","Malaysia","Maldives","Mali","Malta","Marshall Islands","Mauritania","Mauritius","Mexico","Micronesia","Moldova","Monaco","Mongolia","Montenegro","Montserrat","Morocco","Mozambique","Myanmar","Namibia","Nauro","Nepal","Netherlands","Netherlands Antilles","New Caledonia","New Zealand","Nicaragua","Niger","Nigeria","North Korea","Norway","Oman","Pakistan","Palau","Palestine","Panama","Papua New Guinea","Paraguay","Peru","Philippines","Poland","Portugal","Puerto Rico","Qatar","Reunion","Romania","Russia","Rwanda","Saint Pierre & Miquelon","Samoa","San Marino","Sao Tome and Principe","Saudi Arabia","Senegal","Serbia","Seychelles","Sierra Leone","Singapore","Slovakia","Slovenia","Solomon Islands","Somalia","South Africa","South Korea","South Sudan","Spain","Sri Lanka","St Kitts & Nevis","St Lucia","St Vincent","Sudan","Suriname","Swaziland","Sweden","Switzerland","Syria","Taiwan","Tajikistan","Tanzania","Thailand","Timor L'Este","Togo","Tonga","Trinidad & Tobago","Tunisia","Turkey","Turkmenistan","Turks & Caicos","Tuvalu","Uganda","Ukraine","United Arab Emirates","United Kingdom","United States of America","Uruguay","Uzbekistan","Vanuatu","Vatican City","Venezuela","Vietnam","Virgin Islands (US)","Yemen","Zambia","Zimbabwe"];*/

/*initiate the autocomplete function on the "myInput" element, and pass along the countries array as possible autocomplete values:*/
//autocomplete(document.getElementById("phone_numbers_client"), countries);
</script>