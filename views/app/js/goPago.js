function goPago(){
	var connect, form, result, fec_cha, tot_apli, fol_cre;
	// user = $('#user_cli').html();

	fec_cha = __('fec_pag').value;
	tot_apli = $('#pag_dia').html();
	fol_cre = __('fol_cre').value;

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
				LimpiarCampos();
				
				__('user_id').window.location.reload();
				 // window.location.reload();
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
	__('user').value= "";
	__('pag_dia').innerHTML= "";
	__('tot_cre').innerHTML = "";
	__('tot_pag').innerHTML= "";
	__('sal_cre').innerHTML= "";
	__('sta_tus').innerHTML = "";
	__('opcancelar').innerHTML = "";
	__('ref_pag').innerHTML = "";
	__('for_pag').innerHTML = "";
	
	
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
                		    if(res.id == '1')
                		    {
                		    	
                		    	__('user').value = res.name;
                		    	__('tot_cre').innerHTML = res.tot_pag;
		                        __('tot_pag').innerHTML = res.pag;
		                        __('pag_dia').innerHTML = res.pag_dia;
		                        __('sal_cre').innerHTML = res.sal_fin;
		                        __('sta_tus').innerHTML = res.sta_tus;
		                        __('for_pag').innerHTML = res.forma_pago;
		                        __('ref_pag').innerHTML = res.referencia;
		                        __('opcancelar').innerHTML = res.cancelar;
		                        
		                        
                		    }

                		    if(res.id == '2' || res.id == '3')
                		    {
                		    	__('_AJAX_PRE_').innerHTML = res.mensaje;
                		    }
                    }

        });
      
}

function Buscar(nombre){
        var par = {
              "val" : nombre
        };

        $.ajax({
                data:  par,
                url:   '?view=busPagxNombre',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {	
                		    if(res.id == '1')
                		    {
                		    	
								__('fol_cre').value = res.id_fac;
                		    	__('tot_cre').innerHTML = res.pag_tot;
		                        __('tot_pag').innerHTML = res.num_pag;
		                        __('pag_dia').innerHTML = res.pag_dia;
		                        __('sal_cre').innerHTML = res.saldo;
		                        __('sta_tus').innerHTML = res.estatus;
		                        __('for_pag').innerHTML = res.tipo;
		                        __('opcancelar').innerHTML = res.cancelar;
                		    }
                		    if(res.id == '2')
                		    {
                		    	__('_AJAX_PRE_').innerHTML = res.mensaje;
                		    }
                    }

        });
      
}

                		    

