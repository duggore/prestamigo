<?php  
	$db = new Conexion();
	$id = $_POST['val'];

	$consulta = $db->query("SELECT * FROM totfac as FAC, catacli as CLI WHERE FAC.NUM_FAC = '$id'   LIMIT 1;");

		if($db->rows($consulta) > 0 )
		{
			$row2 = $db->runs($consulta);


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
					  	"pres"  =>  $row2['SAL_DOF'],
					  	"fec"  =>  $row2['FEC_PAG'],
					  	"tipo"  =>  $row2['TIP_PAG'],
					  	"int"  =>  $row2['POR_INT'],
					  	"age"  =>  $row2['NUM_AGE'],
					  	"saldof"  =>  $row2['SAL_DOF']
			        );	
          		}
          		else if($row2['STA_TUS'] == 'C')
          		{
          			$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Atención</strong> Prestamo esta <strong>CANCELADO</strong>
	              </div>';

	               $re = array(
				     	"id" => '2',
					  	"mensaje"  =>  $html,
					  	"nom"  =>  $row2['NOM_CLI'],
					  	"num"  =>  $num_cli
			        );	
          		}
          		else
          		{
          			$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Atención</strong> Prestamo esta <strong>PAGADO</strong>
	              </div>';
	              $re = array(
				     	"id" => '3',
					  	"mensaje"  =>  $html,
					  	"nom"  =>  $row2['NOM_CLI'],
					  	"num"  =>  $num_cli
			        );	
          		}

	     
		}

		else
		{
			

			$re = array( 
				"id" => '4',
			  	"num"  =>  $row['NUM_CLI'],  
			  	"nom"  =>  $row['NOM_CLI']
	        );	
	
	        
		}
		echo json_encode($re);
		$db->liberar($consulta);
		$db->close();
	// $consulta = $db->query("SELECT PAG.NUM_CLI, PAG.TIP_PAG, PAG.NUM_PAG, PAG.IMP_PAG, PAG.FEC_PAG FROM movpag as PAG WHERE PAG.NUM_PAG = '$id' LIMIT 1;");

	

	// $row = $db->runs($consulta);

	// 	if ($row['NUM_PAG'] < 10)
	// 	{
	// 		$new = $row['NUM_PAG'] ;
	// 		$clientes= '0000'.$new;	
	// 	}

	// 	if ($row['NUM_PAG'] >= 10)
	// 	{
	// 		$new = $row['NUM_PAG'];
	// 		$clientes= '000'.$new;	
	// 	}
		

	// 	if ($row['NUM_PAG'] >= 100)
	// 	{
	// 		$new = $row['NUM_PAG'] ;
	// 		$clientes= '00'.$new;	
	// 	}

	// 	if ($row['NUM_PAG'] >= 1000)
	// 	{
	// 		$new = $row['NUM_PAG'] ;
	// 		$clientes= '0'.$new;	
	// 	}

	// 	if ($row['NUM_PAG'] >= 10000)
	// 	{
	// 		$new = $row['NUM_PAG'] ;
	// 		$clientes= $new;	
	// 	}


	// 	if ($row['NUM_CLI'] < 10)
	// 	{
	// 		$cli = $row['NUM_CLI'];
	// 		$num_cli= '0000'.$cli;	
	// 	}

	// 	if ($row['NUM_CLI'] >= 10)
	// 	{
	// 		$cli = $row['NUM_CLI'];
	// 		$num_cli= '000'.$cli;	
	// 	}
		

	// 	if ($row['NUM_CLI'] >= 100)
	// 	{
	// 		$cli = $row['NUM_CLI'];
	// 		$num_cli= '00'.$cli;	
	// 	}

	// 	if ($row['NUM_CLI'] >= 1000)
	// 	{
	// 		$cli = $row['NUM_CLI'];
	// 		$num_cli= '0'.$cli;	
	// 	}

	// 	if ($row['NUM_CLI'] >= 10000)
	// 	{
	// 		$cli = $row['NUM_CLI'];
	// 		$num_cli= $cli;	
	// 	}
	// $id2 = $row['NUM_CLI'];
	// $con = $db->query("SELECT * FROM catacli WHERE NUM_CLI = '$id2';");
	// $row2 = $db->runs($con);


	//      $re = array(
	// 	  	"nom"  =>  $row2['NOM_CLI'],
	// 	  	"num"  =>  $num_cli,
	// 	  	"pag"  =>  $clientes,
	// 	  	"pres"  =>  $row['IMP_PAG'],
	// 	  	"tipo"  =>  $row['TIP_PAG'],
	// 	  	"fec"  =>  $row['FEC_PAG']

 //        );	
	

		
	// 	echo json_encode($re);
	// 	// $db->liberar($consulta);
	// 	// $db->liberar($con);
	// 	$db->close();
		
?>