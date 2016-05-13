function goPrestamo(){
	var connect, form, result, user, importe, interes, tipo, prestamo, imp;
	user = $('#user_cli').html();
	importe = __('user_imp').value;
	interes	= $('#user_int').html();
	tipo = __('user_tip').value;
	prestamo = $('#user_pres').html();
	fecha = __('user_fec').value;
	// usr_id = __('user_id').value;
	// agente = __('user_agente').value;
	
	// sesion = __('session_login').checked ? true : false;

	if (user != ''  && importe != '' && tipo != '' && interes != ''  && prestamo != '' && fecha != ''){
		form = 'user=' + user + '&imp=' + importe + '&int=' + interes +'&tipo=' + tipo +'&prestamo=' + prestamo +'&fecha=' + fecha;
		connect =  window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
		connect.onreadystatechange = function(){
			if(connect.readyState == 4 && connect.status == 200){
				if (connect.responseText == 1){
				  	location.reload();
				}
				
				else{
					__('_AJAX_PRE_').innerHTML = connect.responseText;
				}
			}
			else if (connect.readyState != 4){
				// window.location.reload();
			}
	}

	connect.open('POST','ajax.php?mode=prestamo',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
	}

	else
	{
		result = '<div class="alert alert-dismissible alert-danger">';
				result += '<button type="button" class="close" data-dismiss="alert">&times;</button>';
            	result +='<h4>Error!</h4>';
            	result +='<p><strong> Todos los campos deben estar llenos regalados</strong></p>';
        		result +='</div>';	
        		__('_AJAX_PRE_').innerHTML = result;
	}
}

function runScriptpres(e){
	if(e.keyCode == 13){
		Id();
	}
}



function LimpiarCampos()
{
	
	__('user_name').innerHTML= "";
	__('user_cli').innerHTML= "";
	__('user_imp').value = "";
	__('user_int').innerHTML= "";
	__('user_pres').innerHTML= "";
	__('user_tip').value = "";
    __('user_pagD').innerHTML = "";
	// __('user_fec').value = "";
    __("sal_final").innerHTML = "";
	// __('user_agente').value = "";
	__('user_id').value = "";
	__('cancelar').style.display = 'none';
	__('imprimir').style.display = 'none';
}

function Calcula(valor){
        var parametro = {
              "valor" : valor
        };

        $.ajax({
                data:  parametro,
                url:   '?view=interes',
                type:  'POST',
                dataType:  'json' ,
                success:  function (response) {
                        $("#user_int").html(response.m1);
                        $("#user_pres").html(response.m2);
                        $("#user_pagD").html(response.m3);
                        $("#sal_final").html(response.m4);
                    }
        });
}


function Buscar(val){
		// var connect;

        var par = {
              "val" : val
        };

        $.ajax({
                data:  par,
                url:   '?view=busquedaname',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {
                		if(res.id =='1')
                		{	
                			__('_AJAX_PRE_').innerHTML = res.mensaje;
                			__('user_fec').value = res.fec;
                		    __('user_name').innerHTML = res.nom;
                		    __('user_cli').innerHTML = res.num;
                		    __('user_imp').value = res.pag;
	                        __('user_int').innerHTML = res.int;
	                        __('user_pres').innerHTML = res.pres;
	                        __('user_tip').value = res.tipo;
                            // __('user_pagD').html = res.pagdiario;
                            // __('sal_final').html = res.saldo;
	                        // __('user_agente').value = res.age;
                            // __('sal_final').value = res.saldof;  pendiente
	                        // __('cancelar').style.display = "block";
	                        // __('imprimir').style.display = "block";
	                        __('user').value = "";
                		}
                		if(res.id == '2')
                		{	
                			__('_AJAX_PRE_').innerHTML = res.mensaje;
                		    __('user_name').innerHTML = res.nom;
                		    __('user_cli').innerHTML = res.num;
	                        __('user').value = "";
                		}

                		if(res.id == '3')
                		{	
                			__('_AJAX_PRE_').innerHTML = res.mensaje;
                		}
                	}
        });
      
}

function Id(id){
		

        var par = {
              "val" : id
        };

        $.ajax({
                data:  par,
                url:   '?view=busquedaid',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {	
                		   if(res.id =='1')
                		{	
                			__('_AJAX_PRE_').innerHTML = res.mensaje;
                			__('user_fec').value = res.fec;
                		    __('user_name').innerHTML = res.nom;
                		    __('user_cli').innerHTML = res.num;
                		    __('user_imp').value = res.pag;
	                        __('user_int').innerHTML = res.int;
	                        __('user_pres').innerHTML = res.pres;
	                        __('user_tip').value = res.tipo;
	                        // __('user_agente').value = res.age;
                            __('sal_final').innerHTML = res.saldof; 
                            __('user_pagD').innerHTML = res.pagdiario; 
	                        __('cancelar').style.display = "inline-block";
	                        __('imprimir').style.display = "inline-block";
	                        __('user').value = "";
                		}
                		if(res.id == '2')
                		{	
                			__('_AJAX_PRE_').innerHTML = res.mensaje;
                		    __('user_name').innerHTML = res.nom;
                		    __('user_cli').innerHTML = res.num;
	                        __('user').value = "";
                		}

                		if(res.id == '3')
                		{	
                			__('_AJAX_PRE_').innerHTML = res.mensaje;
                		    __('user_name').innerHTML = res.nom;
                		    __('user_cli').innerHTML = res.num;
	                        __('user').value = "";
                		}

                		if(res.id =='4')
                		{

	                        // __('user_name').innerHTML = res.nom;
	                        __('user_name').innerHTML = res.nom;
                		    __('user_cli').innerHTML = res.num;
                		    // __('user').value = "";
	                     	// __('user').value = "";
                        }

                    }
        });
      
}



