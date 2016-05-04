<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
		
		// $r1 = $_POST['valor'] * (.200);	
		$r2 = $_POST['valor'] * (1.20);
		$pag_diario = ($_POST['valor'] * 1.20) / 30;
		
		 $r=array( 
			  	"m1"  =>  '20',  
		        "m2"  =>  $r2,
		        "m3"  =>  $pag_diario
	        );

		 echo json_encode($r);
	}
?>
