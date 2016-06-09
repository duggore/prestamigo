<?php 
include 'connect.php';
// include 'functions.php';

$u_id = $_GET['u_id'];
$type = $_GET['type'];

if ($type == 'a'){
	mysql_query("UPDATE usuarios SET estado='d' WHERE id='$u_id'");
	header('location: ../administrar.php?type=user');

}else if ($type == 'd') {
	mysql_query("UPDATE usuarios SET estado='a' WHERE id='$u_id'");
	header('location: ../administrar.php?type=user');
}



 ?>