<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
// 	f_ini
// f_fin
	$f_ini = $_POST['f_ini'];
	$f_fin = $_POST['f_fin'];
// Falta regresar la Tabla con sus respectivos datos para que se muestre todas las ventas hechas en cierta fecha
	$sql = $db->query("SELECT * FROM totfac WHERE FEC_FAC ='$f_ini' AND FEC_FAC='$f_fin'");

       $re = array(
     	"id" => '1',
	  	"num_fac"  =>  $row['NUM_FAC'],
	  	"fec_fac"  =>  $row['FEC_FAC'],
	  	"sal_fin"  =>  $row['SAL_CLI'],
	  	"pag_dia"  =>  $row['IMP_PAGD'],
	  	"sta_tus"  =>  $row['STA_TUS']
   		 );	

		$db->liberar($consulta);
		$db->close();    
		echo json_encode($re);
		
	}
	
?>