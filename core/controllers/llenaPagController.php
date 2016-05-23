<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
	$id = $_POST['val'];

		if($id !='')
		{

				
				$consulta = $db->query("SELECT * FROM catacli WHERE NUM_FAC = '$id';");
				

				if($db->rows($consulta) > 0)
				{
					
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
							  	"forma_pago"  =>  $row3['TIP_PAG'],
							  	"sta_tus"  =>  $row3['STA_TUS']
					        );	

			    	$db->liberar($consulta);    
			    }
			    else
					{
						$html = 
			          			'<div class="alert alert-dismissible alert-warning">
				  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
				              		<strong>Numero de credito no existe<strong>';

						$re = array( 
							"id" => '2',
							"mensaje"  =>  $html
				        );	
					}


		}

		else
		{
			$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Introduce un numero de credito...
	              </div>';

			$re = array( 
				"id" => '3',
				"mensaje"  =>  $html
	        );	
		}

			echo json_encode($re);
			$db->close();
	}
	
?>