<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
		$db = new Conexion();
		$busca = $_POST['val'];

		$sql = $db->query("SELECT NUM_CLI FROM catacli WHERE NUM_CLI = '$busca' OR NOM_CLI ='$busca' OR DIR_NUM ='$busca';");
		$row = $db->runs($sql);
		$id = $row['NUM_CLI'];
		
		$sql2 = $db->query("SELECT cli.NOM_CLI, cli.DIR_NUM, pag.IMP_PAG, pag.NUM_PAG FROM catacli AS cli, movpag AS pag WHERE pag.NUM_CLI = '$id' AND cli.NUM_CLI = '$id';");
		$row2 = $db->runs($sql2);

			$re = array(    
				  	"nom"  =>  $row2['NOM_CLI'].' '.$row2['DIR_NUM'],
				  	"cre"  =>  $row2['NUM_PAG'],
				  	"tcre" =>  $row2['IMP_PAG']	
		        );


		 echo json_encode($re);	
	}
	
?>