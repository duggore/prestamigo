<?php  
	

	class Opciones{
		private $db;
		private $id;

		public function __construct(){
			$this->db = new Conexion();
		}

		public function cancela(){
			$this->id = intval($_GET['id']);
			$num = '2';
			$q = "UPDATE movpag SET CLA_USR ='$num' WHERE NUM_PAG = '$this->id';";
			$this->db->query($q);
			header('location: ?view=adprestamo');
		}

		public function imprimir(){
			$this->id = intval($_GET['id']);
			// $num = '2';
			// $q = "UPDATE movpag SET CLA_USR ='$num' WHERE NUM_PAG = '$this->id';";
			// $this->db->query($q);
			// header('location: ?view=adprestamo');

			if ($this->id == 45) 
			{
				$html= "Objeto lozalizado";
			}
			echo $html;

			
	
		}

		public function __destruct(){
			$this->db = close();
		}
	}
?>