function goRegAgente(){
	var connect, form, result, user,venta,zona,comision;
	user = __('agente_name').value;
	venta = __('agente_venta').value;
	zona = __('user_zona').value;
	comision = __('agente_comision').value;


	if (user != '' && venta != '' && zona !='' && comision !=''){
		form = 'user=' + user + '&venta=' + venta + '&zona=' + zona +'&comision=' +comision;
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
				LimpiarCampos();
			}
	}

	connect.open('POST','ajax.php?mode=addAgente',true);
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


function goModificaAgente(){
	var connect, form, result, user,venta,zona,comision,id;
	id = __('agente_folio').value;
	user = __('agente_name').value;
	venta = __('agente_venta').value;
	zona = __('user_zona').value;
	comision = __('agente_comision').value;


	if (user != '' && venta != '' && zona !='' && comision !=''){
		form = 'user=' + user + '&venta=' + venta + '&zona=' + zona +'&comision=' +comision +'&id=' +id;
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

	connect.open('POST','ajax.php?mode=modificaAgente',true);
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
	
	__('agente_name').value= "";
	__('agente_venta').value= "";
	__('user_zona').value = "";
	__('agente_comision').value= "";
	__('agente_folio').value = "";
	__('user').value = "";
	__('registro').style.display = "inline";
	__('modifica').style.display = "none";
	__('elimina').style.display = "none";
	
	
	// __('cancelar').style.display = 'none';
	// __('imprimir').style.display = 'none';
}


function runScriptReg(e){
	if(e.keyCode == 13){
		goRegAgente();
	}
}

function Buscar(val){
		// var connect;

        var par = {
              "val" : val
        };

        $.ajax({
                data:  par,
                url:   '?view=llenaAgente',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {
                		if(res.id =='1')
                		{	
                			
                			__('agente_folio').value = res.id_agente;
                			__('agente_name').value = res.age;
                		    __('agente_venta').value = res.vta_age;
                		    __('user_zona').value = res.zona;
                		    __('agente_comision').value = res.por;
                		    // modifica
                		    __('modifica').style.display = "inline";
                		    __('elimina').style.display = "inline";
                		    __('registro').style.display = "none";
                		    
	                        // __('user').value = "";
                		}

                		if(res.id == '2')
                		{	
                			__('_AJAX_REG_').innerHTML = res.mensaje;
                		}
                	}
        });
      
}