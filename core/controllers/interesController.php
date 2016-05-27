<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
		
		$db = new Conexion();
		$sql = $db->query("SELECT POR_INT FROM fecope");
		$row = $db->runs($sql);
		$porcentaje = $row['POR_INT'];
		$r2 = $_POST['valor'] + ($_POST['valor'] * ($porcentaje/100));
		$pag_diario = ($r2) / 30;
		
		 $r=array( 
			  	"m1"  =>  $porcentaje,  
		        "m2"  =>  $r2,
		        "m3"  =>  $pag_diario,
		        "m4"  =>  $r2
	        );

		 echo json_encode($r);
	}
?>
