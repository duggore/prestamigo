<?php
    
    
	switch(isset($_GET['mode']) ? $_GET['mode'] : null){
		case 'repClientes':
				require('core/models/class.repCliente.php');
		break;

		default:
			header('location: ?view=admin');
		break;
	}
?>