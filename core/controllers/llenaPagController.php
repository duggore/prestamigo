<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
	$id = $_POST['val'];

			// Verificar la cuestion de los pagos porque no se esta haciendo bien
			$consulta = $db->query("SELECT * FROM catacli WHERE NUM_FAC = '$id';");
			$row = $db->runs($consulta);

			$consulta2 = $db->query("SELECT COUNT(NUM_PAG) AS NUM_PAG FROM movpag WHERE NUM_FAC = '$id';");
			$row2 = $db->runs($consulta2);

			$consulta3 = $db->query("SELECT * FROM totfac WHERE NUM_FAC = '$id';");
			$row3 = $db->runs($consulta3);

		
				       $re = array(
				     	"id" => '1',
					  	"tot_pag"  =>  $row['IMP_PRE'],
					  	"pag"  =>  $row2['NUM_PAG'],
					  	"sal_fin"  =>  $row['SAL_CLI'],
					  	"pag_dia"  =>  $row['IMP_PAGD'],
					  	"sta_tus"  =>  $row3['STA_TUS']
			        );	

	    	$db->liberar($consulta);    
		// }
		echo json_encode($re);

		$db->close();
	}
	
?>