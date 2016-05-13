function goPago(){
	var connect, form, result, user, importe, interes, tipo, prestamo, imp;
	// user = $('#user_cli').html();

	fec_cha = __('fec_pag').value;
	tot_apli = $('#pag_dia').html();
	// interes	= $('#user_int').html();
	fol_cre = __('fol_cre').value;
	
	
	
	// interes	= $('#user_int').html();
	// tipo = __('user_tip').value;
	// prestamo = $('#user_pres').html();
	// sesion = __('session_login').checked ? true : false;

	if (fec_cha != ''  && tot_apli != '' && pag_dia != ''){
		form = 'fec_cha=' + fec_cha + '&tot_apli=' + tot_apli + '&fol_cre=' + fol_cre;
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
				LimpiarCampos();
				 window.location.reload();
			}
	}

	connect.open('POST','ajax.php?mode=pago',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
	}

	else
	{
		result = '<div class="alert alert-dismissible alert-danger">';
				result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
            	result +='<h4>Error!</h4>';
            	result +='<p><strong> Todos los campos deben estar llenos</strong></p>';
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
	__('fol_cre').value = "";
	// __('fec_pag').value= "";
	__('pag_dia').innerHTML= "";
	__('tot_cre').innerHTML = "";
	__('tot_pag').innerHTML= "";
	__('sal_cre').innerHTML= "";
	__('sta_tus').innerHTML = "";
}


function Id(id){
        var par = {
              "val" : id
        };

        $.ajax({
                data:  par,
                url:   '?view=llenaPag',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {	
                		    __('tot_cre').innerHTML = res.tot_pag;
	                        __('tot_pag').innerHTML = res.pag;
	                        __('pag_dia').innerHTML = res.pag_dia;
	                        __('sal_cre').innerHTML = res.sal_fin;
	                        __('sta_tus').innerHTML = res.sta_tus;
                    }

        });
      
}