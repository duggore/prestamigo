<?php
	// Nucleo de la Aplicacion

	session_start();

	#CONTANSTES DE CONEXION
	define('DB_HOST', 'localhost');
	define('DB_USER', 'root');
	define('DB_PASS', '');
	define('DB_NAME', 'sistemprestamo');



	define('HTML_DIR', 'html/');
	define('APP_TITLE', 'Prestamigo');
	// define('APP_URL', 'http://localhost/Github/prestamigo');

	#ESTRUCTURA
	require('vendor/autoload.php');
	require('vendor/fpdf/fpdf.php');
	require('vendor/mpdf60/mpdf.php');
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
