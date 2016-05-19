<?php  

	// Verificar que tambien se guarde datos en la tabla de fecope
	if(!empty($_POST['fec_cha']) and !empty($_POST['tot_apli'])){
		$db = new Conexion();
		$fol_cre = $_POST['fol_cre'];
		$fec_cha = $_POST['fec_cha'];
		$tot_apli = $_POST['tot_apli'];

		$sql= $db->query("SELECT * FROM totfac WHERE NUM_FAC='$fol_cre';");
		$row = $db->runs($sql);
		$NUM_CLI = $row['NUM_CLI'];
		$NUM_AGE = $row['NUM_AGE'];
		$NUM_FAC = $row['NUM_FAC'];
		$ESTATUS = $row['STA_TUS'];
		$TOT_FAC = $row['SAL_DOF'];
		// $TIP_PAG = $row['TIP_PAG'];
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

				$sal_cli = $TOT_FAC - $tot_apli;
				// Sentencia para insertar datos en la tabla movpag a partir de la consulta
				$sql2 = $db->query("INSERT INTO movpag(NUM_CLI,REF_ERE,TIP_PAG,FEC_PAG,IMP_PAG,NUM_FAC,NUM_AGE,HOR_A)
				VALUES ('$NUM_CLI','0','E','$fec_cha','$tot_apli','$NUM_FAC','$NUM_AGE','$hora');");

				

					if($TOT_FAC == $tot_apli)
					{
						$sql4 = $db->query("UPDATE totfac SET STA_TUS='P',SAL_DOF='0' WHERE NUM_FAC='$NUM_FAC'");

						$sql3 = $db->query("UPDATE catacli SET SAL_CLI ='$sal_cli',ULT_PAG ='$fec_cha',DES_CLI= DES_CLI-1, IMP_PAGD='0', NUM_FAC='0', IMP_PRE='0' WHERE NUM_FAC='$NUM_FAC'");
					}
					else
					{
						$sql4 = $db->query("UPDATE totfac SET SAL_DOF='$sal_cli' WHERE NUM_FAC='$NUM_FAC'");

						$sql3 = $db->query("UPDATE catacli SET SAL_CLI ='$sal_cli',ULT_PAG ='$fec_cha',DES_CLI= DES_CLI-1 WHERE NUM_FAC='$NUM_FAC'");
					}

					if ($sql2)
						{		
				              $html = '
								<div class="alert alert-dismissible alert-success">
				  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
				              <strong>Pago</strong> guardados Correctamente.';        
						}
						else
						{
							$html = '<div class="alert alert-dismissible alert-danger">
					  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
					              <strong>Error</strong> al guardar pago.
					              </div>';
						}
			}
	}

	else
	{
		$html= '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong>Campos vacios.
	              </div>';
	}

	echo $html;
?>