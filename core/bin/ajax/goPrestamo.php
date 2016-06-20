<?php 
	if(!empty($_POST['user']) and !empty($_POST['imp']) and !empty($_POST['int']) and !empty($_POST['tipo']) and !empty($_POST['prestamo'])  and !empty($_POST['fecha'])){
		$db = new Conexion();
		$id = $_POST['user'];
		$imp = $_POST['imp'];
		$int = $_POST['int'];
		$tipo = $_POST['tipo'];
		$prestamo=$_POST['prestamo'];
		$fecha=$_POST['fecha'];
		// $agente=$_POST['agente'];
		
		$sql2= $db->query("SELECT * FROM totfac WHERE NUM_CLI='$id'  AND STA_TUS='A'  LIMIT 1");

		$sql7 = $db->query("SELECT NUM_AGE FROM catacli WHERE NUM_CLI='$id';");
		$row6 = $db->runs($sql7);
		$NUM_AGE= $row6['NUM_AGE'];
	

		// $fecha = strtotime($row['FEC_PAG']);
	// $fec_cli = date("d-m-Y", $fecha);

		

		if ($db->rows($sql2) > 0){

		
			 $html= '
					<div class="alert alert-dismissible alert-warning">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error </strong> ya existe un número de prestamo para este cliente y esta Activo';  

		}

		else{
				
				$sql2= $db->query("SELECT SUM(TOT_PAG) AS TOT_PAG FROM totfac WHERE NUM_CLI='$id'");
	           	$row2 = $db->runs($sql2);
	           	$NUM_FACS = $row2['TOT_PAG'] + $imp;

	           	$sql7 = $db->query("SELECT * FROM totfac ORDER BY NUM_FAC DESC LIMIT 1");
				$row = $db->runs($sql7);
				$NUM_FAC = $row['NUM_FAC'] + 1;
				
				
	           	$pag_dia = $imp/30; 
	           	$sql3= $db->query("UPDATE catacli SET SAL_CLI='$prestamo',NUM_FACS=NUM_FACS+1, IMP_FACS='$prestamo', DES_CLI='30',IMP_PAGD='$pag_dia',IMP_PRE= '$imp',IMP_FACS ='$NUM_FACS', BLO_QUEO='N', ULT_PAG='$fecha',ULT_COM ='$fecha',NUM_FAC='$NUM_FAC' WHERE NUM_CLI='$id'");

	           	$sql = $db->query("INSERT INTO totfac(NUM_CLI,TOT_FAC,POR_INT,FEC_FAC,NUM_AGE,STA_TUS,TIP_PAG,FEC_PAG,TOT_PAG,SAL_DOF)
				VALUES ('$id','$prestamo', '$int', '$fecha', '$NUM_AGE','A','$tipo','$fecha','$imp','$imp')");


				$sql6 = $db->query("UPDATE fecope SET NUM_FAC='$NUM_FAC';");
				

				if (($sql3) && ($sql))
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

