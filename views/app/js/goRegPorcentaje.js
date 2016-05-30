function goModifica(){
	var connect, form, result,por_int;
	
	interes = __('por_int').value;
	
	if (interes != ''){
		form = 'interes=' + interes;
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
				window.location.reload();
			}
	}

	connect.open('POST','ajax.php?mode=porcentaje',true);
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

function LimpiarCampos()
{	
	__('por_int').value = "";

}