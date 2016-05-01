<?php  
	if(!empty($_POST['fec_cha']) and !empty($_POST['tot_apli'])){
		$db = new Conexion();
		$fol_cre = $_POST['fol_cre'];
		$fec_cha = $_POST['fec_cha'];
		$tot_apli = $_POST['tot_apli'];
		
		$sql= $db->query("SELECT * FROM totfac WHERE NUM_FAC='$fol_cre';");

		if ($db->rows($sql) > 0){
			$row = $db->runs($sql);
			$NUM_CLI = $row['NUM_CLI'];
			$NUM_FAC = $row['NUM_FAC'];
			

			$sql2 = $db->query("INSERT INTO movpag(NUM_CLI)
			VALUES ('$NUM_CLI');");

			// $sql = $db->query("INSERT INTO catacli(NOM_CLI, DIR_NUM, DIR_COL, DIR_CIU, SUC_URS, TEL_CLI, NUM_AGE)
			// VALUES ('$user','$dir_dom','$dir_negoc', '$dir_ciu', '$giro_negoc', '$tel', '$agente')");
			$psql = "SELECT MAX(NUM_FACI) AS FACI FROM fecope WHERE NUM_FAC=?;";
			$prepare_sql = $db->prepare($psql);
			$prepare_sql->bind_param('i',$NUM_FAC);
			$prepare_sql->execute();
			$prepare_sql->bind_result($pago);
			$prepare_sql->fetch();
			

			$sql3 = $db->query("INSERT INTO fecope(NUM_FACI, NUM_FAC)
			VALUES ('$pago','$NUM_FAC');");

		
		// 	 $html= '
		// 			<div class="alert alert-dismissible alert-warning">
	 //  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	 //              <strong>Error </strong> ya existe un número de prestamo para este cliente y esta Activo';  

		// }

		// else{

	 //           	$sql = $db->query("INSERT INTO totfac(NUM_CLI,TOT_FAC,POR_INT,FEC_FAC,NUM_AGE,STA_TUS,TIP_PAG,FEC_PAG,TOT_PAG,SAL_DOF)
		// 		VALUES ('$id','$imp', '$int', '$fecha', '$agente','A','$tipo','$fecha','$imp','$prestamo')");
					

				if ($sql2 )
				{		
		              $html= '
						<div class="alert alert-dismissible alert-success">
		  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
		              <strong>Datos</strong> guardados Correctamente.';        
		              $html .= var_dump($pago) ;
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