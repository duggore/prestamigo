<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
		
		// $r1 = $_POST['valor'] * (.200);	
		$r2 = $_POST['valor'] + $_POST['valor'] * (.20);

		
		 $r=array( 
			  	"m1"  =>  '20',  
		        "m2"  =>  $r2
	        );

		 echo json_encode($r);
	}
?>
