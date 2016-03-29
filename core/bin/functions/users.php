<?php  
	function users(){
		$db = new Conexion();
		$sql = $db->query("SELECT * FROM users;");
		if($db->rows($sql) > 0){
			while($d = $db->runs($sql)){
				$users[$d['id']] = array(
					'id' => $d['id'],
					'user' => $d['users'],
					'pass' => $d['pass'],
					'email' => $d['email'],
					'permisos' => $d['permisos']
				);
			}
		}
		else
		{
			$users = false;
		}
		$db->liberar($sql);
		$db->close();
		return $users;
	}
?>