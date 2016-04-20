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
		return $users;

		$db->liberar($sql);
		$db->close();
	}


	function clientes(){
		$db = new Conexion();
		$sql = $db->query("SELECT MAX(NUM_PAG) AS NUM_PAG FROM movpag;");
		$d= $db->runs($sql);

		if ($d['NUM_PAG'] < 10)
		{
			$new = $d['NUM_PAG'] +1;
			$clientes= array('id' => '0000'.$new);	
		}

		if ($d['NUM_PAG'] >= 10)
		{
			$new = $d['NUM_PAG'] + 1;
			$clientes= array('id' => '000'.$new);	
		}
		

		if ($d['NUM_PAG'] >= 100)
		{
			$new = $d['NUM_PAG'] +1;
			$clientes= array('id' => '00'.$new);	
		}

		if ($d['NUM_PAG'] >= 1000)
		{
			$new = $d['NUM_PAG'] +1;
			$clientes= array('id' => '0'.$new);	
		}

		if ($d['NUM_PAG'] >= 10000)
		{
			$new = $d['NUM_PAG'] +1;
			$clientes= array('id' => $new);	
		}

		return $clientes;

		$db->liberar($sql);
		$db->close();
	}



	
?>