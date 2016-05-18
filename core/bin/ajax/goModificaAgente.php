<?php  

	if(!empty($_POST['user']) and (!empty($_POST['venta']) OR $_POST['venta']== '0') and !empty($_POST['zona']) and (!empty($_POST['comision'])  OR $_POST['comision']=='0')){
		$db = new Conexion();
		$id= $_POST['id'];
		$user = $_POST['user'];
		$venta = $_POST['venta'];
		$zona = $_POST['zona'];
		$comision = $_POST['comision'];
		// $hora = 

		
		$sql = $db->query("UPDATE cataage SET NOM_AGE='$user',VTA_AGE='$venta',NUM_ZON='$zona',POR_COM='$comision' WHERE NUM_AGE='$id';");


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