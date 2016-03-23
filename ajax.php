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
		
		if(!isset($_GET['view'])){
				include('core/controllers/sesionController.php');
		}
	}
?>