<?php 
include 'connect.php';
include 'functions.php';

$u_id = $_GET['u_id'];


	mysql_query("DELETE FROM digitales WHERE id='$u_id'");
	header('location: ../eliminardigital.php?type=user');

 ?>