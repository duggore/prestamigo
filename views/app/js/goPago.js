function goPago(){
	var connect, form, result, user, importe, interes, tipo, prestamo, imp;
	// user = $('#user_cli').html();

	fec_cha = __('fec_pag').value;
	tot_apli = __('tot_apli').value;
	fol_cre = __('fol_cre').value;
	
	// interes	= $('#user_int').html();
	// tipo = __('user_tip').value;
	// prestamo = $('#user_pres').html();
	// sesion = __('session_login').checked ? true : false;

	if (fec_cha != ''  && tot_apli != ''){
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
	__('fol_cre').value = "";
	__('fec_pag').value= "";
	__('tot_apli').value= "";
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
                		   // if(res.id =='1')
                		// {	
                			// __('_AJAX_PRE_').innerHTML = res.mensaje;
                			// __('fec_pag').innerHTML = res.fec;
                		    __('tot_cre').innerHTML = res.tot_pag;
                		    // __('for_pag').innerHTML = res.num;
                		    // __('ref_pag').innerHTML = res.pag;
	                        __('tot_pag').innerHTML = res.pag;
	                        __('sal_cre').innerHTML = res.sal_fin;
	                        __('sta_tus').innerHTML = res.sta_tus;
	                        // __('user_agente').value = res.age;
	                        // __('cancelar').style.display = "block";
	                        // __('imprimir').style.display = "block";
	                        // __('user').value = "";
                		// }
                		// if(res.id == '2')
                		// {	
                		// 	__('_AJAX_PRE_').innerHTML = res.mensaje;
                		//     __('user_name').innerHTML = res.nom;
                		//     __('user_cli').innerHTML = res.num;
	                 //        __('user').value = "";
                		// }

                		// if(res.id == '3')
                		// {	
                		// 	__('_AJAX_PRE_').innerHTML = res.mensaje;
                		//     __('user_name').innerHTML = res.nom;
                		//     __('user_cli').innerHTML = res.num;
	                 //        __('user').value = "";
                		// }

                		// if(res.id =='4')
                		// {

	                 //        // __('user_name').innerHTML = res.nom;
	                 //        __('user_name').innerHTML = res.nom;
                		//     __('user_cli').innerHTML = res.num;
                		//     // __('user').value = "";
	                 //     	// __('user').value = "";
                  //       }

                    }
        });
      
}