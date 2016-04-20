<?php 
		
	$db = new Conexion();
	$val = $_POST['val'];
	$sql = $db->query("SELECT * FROM catacli WHERE NOM_CLI ='$val';");
	$row = $db->runs($sql);


		$id = $row['NUM_CLI'];
		$consulta = $db->query("SELECT PAG.NUM_CLI, PAG.NUM_PAG, PAG.IMP_PAG, PAG.FEC_PAG, CLI.NOM_CLI FROM movpag as PAG, catacli as CLI WHERE PAG.NUM_CLI = '$id' AND CLI.NUM_CLI = '$id'  LIMIT 1;");

		if($db->rows($consulta) > 0)
		{
			$row2 = $db->runs($consulta);
			 $html= '
						<div class="alert alert-dismissible alert-warning">
		  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
		              <strong>Cliente</strong> ya cuenta con prestamo';  

		if ($row2['NUM_PAG'] < 10)
		{
			$new = $row2['NUM_PAG'] +1;
			$clientes= '0000'.$new;	
		}

		if ($row2['NUM_PAG'] >= 10)
		{
			$new = $row2['NUM_PAG'] + 1;
			$clientes= '000'.$new;	
		}
		

		if ($row2['NUM_PAG'] >= 100)
		{
			$new = $row2['NUM_PAG'] +1;
			$clientes= '00'.$new;	
		}

		if ($row2['NUM_PAG'] >= 1000)
		{
			$new = $row2['NUM_PAG'] +1;
			$clientes= '0'.$new;	
		}

		if ($row2['NUM_PAG'] >= 10000)
		{
			$new = $row2['NUM_PAG'] +1;
			$clientes= $new;	
		}


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


	     $re = array(
	     	"id" => '1',
		  	"mensaje"  =>  $html,
		  	"nom"  =>  $row2['NOM_CLI'],
		  	"num"  =>  $num_cli,
		  	"pag"  =>  $clientes,
		  	"pres"  =>  $row2['IMP_PAG'],
		  	"fec"  =>  $row2['FEC_PAG']

        );	
		}

		else
		{
			

			$re = array( 
				"id" => '2',
			  	"num"  =>  $row['NUM_CLI'],  
			  	"nom"  =>  $row['NOM_CLI']
	        );	
	
	        
		}
		echo json_encode($re);
		$db->liberar($consulta);
		$db->close();
		
?>