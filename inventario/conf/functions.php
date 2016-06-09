<?php
		session_start();

		function loggedin(){
			if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id']))  {
				return true;
			}else{
				return false;
			}
		}

	if (loggedin()) {
		$my_id = $_SESSION['user_id'];
		$user_query = mysql_query("SELECT usuario, privilegios FROM usuarios WHERE id='$my_id'");
		$run_user = mysql_fetch_array($user_query);
		$username = $run_user['usuario'];
		$user_level = $run_user['privilegios'];
		$query_level = mysql_query("SELECT nombre FROM privilegios WHERE id ='$user_level'");
		$run_level = mysql_fetch_array($query_level);
		$level_name = $run_level['nombre'];
	}

 ?>
