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
	form = 'user=' + user + '&dir_dom=' + dir_dom + '&dir_negoc=' + dir_negoc +'&dir_ciu=' +dir_ciu 
	+ '&giro_negoc=' +giro_negoc + '&tel=' +tel + '&agen_cobro=' +agen_cobro;
	connect =  window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
	connect.onreadystatechange = function(){
		if(connect.readyState == 4 && connect.status == 200){
			if (connect.responseText == 1){
				result = '<div class="alert alert-dismissible alert-success">';
            	result +='<h4>Conectado!</h4>';
            	result +='<p><strong>Estamos redireccionandote...</strong></p>';
        		result +='</div>';	
        		__('_AJAX_LOGIN_').innerHTML = result;
        		location.reload();
			}
			else{
				__('_AJAX_LOGIN_').innerHTML = connect.responseText;
			}
		}
		else if (connect.readyState !=4){
			result = '<div class="alert alert-dismissible alert-warning">';
            result +='<button type="button" class="close" data-dismiss="alert">&times;</button>';
            result +='<h4>Procesando...</h4>';
            result +='<p><strong>Estamos intentando logearte...</strong></p>';
        	result +='</div>';
        	__('_AJAX_LOGIN_').innerHTML = result;
		}
	}

	connect.open('POST','ajax.php?mode=registro',true);
	connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
	connect.send(form);
}

function runScriptReg(e){
	if(e.keyCode == 13){
		goReg();
	}
}