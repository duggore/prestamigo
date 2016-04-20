<?php 
	if(!empty($_POST['user']) and !empty($_POST['imp']) and !empty($_POST['int']) and !empty($_POST['tipo']) and !empty($_POST['prestamo'])  and !empty($_POST['fecha'])){
		$db = new Conexion();
		$id = $_POST['user'];
		$imp = $_POST['imp'];
		$int = $_POST['int'];
		$tipo = $_POST['tipo'];
		$prestamos=$_POST['prestamo'];
		$fecha=$_POST['fecha'];
		
		$sql2= $db->query("SELECT NUM_CLI FROM movpag WHERE NUM_CLI= '$id' LIMIT 1");

		

		if ($db->runs($sql2) > 0){

		
			 $html= '
					<div class="alert alert-dismissible alert-warning">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error </strong> ya existe un número de prestamo para este cliente';  

		}

		else{

	           	$sql = $db->query("INSERT INTO movpag(NUM_CLI, REF_ERE, TIP_PAG, FEC_PAG, IMP_PAG, NUM_FAC, NUM_AGE)
				VALUES ('$id','$id', '$tipo', '$fecha', '$prestamos','$id','$id')");
					

				if ($sql)
				{		
		              $html= '
						<div class="alert alert-dismissible alert-success">
		  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
		              <strong>Datos</strong> guardados Correctamente.';         
				}
				else
				{
					$html= '<div class="alert alert-dismissible alert-danger">
			  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			              <strong>Error</strong> al guardar los datos.
			              </div>';
				}

			}

		
		$db->close();
		
	}
	
	else{
			$html= '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong>Campos vacios.
	              </div>';
	}

	echo $html;
?>

