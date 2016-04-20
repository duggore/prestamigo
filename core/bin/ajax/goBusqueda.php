<?php 
	$val = $_POST['val']	
	$db = new Conexion();
	$sql = $db->query("SELECT * FROM catacli WHERE NUM_CLI = '$val';");

	if ($row = $db->runs($sql) > 0)
	{
		$re = array( 
			  	// "num"  =>  ,   
			  	// "nom"  =>  $row['NOM_CLI'].' '.$row['DIR_NUM']
	        );

		 echo json_encode($re);	
	}
?>