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

		case 'imprimir':
				require('core/models/class.fpdf.php');
				// require('core/models/class.dompdf.php');
		break;

		default:
			header('location: ?view=admin');
		break;
	}
	
?>