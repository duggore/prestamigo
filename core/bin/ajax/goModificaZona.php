<?php  

	if(!empty($_POST['zona'])){
		$db = new Conexion();
		$id= $_POST['id'];
		$zona = $_POST['zona'];
		// $hora = 

		
		$sql = $db->query("UPDATE catazon SET DES_ZON='$zona' WHERE NUM_ZON='$id';");


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