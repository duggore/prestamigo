function goPago(){
	var connect, form, result, user, importe, interes, tipo, prestamo, imp;
	user = $('#user_cli').html();
	importe = __('user_imp').value;
	interes	= $('#user_int').html();
	tipo = __('user_tip').value;
	prestamo = $('#user_pres').html();
	// sesion = __('session_login').checked ? true : false;

	if (user != ''  && interes != '' && tipo != '' && importe != '' && importe != ''){
		form = 'user=' + user + '&imp=' + importe + '&int=' + interes +'&tipo=' + tipo +'&prestamo=' + prestamo ;
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
				
			}
	}

	connect.open('POST','ajax.php?mode=pago',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
	}

	else
	{
		result = '<div class="alert alert-dismissible alert-danger">';
            	result +='<h4>Error!</h4>';
            	result +='<p><strong> Todos los campos deben estar llenos regalados</strong></p>';
        		result +='</div>';	
        		__('_AJAX_PRE_').innerHTML = result;
	}
}

function runScriptPago(e){
	if(e.keyCode == 13){
		goPago();
	}
}



function LimpiarCampos()
{
	__('user_busca').value = "";
	__('user_name').innerHTML= "";
	__('user_cli').innerHTML= "";
	__('user_imp').value = "";
	__('user_int').innerHTML= "";
	__('user_pres').innerHTML= "";
	__('user_tip').value = "";
}


function Buscar(val){
        var par = {
              "val" : val
        };

        $.ajax({
                data:  par,
                url:   '?view=llenaPag',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {
                        $("#user_name").html(res.nom);
                        $("#user_cre").html(res.cre);
                        $("#user_tcre").html(res.tcre);
                    }
        });
}