<?php 
	if(!empty($_POST['user']) and !empty($_POST['imp']) and !empty($_POST['int']) and !empty($_POST['tipo']) and !empty($_POST['prestamo'])  and !empty($_POST['fecha']) and !empty($_POST['agente'])){
		$db = new Conexion();
		$id = $_POST['user'];
		$imp = $_POST['imp'];
		$int = $_POST['int'];
		$tipo = $_POST['tipo'];
		$prestamo=$_POST['prestamo'];
		$fecha=$_POST['fecha'];
		$agente=$_POST['agente'];
		
		$sql2= $db->query("SELECT * FROM totfac WHERE NUM_CLI='$id'  AND STA_TUS='A'  LIMIT 1");

		

		if ($db->runs($sql2) > 0){

		
			 $html= '
					<div class="alert alert-dismissible alert-warning">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error </strong> ya existe un número de prestamo para este cliente y esta Activo';  

		}

		else{

	           	$sql = $db->query("INSERT INTO totfac(NUM_CLI,TOT_FAC,POR_INT,FEC_FAC,NUM_AGE,STA_TUS,TIP_PAG,FEC_PAG,TOT_PAG,SAL_DOF)
				VALUES ('$id','$imp', '$int', '$fecha', '$agente','A','$tipo','$fecha','$imp','$prestamo')");
					

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

