function goRegZona(){
	var connect, form,result,zona;
	zona = __('zona_name').value;


	if (zona != ''){
		form = 'zona=' + zona;
		connect =  window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		connect.onreadystatechange = function(){
			if(connect.readyState == 4 && connect.status == 200){
				if (connect.responseText == 1){
		        	location.reload();
				}
				else{
					__('_AJAX_REG_').innerHTML = connect.responseText;
				}
			}
			else if (connect.readyState != 4){
				// LimpiarCampos();
				window.location.reload();
			}
	}

	connect.open('POST','ajax.php?mode=addZona',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
	}

	else
	{
		result = '<div class="alert alert-dismissible alert-danger">';
            	result +='<h4>Error!</h4>';
            	result +='<p><strong> Todos los campos deben estar llenos</strong></p>';
        		result +='</div>';	
        		__('_AJAX_REG_').innerHTML = result;
	}
}


function goModificaZona(){
	                			// zona_folio
	// user
	// zona_name
	var connect, form, result,zona,id;
	id = __('zona_folio').value;
	zona = __('zona_name').value;


	if (zona !=''){
		form = 'zona=' + zona  +'&id=' +id;
		connect =  window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		connect.onreadystatechange = function(){
			if(connect.readyState == 4 && connect.status == 200){
				if (connect.responseText == 1){
		        	location.reload();
				}
				else{
					__('_AJAX_REG_').innerHTML = connect.responseText;
					// window.location.reload();
				}
			}
			else if (connect.readyState != 4){
				LimpiarCampos();
				window.location.reload();
			}
	}

	connect.open('POST','ajax.php?mode=modificaZona',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
	}

	else
	{
		result = '<div class="alert alert-dismissible alert-danger">';
            	result +='<h4>Error!</h4>';
            	result +='<p><strong> Todos los campos deben estar llenos</strong></p>';
        		result +='</div>';	
        		__('_AJAX_REG_').innerHTML = result;
	}
}

// agente_name
// agente_venta
// user_zona
// agente_comision

function LimpiarCampos()
{
	
	__('zona_folio').value= "";
	__('user').value= "";
	__('zona_name').value = "";
 	__('modifica').style.display = "none";
    __('elimina').style.display = "none";
}


function runScriptReg(e){
	if(e.keyCode == 13){
		goRegZona();
	}
}

function Buscar(val){
		// var connect;

        var par = {
              "val" : val
        };

        $.ajax({
                data:  par,
                url:   '?view=llenaZona',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {
                		if(res.id =='1')
                		{	

                			__('zona_folio').value = res.id_zona;
                			__('zona_name').value = res.zona;
                		    // modifica
                		    __('modifica').style.display = "inline";
                		    __('elimina').style.display = "inline";
	                        // __('user').value = "";
                		}

                		if(res.id == '2')
                		{	
                			__('_AJAX_REG_').innerHTML = res.mensaje;
                		}
                	}
        });
      
}