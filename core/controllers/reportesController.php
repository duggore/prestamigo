<?php
    
    
	switch(isset($_GET['mode']) ? $_GET['mode'] : null){
		case 'repClientes':
				require('core/models/class.repCliente.php');
		break;

		case 'repZonas':
				require('core/models/class.repZona.php');
		break;

		case 'repAgentes':
				require('core/models/class.repAgente.php');
		break;

		case 'repVP':
				require('core/models/class.repVP.php');
		break;

		case 'etdCtaCliente':
				require('core/models/class.repCliente.php');
		break;

		
		case 'etdCtaZON':
				require('core/models/class.repCliente.php');
		break;

		case 'repP':
				require('core/models/class.repP.php');
		break;
		
		default:
			header('location: ?view=admin');
		break;
	}
?>