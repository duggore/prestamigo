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
			$opciones->cancela();
		break;
		default:
			header('location: ?view=admin');
		break;
	}
	
?>