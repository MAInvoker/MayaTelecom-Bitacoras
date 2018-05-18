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
				console.log("support "+json_response.response.type);
				setHeaderName(json_response.response.user_name);
				getBitacoraForm();
			}else if(json_response.response.type == 0){
				//mostrando menu
				$("#admin-menu").show();
				console.log("admin "+json_response.response.type);
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
        	$("#container_body").empty();
        	$("#container_body").append(data);
        },
        error: function(data){
          	
        },
    });
}

function getCategoriesPage(){
	//ponendo el titulo
	$("#header_title").html('<i class="fa fa-dashboard"></i> Categorías Soporte Técnico');

	$.ajax(
      {
        url: "GetCategoriesPage.php",
        type: "GET",
        success: function(data){
        	//console.log(data);
        	$("#container_body").empty();
        	$("#container_body").append(data);
        },
        error: function(data){
          	
        },
    });
}

function showAddCatForm(){
	if( $("#cat_list_container").is(':visible') ){
		$("#header_title").html('<i class="fa fa-dashboard"></i> Añadir Categoría');
		$("#add_cat_title_btn").text("Cancelar");
		$("#edit_cat_title_btn").hide();
		$("#delete_cat_title_btn").hide();
	}else{
		$("#header_title").html('<i class="fa fa-dashboard"></i> Categorías Soporte Técnico');
		$("#add_cat_title_btn").text("Agregar nueva Categoría");
		$("#edit_cat_title_btn").show();
		$("#delete_cat_title_btn").show();
		getCategoriesPage();
	}
	$("#cat_list_container").toggle();
	$("#cat_form_container").toggle();
}

function saveCategory(){
	if( $("#cat_input").val() != "" ){
		$.ajax(
	    {
	        url: "SaveCategory.php",
	        data: $("#form_cat").serialize(),
	        type: "POST",
	        success: function(data){
	        	console.log("valor devuelto: "+data);
	        	$("#cat_input").val("");
	        	if(data == 1 ){
	        		bootbox.alert({
				        message: "Categoría guardada satisfactoriamente",
				        className: 'maya_bootbox'
				    });
	        	}else{
	        		bootbox.alert({
				        message: "Error en el servidor, contacte al desarrollador",
				        className: 'maya_bootbox'
				    });
	        	}
	        },
	        error: function(data){
	          	
	        },
	    });
	}else{
		bootbox.alert({
	        message: "No deje campos vacios",
	        className: 'maya_bootbox'
	    });
	}
}

function tryToDeleteCat(){
	var id_selected = 0;
	var flag_selected = false;
	$('#cat_list_container').find("input[type='checkbox']").each(function() {
        if($(this).is(":checked") && !flag_selected){
        	id_selected = $(this).attr('id');
        	flag_selected = true;
        }
	});

	if(id_selected!=0){
		var label_value = $("#lbl-"+id_selected).text();
		bootbox.confirm({
	        title: "Alerta",
	        message: "Está seguro de eliminar <strong>\""+label_value+"\"</strong>? Esta acción no se puede deshacer.",
	        buttons: {
	            cancel: {
	                label: '<i class="fa fa-times"></i> Cancelar'
	            },
	            confirm: {
	                label: '<i class="fa fa-check"></i> Confirmar'
	            }
	        },
	        callback: function (result) {
	            //console.log('This was logged in the callback: ' + result);
	            if(result){
	               deleteCategory(id_selected);
	            }
	        }
      	});
    }else{
    	bootbox.alert({
	        message: "Seleccione una Categoría para Eliminar",
	        className: 'maya_bootbox'
	    });
    }
}

function deleteCategory(id){
	$.ajax(
	    {
	        url: "DeleteCategory.php",
	        data: { cat_id: id },
	        type: "POST",
	        success: function(data){
	        	console.log("valor devuelto: "+data);
	        	if(data == 1 ){
	        		bootbox.alert({
				        message: "Categoría eliminada satisfactoriamente",
				        className: 'maya_bootbox'
				    });
				    getCategoriesPage();
	        	}else{
	        		bootbox.alert({
				        message: "Error en el servidor, contacte al desarrollador",
				        className: 'maya_bootbox'
				    });
	        	}
	        },
	        error: function(data){
	          	
	        },
	    });
}

function tryToEditCat(){
	var id_selected = 0;
	var flag_selected = false;
	$('#cat_list_container').find("input[type='checkbox']").each(function() {
        if($(this).is(":checked") && !flag_selected){
        	id_selected = $(this).attr('id');
        	flag_selected = true;
        }
	});

	if(id_selected!=0){
		var label_value = $("#lbl-"+id_selected).text();
		//Launching Edit pop up
		bootbox.prompt("Está editando <strong>\""+label_value+"\"</strong>", 
			function(result){
				console.log(result); 
				if(result != "" && result != null){
					editCategory(id_selected,result);
				}else if(result !=null ){
					bootbox.alert({
				        message: "No deje el campo vacío",
				        className: 'maya_bootbox'
				    });
				}
			}
		);
	
    }else{
    	bootbox.alert({
	        message: "Seleccione una Categoría para Editar",
	        className: 'maya_bootbox'
	    });
    }
}

function editCategory(id, text){
	$.ajax(
	    {
	        url: "EditCategory.php",
	        data: { cat_id: id, cat_edit: text },
	        type: "POST",
	        success: function(data){
	        	console.log("valor devuelto: "+data);
	        	if(data == 1 ){
	        		bootbox.alert({
				        message: "Categoría editada satisfactoriamente",
				        className: 'maya_bootbox'
				    });
				    getCategoriesPage();
	        	}else{
	        		bootbox.alert({
				        message: "Error en el servidor, contacte al desarrollador",
				        className: 'maya_bootbox'
				    });
	        	}
	        },
	        error: function(data){
	          	
	        },
		});
}