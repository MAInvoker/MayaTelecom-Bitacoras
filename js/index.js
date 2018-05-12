/* JS & JQuery methods and handlers used on index */

/*****************************************************************************

						objetos globales más usados

#header_title: titulo del header cuando se carga un elemento en pantalla
	
#support-menu: menu izquierdo del dashboard para soportes tecnicos

#admin-menu: menu derecho de dashboard para admins

/*****************************************************************************/

$( document ).ready(function() {
    console.log( "ready!" );
    getSessionType();
});


function getSessionType(){
	$.ajax(
      {
        url: "core/GetSessionType.php",
        type: "GET",
        success: function(data){
        	console.log(data);
        	var json_response = JSON.parse(data);
			if(json_response.response.type == 0){
				
				//mostrando menu
				$("#support-menu").show();
				getBitacoraForm();
			}else if(json_response.response.type == 1){

				//mostrando menu
				$("#admin-menu").show();
			}
        },
        error: function(data){
          	
        },
    });
}

function getBitacoraForm(){
	//ponendo el titulo
	$("#header_title").html('<i class="fa fa-dashboard"></i> Crear Bitácora');
}