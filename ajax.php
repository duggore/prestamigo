<?php 
	require('core/core.php');

	if($_POST){
		
		switch (isset($_GET['mode']) ? $_GET['mode'] : null) {
			case 'login':
					require('core/bin/ajax/goSesion.php');
				break;
			
			default:
					include('core/controllers/sesionController.php');
				break;
		}
	}

	else{
			include('core/controllers/sesionController.php');
	}
?>