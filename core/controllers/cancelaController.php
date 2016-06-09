<?php  

	require('core/models/class.Opciones.php');
	$opciones = new Opciones();
	

	// $isset_id = isset($_GET['id'] and is_numeric($_GET['id']))
	switch(isset($_GET['mode']) ? $_GET['mode'] : null){
		// if ($_POST){
		// 	$opciones->cancela();
		// }
		// else
		// {
		// 	echo 'plantilla';
		// }
		case 'cancelar':
			// if($isset_id){
				$opciones->cancela();
			// }
			// else{
				// header('location: ?view=admin');			
			// }
		break;

		case 'cancelCre':
				$opciones->cancelCRE();
				// require('core/controllers/adprestamoController.php');
		break;

		case 'cancelar':
				$opciones->modificar();
		break;
		
		case 'eliminar':
				$opciones->eliminar();
		break;

		case 'eliminarZona':
				$opciones->eliminarZon();
		break;


		case 'cancelapag':
				$opciones->cancelapago();
		break;

		case 'imprimir':
				
				$db = new Conexion();
				$id = intval($_GET['id']);
				$sql = $db->query("SELECT * FROM totfac WHERE NUM_FAC='$id'");
				$row = $db->runs($sql);
				if ($db->rows($sql)>0)
				{require('core/models/class.fpdf.php');}
				else
				{
					echo "<script type=\"text/javascript\">alert(\"No existe este Credito\");</script>";
				}
	
		break;

		default:
			header('location: ?view=admin');
		break;
	}
	
?>