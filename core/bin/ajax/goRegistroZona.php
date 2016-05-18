<?php  

	if(!empty($_POST['zona'])){
		$db = new Conexion();
		$zona = $_POST['zona'];
		$fecha_alta = date('Y-m-d');
		date_default_timezone_set("America/Lima");
		$hora = date('H:i:s');
		// $hora = 

		
		$sql = $db->query("INSERT INTO catazon(DES_ZON,FEC_HA,HOR_A,CLA_USR)
			VALUES ('$zona','$fecha_alta','$hora','DIA')");

		if ($sql)
		{
			$html = '<div class="alert alert-dismissible alert-success">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Datos</strong> guardados Correctamente.
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