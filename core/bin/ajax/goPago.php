<?php  


// Verificar que se realice bien los pagos, ya que me esta almacenando pagos incorrectos

	if(!empty($_POST['fec_cha']) and !empty($_POST['tot_apli'])){
		
		$db = new Conexion();
		$fol_cre = $_POST['fol_cre'];
		$fec_cha = $_POST['fec_cha'];
		$tot_apli = $_POST['tot_apli'];
		
		// Sentencia que busca el id de totfac para poder verificar si ya exite 
		// algun pago en la tabla de totfac con ese id
		$sql= $db->query("SELECT * FROM totfac WHERE NUM_FAC='$fol_cre';");

		if ($db->rows($sql) > 0){
			// -- $sql = $db->query("SELECT * FROM totfac WHERE NUM_FAC='$fol_cre';");
			$row = $db->runs($sql);
			$NUM_CLI = $row['NUM_CLI'];
			$NUM_FAC = $row['NUM_FAC'];
			$ESTATUS = $row['STA_TUS'];
			$TOT_FAC = $row['SAL_DOF'];
			$TIP_PAG = $row['TIP_PAG'];
			// America/Lima
			date_default_timezone_set("America/Lima");
			$hora = date('H:i:s');

				if($ESTATUS == 'C' OR $ESTATUS == 'P')
				{
					 $html= '
							<div class="alert alert-dismissible alert-danger">
			  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
			              <strong>ATENCION</strong> no se puede aplicar pago a prestamos CANCELADOS o PAGADOS'; 
				}
				else
				{
					// Sentencia para insertar datos en la tabla movpag a partir de la consulta
					// $sql

					$sql2 = $db->query("INSERT INTO movpag(NUM_CLI,REF_ERE,TIP_PAG,FEC_PAG,IMP_PAG,NUM_FAC,NUM_AGE,HOR_A)
					VALUES ('$NUM_CLI','0','E','$fec_cha','$tot_apli','$NUM_FAC','01','$hora');");
					// $num_pag=mysql_insert_id();
					

					
					
					$sql3= $db->query("SELECT MAX(TOT.NUM_FAC) AS NUM_FAC, MAX(MOV.NUM_PAG) AS NUM_PAG FROM totfac AS TOT,movpag AS MOV;");
					$row9 = $db->runs($sql3);
					$NUM_FAC = $row9['NUM_FAC'];
					$NUM_PAG = $row9['NUM_PAG'];


					$sql4= $db->query("SELECT MAX(FEC_PAG) AS FECHA ,MAX(NUM_PAG) AS PAG FROM movpag WHERE NUM_FAC='$NUM_FAC';");
					$row3 = $db->runs($sql4);
					// $NUM_PAG = $row3['PAG'];
					$FECHA = $row3['FECHA'];
					$fecha = date('Y-m-d');
					$anio = date('Y');
					// Sentencia que inserta a la tabla fecope 
					$sql5 = $db->query("UPDATE fecope SET FE_CHA='$fecha',PERI_ODO='0',NUM_FAC='$NUM_FAC',NUM_PAG='$NUM_PAG',NUM_FACI='0',NUM_REP='0',ANI_O='$anio',POR_INT='0'");

					

				    $sal_cli = $TOT_FAC - $tot_apli;
				    // $NUMERO_PAG =  
					$sql6 = $db->query("UPDATE catacli SET SAL_CLI ='$sal_cli',ULT_PAG ='$FECHA',DES_CLI= DES_CLI-1 WHERE NUM_CLI='$NUM_CLI'");
					
					// Consulta que sirve para actualizar los datos de la tabla totfac
					// $sf = $row['SAL_DOF'];
					// $sal_fin = $TOT_FAC - $tot_apli;
					if($TOT_FAC == $tot_apli)
					{
						$sql7 = $db->query("UPDATE totfac SET STA_TUS='P',SAL_DOF='0' WHERE NUM_FAC='$NUM_FAC'");
					}
					else
					{
						$sql7 = $db->query("UPDATE totfac SET SAL_DOF='$sal_cli' WHERE NUM_FAC='$NUM_FAC'");
						$sal_cli = 0;
					}
								
						// $todo = $sql2 && $sql5;
						if ($sql2 && $sql5)
						{		
				              $html = '
								<div class="alert alert-dismissible alert-success">
				  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
				              <strong>Datos</strong> guardados Correctamente.';        
						}
						else
						{
							$html = '<div class="alert alert-dismissible alert-danger">
					  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
					              <strong>Error</strong> al guardar los datos.
					              </div>';
						}

					$db->liberar($sql,$sql2,$sql3,$sql4,$sql5,$sql6,$sql7);
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