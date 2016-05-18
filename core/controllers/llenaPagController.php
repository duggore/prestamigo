<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
	$id = $_POST['val'];

			// Verificar la cuestion de los pagos porque no se esta haciendo bien
			$consulta = $db->query("SELECT CLI.IMP_PRE,CLI.IMP_PAGD,CLI.SAL_CLI,FAC.STA_TUS FROM catacli AS CLI,totfac AS FAC WHERE CLI.NUM_FAC = '$id' AND FAC.NUM_FAC = '$id';");

	// $consulta = $db->query("SELECT CLI.IMP_PRE,CLI.IMP_PAGD,CLI.SAL_CLI,FAC.STA_TUS atacli AS CLI INNER JOIN totfac AS FAC ON CLI.NUM_FAC = CLI.NUM_FAC WHERE NUM_FAC='$id'");
			$row = $db->runs($consulta);

			$consulta2 = $db->query("SELECT COUNT(NUM_PAG) AS NUM_PAG FROM movpag WHERE NUM_FAC = '$id';");
			$row2 = $db->runs($consulta2);

			// $cons

		
				       $re = array(
				     	"id" => '1',
					  	"tot_pag"  =>  $row['IMP_PRE'],
					  	"pag"  =>  $row2['NUM_PAG'],
					  	"sal_fin"  =>  $row['SAL_CLI'],
					  	"pag_dia"  =>  $row['IMP_PAGD'],
					  	"sta_tus"  =>  $row['STA_TUS']
			        );	

	    	$db->liberar($consulta);    
		// }
		echo json_encode($re);

		$db->close();
	}
	
?>