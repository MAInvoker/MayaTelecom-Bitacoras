
<div class="w3-panel w3-row-padding" >
	<div>
		<form id="filter-form">
			<strong style="font-size: 18px;">Filtrar por</strong>
			<select id="selected-filter" name="selected-filter">
				<option value="0">-- Ninguno en específico --</option>
				<option value="nombre">Soporte Técnico</option>
				<option value="nodo">Nodo</option>
				<option value="emisor">Emisor</option>
			</select><br>
			<input type="hidden" name="date1" id="date1">
			<input type="hidden" name="date2" id="date2">
			<input id="filter-text" type="text" name="filter-text" style="width: 400px;margin-top: 10px;" placeholder="Ingrese parámetro de búsqueda" onkeypress="return pulsar(event)">
		</form>
	</div>
	<div style="position: absolute;margin-left: 20%;margin-top: 20px;">
		<div id="date-manager-body">
			
		</div>
	</div>
	<div style="margin-top: 20px;">
		<div >
			<strong style="font-size: 20px;">Fecha Inicio</strong> <input style="margin-left: 50px;" type="button" name="submit_calendar" value="Filtrar Bitácoras" onclick="getBothCalendarDates();">
			<div id="my-first-calendar"></div>
		</div>
		<div>
			<strong style="font-size: 20px;">Fecha Final</strong>
			<div id="my-second-calendar"></div>
		</div>
	</div>
</div>
<script type="text/javascript">
	// Get the element
	var current_date = new Date();
	setFirstCalendar(current_date);
	setSecondCalendar(current_date);
</script>