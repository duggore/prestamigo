function goReg(){
	var connect, form, result, user, pass, dir_domic, dir_negoc, dir_ciu, giro_negoc,tel, agen_cobro;
	user = __('user_name').value;
	dir_domic = __('user_dir').value;
	dir_negoc = __('user_dirNeg').value;
	dir_ciu = __('user_dirCiu').value;
	giro_negoc = __('user_giro').value;
	tel = __('user_tel').value;
	agen_cobro = __('user_agente').value;
	zona = __('user_zona').value;
	bloqueo = __('user_bloq').value;
	
	// sesion = __('session_login').checked ? true : false;

	if (user != '' && dir_domic != '' && dir_negoc !='' && dir_ciu !='' && giro_negoc !='' && tel !='' && agen_cobro !='' && zona !=''){
		form = 'user=' + user + '&dir_dom=' + dir_domic + '&dir_negoc=' + dir_negoc +'&dir_ciu=' +dir_ciu 
		+ '&giro_negoc=' +giro_negoc + '&tel=' +tel + '&agen_cobro=' +agen_cobro + '&zona=' +zona;
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

	connect.open('POST','ajax.php?mode=registro',true);
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

function goModifica(){
	var connect, form, result, user, pass, dir_domic, dir_negoc, dir_ciu, giro_negoc,tel, agen_cobro;
	
	id_user = __('user_folio').value;
	user_name = __('user_name').value;
	dir_domic = __('user_dir').value;
	dir_negoc = __('user_dirNeg').value;
	dir_ciu = __('user_dirCiu').value;
	giro_negoc = __('user_giro').value;
	tel = __('user_tel').value;
	agen_cobro = __('user_agente').value;
	zona = __('user_zona').value;
	bloqueo = __('user_bloq').value;
	
	if (user != '' && dir_domic != '' && dir_negoc !='' && dir_ciu !='' && giro_negoc !='' && tel !='' && agen_cobro !='' && zona !='' && bloqueo !=''){
		form = 'user_name=' + user_name + '&dir_dom=' + dir_domic + '&dir_negoc=' + dir_negoc +'&dir_ciu=' +dir_ciu 
		+ '&giro_negoc=' +giro_negoc + '&tel=' +tel + '&agen_cobro=' +agen_cobro + '&id_user=' +id_user + '&zona=' +zona + '&bloqueo=' +bloqueo;
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

	connect.open('POST','ajax.php?mode=modifica',true);
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

function runScriptReg(e){
	if(e.keyCode == 13){
		goReg();
	}
}

function LimpiarCampos()
{	
	__('user').value = "";
	__('user_name').value = "";
	__('user_dir').value = "";
	__('user_dirNeg').value = "";
	__('user_dirCiu').value = "";
	__('user_giro').value = "";
	__('user_tel').value = "";
	__('user_agente').value = "";
	__('user_zona').value = "";
	__('user_folio').value = "";
	__('modifica').style.display = "none";
	__('elimina').style.display = "none";
   __('muestra').style.display = "none";
    __('muestra2').style.display = "none";
    __('muestra3').style.display = "none";
    __('muestra4').style.display = "none";
    __('muestra5').style.display = "none";
    __('muestra6').style.display = "none";
}


function Buscar(id){
		

        var par = {
              "val" : id
        };

        $.ajax({
                data:  par,
                url:   '?view=modifica',
                type:  'POST',
                dataType:  'json',
                success:  function (res) {	
                		if(res.id =='1')
                		// else
                		{
                			__('_AJAX_REG_').innerHTML = res.mensaje;
                		}

                		   if(res.id =='2')
                		{	
                			// __('_AJAX_REG_').innerHTML = res.mensaje;
                			__('user_folio').value = res.num;
                		    __('user_name').value = res.nom;
                		    __('user_dir').value = res.dir1;
                		    __('user_dirNeg').value = res.dir2;
	                        __('user_dirCiu').value = res.dir3;
	                        __('user_giro').value = res.giro;
	                        __('user_tel').value = res.tel;
                            __('user_agente').value = res.age; 
                            __('user_zona').value = res.zona;
                            __('imp_prestamo').innerHTML = res.imp_pres;
                            __('fol_pres').innerHTML = res.cre; 
                            __('p_diario').innerHTML = res.pag_d; 
                            __('num_prestamo').innerHTML = res.num_presta; 
                            __('saldo').innerHTML = res.saldo; 
                            __('ult_pres').innerHTML = res.ult_pres; 
                            __('pag_res').innerHTML = res.pag_res; 
                            __('ult_pag').innerHTML = res.ult_pag; 
                            __('fec_alta').innerHTML = res.fec_alta; 
                            __('user_bloq').value = res.user_bloq; //p
	                        __('modifica').style.display = "inline";
	                        __('elimina').style.display = "inline";
	                        __('muestra').style.display = "inline";
	                        __('muestra2').style.display = "inline";
	                        __('muestra3').style.display = "inline";
	                        __('muestra4').style.display = "inline";
	                        __('muestra5').style.display = "inline";
	                        __('muestra6').style.display = "inline";

	                        // pag_d
	                        // __('imprimir').style.display = "block";
                		}
                		if(res.id =='3')
                		// else
                		{
                			__('_AJAX_REG_').innerHTML = res.mensaje;
                		}

                    }
        });
      
}


