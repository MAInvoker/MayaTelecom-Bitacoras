/* JS & JQuery methods and handlers used on index */

/*****************************************************************************

						objetos globales más usados

#header_title: titulo del header cuando se carga un elemento en pantalla
	
#support-menu: menu izquierdo del dashboard para soportes tecnicos

#admin-menu: menu derecho de dashboard para admins

#container_body: div en donde se cargaran todos los demas scripts visuales

#header_name: nombre del soporte tecnico que aparece en el header

/*****************************************************************************/

$( document ).ready(function() {
    console.log( "ready!" );
    getSessionType();
});


function getSessionType(){
	$.ajax(
      {
        url: "GetSessionType.php",
        type: "GET",
        success: function(data){
        	console.log(data);
        	var json_response = JSON.parse(data);
			if(json_response.response.type == 1){
				
				//mostrando menu
				$("#support-menu").show();
				setHeaderName(json_response.response.user_name);
				getBitacoraForm();
			}else if(json_response.response.type == 0){
				//mostrando menu
				$("#admin-menu").show();
                setHeaderName(json_response.response.user_name);
			}
        },
        error: function(data){
          	
        },
    });
}

function setHeaderName(name){
	var split_name = name.split(" ");
		$("#header_name").text(split_name[0]);
}

function getBitacoraForm(){
	//ponendo el titulo
	$("#header_title").html('<i class="fa fa-dashboard"></i> Crear Bitácora');

	$.ajax(
      {
        url: "LogbookForm.php",
        type: "GET",
        success: function(data){
        	//console.log(data);
        	$("#container_body").append(data);
        },
        error: function(data){
          	
        },
    });
}