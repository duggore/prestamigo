<?php 
include 'connect.php';
include 'functions.php';

$u_id = $_GET['u_id'];


	mysql_query("DELETE FROM servicios WHERE id='$u_id'");
	header('location: ../eliminarservicio.php?type=user');

 ?>