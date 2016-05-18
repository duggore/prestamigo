<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
	$id = $_POST['val'];

			// Verificar la cuestion de los pagos porque no se esta haciendo bien
			$consulta = $db->query("SELECT * FROM cataage WHERE NOM_AGE = '$id';");

			if ($db->rows($consulta)>0)
			{
				$row = $db->runs($consulta);

			       $re = array(
				     	"id" => '1',
				     	"id_agente"  =>  $row['NUM_AGE'],
					  	"age"  =>  $row['NOM_AGE'],
					  	"vta_age"  =>  $row['VTA_AGE'],
					  	"zona"  =>  $row['NUM_ZON'],
					  	"por"  =>  $row['POR_COM']
			        );	


			}
			else
			{
				$html = '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>No exite Agente</strong>.
	              </div>';

				$re = array(
				     	"id" => '2',
				     	"mensaje" => $html,
			        );	
			}
			
	    $db->liberar($consulta);    
		echo json_encode($re);
		$db->close();
	}
	
?>