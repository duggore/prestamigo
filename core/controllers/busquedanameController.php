<?php 
		
	$db = new Conexion();
	$val = $_POST['val'];
	if($val !='')
	{
		$sql = $db->query("SELECT * FROM catacli WHERE NOM_CLI ='$val';");
		$row = $db->runs($sql);
		// $pagdiario = $row['IMP_PAGD'];

		$id = $row['NUM_CLI'];
		$consulta = $db->query("SELECT * FROM totfac as FAC, catacli as CLI WHERE FAC.NUM_CLI = '$id' AND CLI.NUM_CLI = '$id' AND FAC.STA_TUS= 'A' LIMIT 1;");

		$row2 = $db->runs($consulta);

		if($db->rows($consulta) > 0 )
		{
			// $row2 = $db->runs($consulta);


			if ($row2['NUM_CLI'] < 10)
			{
				$cli = $row2['NUM_CLI'];
				$num_cli= '0000'.$cli;	
			}

			if ($row2['NUM_CLI'] >= 10)
			{
				$cli = $row2['NUM_CLI'];
				$num_cli= '000'.$cli;	
			}
			

			if ($row2['NUM_CLI'] >= 100)
			{
				$cli = $row2['NUM_CLI'];
				$num_cli= '00'.$cli;	
			}

			if ($row2['NUM_CLI'] >= 1000)
			{
				$cli = $row2['NUM_CLI'];
				$num_cli= '0'.$cli;	
			}

			if ($row2['NUM_CLI'] >= 10000)
			{
				$cli = $row2['NUM_CLI'];
				$num_cli= $cli;	
			}


			if($row2['STA_TUS'] == 'A')
          		{
          			$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Atención</strong> Cliente ya cuenta con prestamo y esta <strong>ACTIVO</strong>
	              </div>';

				       $re = array(
				     	"id" => '1',
					  	"mensaje"  =>  $html,
					  	"nom"  =>  $row2['NOM_CLI'],
					  	"num"  =>  $num_cli,
					  	"pag"  =>  $row2['TOT_PAG'],
					  	"pres"  =>  $row2['TOT_FAC'],
					  	"fec"  =>  $row2['FEC_FAC'],
					  	"tipo"  =>  $row2['TIP_PAG'],
					  	"int"  =>  $row2['POR_INT']					  	
			        );	
          		}
		}

		else
		{

			$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Atención</strong> Cliente sin prestamo
	              </div>';

			$re = array( 
				"id" => '2',
				"mensaje"  =>  $html,
			  	"num"  =>  $row['NUM_CLI'],  
			  	"nom"  =>  $row['NOM_CLI']
	        );	
	
	        
		}

		$db->liberar($consulta);
	}

	else
	{
		$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Campo vacio, Introduce dato...
	              </div>';

			$re = array( 
				"id" => '3',
				"mensaje"  =>  $html
	        );	
	}

		echo json_encode($re);
		$db->close();
		
?>