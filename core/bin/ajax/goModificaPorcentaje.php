<?php  

	if(!empty($_POST['interes'])){
		$db = new Conexion();
		$interes = $_POST['interes'];

		
		$sql = $db->query("UPDATE fecope SET POR_INT='$interes';");


		if ($sql)
		{
			$html = '<div class="alert alert-dismissible alert-success">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Datos</strong> modificados Correctamente.
	              </div>';
		}
		else
		{
			$html = '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong> al guardar los datos.
	              </div>';
		}

		$db->close();
	}


	else{
			$html= '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong> Todos los campos deben estar llenos.
	              </div>';
	}

	echo $html;
?>