<?php 
include 'connect.php';
include 'functions.php';

$u_id = $_GET['u_id'];


	mysql_query("DELETE FROM microfilms WHERE id='$u_id'");
	header('location: ../eliminarmicrofilm.php?type=user');

 ?>