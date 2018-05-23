<?php


?>
<div class="w3-panel w3-row-padding" >
	<div style="position: absolute;margin-left: 20%;margin-top: 20px;">
		<div id="date-manager-body">
			
		</div>
	</div>
	<div>
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