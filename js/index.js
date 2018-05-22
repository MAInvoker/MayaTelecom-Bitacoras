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

function getBitacorasOverTime(){
  //ponendo el titulo
  $("#header_title").html('<i class="fa fa-dashboard"></i> Gestionar Bitácoras');

  $.ajax(
      {
        url: "LogbookManager.php",
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
        getBitacoraPage();
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
        	getCategoriesSelect();
          getNodoSelect();
        	getClientPhoneNumbers();
        },
        error: function(data){
          	
        },
    });
}

function getBitacoraPage(){
  $("#header_title").html('<i class="fa fa-dashboard"></i> Bitacoras del Soporte Técnico');

  $.ajax(
      {
        url: "GetBitacoraPage.php",
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

function getCategoriesSelect(){
	$.ajax(
      {
        url: "GetCategories.php",
        type: "GET",
        success: function(data){
        	//console.log(data);
        	$("#container_select_cat").empty();
        	$("#container_select_cat").append(data);

        },
        error: function(data){
          	
        },
    });	
}

function getNodoSelect(){
  $.ajax(
      {
        url: "GetNodos.php",
        type: "GET",
        success: function(data){
          //console.log(data);
          $("#container_select_nodo").empty();
          $("#container_select_nodo").append(data);
        },
        error: function(data){  
        },
    }); 
}

function getClientPhoneNumbers(){
	$.ajax(
      {
        url: "GetClientPhones.php",
        type: "GET",
        success: function(data){
        	console.log(data);
       		var clientes = new Array();
       		var json_response = JSON.parse(data);
       		for (var i = 0; i < json_response.response.length; i++) {
       			//console.log(json_response.response[i].nombre);
       			clientes[i] = json_response.response[i].telefono;
       		}
       		autocomplete(document.getElementById("phone_numbers_client"), clientes);

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

function saveBitacora(){
  if( $("#phone_client").val() != "" && $("#asunto").val() != "" && $("#resumen_text").val() != "" && $("#select_nodo").val() != "" && $("#select_categoria").val() != ""){
    $.ajax(
      {
          url: "SaveBitacora.php",
          data: $("#form_bit").serialize(),
          type: "POST",
          success: function(data){
            console.log("valor devuelto: "+data);
             $("#select_nodo").val("");
             $("#select_categoria").val("");
             $("#phone_numbers_client").val("");
             $("#asunto").val("");
             $("#resumen_text").val("");
            if(data == 1 ){
              bootbox.alert({
                message: "Reporte guardaoa satisfactoriamente",
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
          message: "Llene todos los campos",
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

/*********************AutoComplete Code ***************************/
function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = '<strong style="margin-right: 0px;min-width:0px;">' + arr[i].substr(0, val.length) + '</strong>';
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
          b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
        x[i].parentNode.removeChild(x[i]);
      }
    }
  }
  /*execute a function when someone clicks in the document:*/
  document.addEventListener("click", function (e) {
      closeAllLists(e.target);
  });
}
/********************************************************************************/