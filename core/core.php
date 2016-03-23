<?php  
	// Nucleo de la Aplicacion

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
	require('core/models/class.Conexion.php');
	require('core/bin/functions/Encrypt.php');
?>