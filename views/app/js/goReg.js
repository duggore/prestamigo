function goReg(){
	var connect, form, result, user, pass, dir_domic, dir_negoc, dir_ciu, giro_negoc,tel, agen_cobro;
	user = __('user_name').value;
	dir_domic = __('user_dir').value;
	dir_negoc = __('user_dirNeg').value;
	dir_ciu = __('user_dirCiu').value;
	giro_negoc = __('user_giro').value;
	tel = __('user_tel').value;
	agen_cobro = __('user_agente').value;
	// sesion = __('session_login').checked ? true : false;

	if (user != '' && dir_domic != '' && dir_negoc !='' && dir_ciu !='' && giro_negoc !='' && tel !='' && agen_cobro !=''){
		form = 'user=' + user + '&dir_dom=' + dir_domic + '&dir_negoc=' + dir_negoc +'&dir_ciu=' +dir_ciu 
		+ '&giro_negoc=' +giro_negoc + '&tel=' +tel + '&agen_cobro=' +agen_cobro;
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
	
	id_user = __('user').value;
	user_name = __('user_name').value;
	dir_domic = __('user_dir').value;
	dir_negoc = __('user_dirNeg').value;
	dir_ciu = __('user_dirCiu').value;
	giro_negoc = __('user_giro').value;
	tel = __('user_tel').value;
	agen_cobro = __('user_agente').value;
	// sesion = __('session_login').checked ? true : false;

	if (user != '' && dir_domic != '' && dir_negoc !='' && dir_ciu !='' && giro_negoc !='' && tel !='' && agen_cobro !=''){
		form = 'user_name=' + user_name + '&dir_dom=' + dir_domic + '&dir_negoc=' + dir_negoc +'&dir_ciu=' +dir_ciu 
		+ '&giro_negoc=' +giro_negoc + '&tel=' +tel + '&agen_cobro=' +agen_cobro + '&id_user=' +id_user;
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
	__('modifica').style.display = "none";
	__('elimina').style.display = "none";
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
                		    __('user_name').value = res.nom;
                		    __('user_dir').value = res.dir1;
                		    __('user_dirNeg').value = res.dir2;
	                        __('user_dirCiu').value = res.dir3;
	                        __('user_giro').value = res.giro;
	                        __('user_tel').value = res.tel;
                            __('user_agente').value = res.age; 
                            __('imp_prestamo').innerHTML = res.imp_pres;
                            // imp_prestamo
                            __('num_prestamo').innerHTML = res.cre; 
                            __('p_diario').innerHTML = res.pag_d; 
	                        __('modifica').style.display = "inline-block";
	                        __('elimina').style.display = "inline-block";

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


