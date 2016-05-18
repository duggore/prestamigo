<?php 
	if(!empty($_POST['user_name']) and !empty($_POST['dir_dom']) and !empty($_POST['dir_negoc']) and !empty($_POST['dir_ciu']) and !empty($_POST['giro_negoc']) and !empty($_POST['tel']) and !empty($_POST['agen_cobro']) and !empty($_POST['zona']) and !empty($_POST['bloqueo'])){

		$db = new Conexion();
		$id_user = $_POST['id_user'];
		$user_name = $_POST['user_name'];
		$dir_dom = $_POST['dir_dom'];
		$dir_negoc = $_POST['dir_negoc'];
		$dir_ciu = $_POST['dir_ciu'];
		$giro_negoc=$_POST['giro_negoc'];
		$tel = $_POST['tel'];
		$zona = $_POST['zona'];
		$bloqueo = $_POST['bloqueo'];
		$agente = $_POST['agen_cobro'];

		$sql = $db->query("UPDATE catacli SET NOM_CLI='$user_name',DIR_NUM='$dir_dom',DIR_COL='$dir_negoc',DIR_CIU='$dir_ciu',TEL_CLI='$tel',SUC_URS='$giro_negoc', NUM_AGE='$agente',NUM_ZON='$zona',BLO_QUEO='$bloqueo' WHERE NUM_CLI='$id_user';");

		if($sql)
		{
			$html= '<div class="alert alert-dismissible alert-success">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Modificación</strong> Exitosa.
	              </div>';
		}
		else
		{
			$html= '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Atención</strong> registro no se pudo modificar.
	              </div>';
		}

	}
	
	else{
			$html= '<div class="alert alert-dismissible alert-danger">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Error</strong>Campos vacios.
	              </div>';
	}

	echo $html;
?>
