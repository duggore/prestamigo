<?php  
	// Nucleo de la Aplicacion
	
	session_start();

	#CONTANSTES DE CONEXION
	define('DB_HOST', '50.62.209.147');
	define('DB_USER', 'prestamigo');
	define('DB_PASS', 'Prestamigo78123');
	define('DB_NAME', 'prestamigo');



	define('HTML_DIR', 'html/');
	// define('APP_TITLE', 'Prestamigo');
	// define('APP_URL', './');

	#ESTRUCTURA
	require('vendor/autoload.php');
	require('vendor/fpdf/fpdf.php');
	require('core/models/class.Conexion.php');
	require('core/bin/functions/Encrypt.php');
	require('core/bin/functions/users.php');

	$users = users();
	$clientes = clientes();
	$pagos = pagos();
	$addcliente = addcliente();
	$agente = addAgente();
	$zona = addZona();
	$interes = por_int();
	
?>