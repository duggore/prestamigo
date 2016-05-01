<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
		// $db = new Conexion();
		// $busca = $_POST['val'];

		// $sql = $db->query("SELECT NUM_CLI FROM catacli WHERE NUM_CLI = '$busca' OR NOM_CLI ='$busca' OR DIR_NUM ='$busca';");
		// $row = $db->runs($sql);
		// $id = $row['NUM_CLI'];
		
		// $sql2 = $db->query("SELECT cli.NOM_CLI, cli.DIR_NUM, pag.IMP_PAG, pag.NUM_PAG FROM catacli AS cli, movpag AS pag WHERE pag.NUM_CLI = '$id' AND cli.NUM_CLI = '$id';");
		// $row2 = $db->runs($sql2);

		// 	$re = array(    
		// 		  	"nom"  =>  $row2['NOM_CLI'].' '.$row2['DIR_NUM'],
		// 		  	"cre"  =>  $row2['NUM_PAG'],
		// 		  	"tcre" =>  $row2['IMP_PAG']	
		//         );


		//  echo json_encode($re);	

	$db = new Conexion();
	$id = $_POST['val'];

	$consulta = $db->query("SELECT * FROM totfac WHERE NUM_FAC = '$id'  LIMIT 1;");

		if($db->rows($consulta) > 0 )
		{
			$row2 = $db->runs($consulta);
			$NUM_FAC = $row2['NUM_FAC'];
			$sql = $db->query("SELECT count(NUM_FACI) AS num_pag FROM fecope WHERE NUM_FAC = '$NUM_FAC' LIMIT 1;");		
			$row3 = $db->runs($sql);
		// 	if ($row2['NUM_CLI'] < 10)
		// 	{
		// 		$cli = $row2['NUM_CLI'];
		// 		$num_cli= '0000'.$cli;	
		// 	}

		// 	if ($row2['NUM_CLI'] >= 10)
		// 	{
		// 		$cli = $row2['NUM_CLI'];
		// 		$num_cli= '000'.$cli;	
		// 	}
			

		// 	if ($row2['NUM_CLI'] >= 100)
		// 	{
		// 		$cli = $row2['NUM_CLI'];
		// 		$num_cli= '00'.$cli;	
		// 	}

		// 	if ($row2['NUM_CLI'] >= 1000)
		// 	{
		// 		$cli = $row2['NUM_CLI'];
		// 		$num_cli= '0'.$cli;	
		// 	}

		// 	if ($row2['NUM_CLI'] >= 10000)
		// 	{
		// 		$cli = $row2['NUM_CLI'];
		// 		$num_cli= $cli;	
		// 	}


		// 	if($row2['STA_TUS'] == 'A')
  //         		{
  //         			$html = 
  //         			'<div class="alert alert-dismissible alert-warning">
	 //  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	 //              		<strong>Atención</strong> Cliente ya cuenta con prestamo y esta <strong>ACTIVO</strong>
	 //              </div>';

				       $re = array(
				     	"id" => '1',
					  	"tot_pag"  =>  $row2['TOT_PAG'],
					  	"pag"  =>  $row3['num_pag'],
					  	"sal_fin"  =>  $row2['SAL_DOF'],
					  	"sta_tus"  =>  $row2['STA_TUS']
			        );	
  //         		}
  //         		else if($row2['STA_TUS'] == 'C')
  //         		{
  //         			$html = 
  //         			'<div class="alert alert-dismissible alert-warning">
	 //  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	 //              		<strong>Atención</strong> Prestamo esta <strong>CANCELADO</strong>
	 //              </div>';

	 //               $re = array(
		// 		     	"id" => '2',
		// 			  	"mensaje"  =>  $html,
		// 			  	"nom"  =>  $row2['NOM_CLI'],
		// 			  	"num"  =>  $num_cli
		// 	        );	
  //         		}
  //         		else
  //         		{
  //         			$html = 
  //         			'<div class="alert alert-dismissible alert-warning">
	 //  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	 //              		<strong>Atención</strong> Prestamo esta <strong>PAGADO</strong>
	 //              </div>';
	 //              $re = array(
		// 		     	"id" => '3',
		// 			  	"mensaje"  =>  $html,
		// 			  	"nom"  =>  $row2['NOM_CLI'],
		// 			  	"num"  =>  $num_cli
		// 	        );	
  //         		}

	     
		// }

		// else
		// {
			

		// 	$re = array( 
		// 		"id" => '4',
		// 	  	"num"  =>  $row['NUM_CLI'],  
		// 	  	"nom"  =>  $row['NOM_CLI']
	 //        );	
	
	    	$db->liberar($consulta,$sql);    
	    	// $db->liberar();
		}
		echo json_encode($re);

		$db->close();
	}
	
?>