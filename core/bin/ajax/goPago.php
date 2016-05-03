<?php  
	if(!empty($_POST['fec_cha']) and !empty($_POST['tot_apli'])){
		$db = new Conexion();
		$fol_cre = $_POST['fol_cre'];
		$fec_cha = $_POST['fec_cha'];
		$tot_apli = $_POST['tot_apli'];
		
		// Sentencia que busca el id de totfac para poder verificar si ya exite 
		// algun pago en la tabla de totfac con ese id
		$sql= $db->query("SELECT * FROM totfac WHERE NUM_FAC='$fol_cre';");

		if ($db->rows($sql) > 0){
			$row = $db->runs($sql);
			$NUM_CLI = $row['NUM_CLI'];
			$NUM_FAC = $row['NUM_FAC'];
			$ESTATUS = $row['STA_TUS'];
			$hora = time();

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

					// Sentencia que busca el ultimo id de la tabla fecope a partir del numero de factura de la tabla totfac
					$sql3 = $db->query("SELECT MAX(NUM_FACI) AS FACI FROM fecope WHERE NUM_FAC='$NUM_FAC';");
					$row2 = $db->runs($sql3);
					$pago = $row2['FACI'] + 1;

					// $sql= $db->query("SELECT * FROM movpag;");

					$sql4= $db->query("SELECT *,MAX(NUM_PAG) AS PAG FROM movpag;");
					$row3 = $db->runs($sql4);
					$NUM_PAG = $row3['PAG'];
					$fecha = date('d-m-Y');
					$anio = date('Y');
					// Sentencia que inserta a la tabla fecope 
					$sql5 = $db->query("INSERT INTO fecope(FE_CHA,PERI_ODO,NUM_FAC,NUM_PAG,NUM_FACI,NUM_REP,ANI_O,POR_INT)
					VALUES ('$fecha','0','$NUM_FAC','$NUM_PAG','$pago','0','$anio','0');");

					// Consulta que sirve para actualizar los datos de la tabla totfac
					$sf = $row['SAL_DOF'];
					$sal_fin = $sf - $tot_apli;
					if($sf == $tot_apli)
					{
						$sql6 = $db->query("UPDATE totfac SET STA_TUS='P',SAL_DOF='0' WHERE NUM_FAC='$NUM_FAC'");
					}
					else
					{
						$sql6 = $db->query("UPDATE totfac SET SAL_DOF='$sal_fin' WHERE NUM_FAC='$NUM_FAC'");
					}
								

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

					$db->liberar($sql,$sql2,$sql3,$sql4,$sql5,$sql6);
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