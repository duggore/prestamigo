<?php 
	if(!empty($_POST['user']) and !empty($_POST['dir_dom']) and !empty($_POST['dir_negoc']) and !empty($_POST['dir_ciu']) and !empty($_POST['giro_negoc']) and !empty($_POST['tel']) and !empty($_POST['agen_cobro'])){
		$db = new Conexion();
		$user = $db->real_escape_string($_POST['user']);
		$dir_dom = $_POST['dir_dom'];
		$dir_negoc = $_POST['dir_negoc'];
		$dir_ciu = $_POST['dir_ciu'];
		$giro_negoc=$_POST['giro_negoc'];
		$tel = $_POST['tel'];
		$agente = $_POST['agen_cobro'];
		$fecha_alta = date('Y-m-d');

		
		$sql = $db->query("INSERT INTO catacli(NOM_CLI, DIR_NUM, DIR_COL, DIR_CIU,SUC_URS,NUM_FAC,IMP_PRE,IMP_PAGD,DES_CLI, TEL_CLI, NUM_AGE,FEC_ALT,SAL_CLI)
			VALUES ('$user','$dir_dom','$dir_negoc', '$dir_ciu', '$giro_negoc', '0','0','0','0','$tel', '$agente','$fecha_alta','0')");

		if ($sql)
		{
			$html = '<div class="alert alert-dismissible alert-success">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Datos</strong> guardados Correctamente.
	              </div>';
		}
		else
		{
			$html = '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong> al guardar los datos.
	              </div>';
		}

		$db->close();
	}


	else{
			$html= '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong> Todos los campos deben estar llenos.
	              </div>';
	}

	echo $html;
?>