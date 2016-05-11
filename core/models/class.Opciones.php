<?php  

	class Opciones{
		private $db;
		private $id;
		private $mpdf;
		

		public function __construct(){
			$this->db = new Conexion();
			
		}

		public function cancela(){
			$this->id = intval($_GET['id']);
			$num = 'C';
			$q = "UPDATE totfac SET STA_TUS ='$num' WHERE NUM_FAC = '$this->id';";
			$this->db->query($q);
			header('location: ?view=adprestamo');
		}

		public function modificar(){
			$this->id = intval($_GET['id']);
			$num = 'C';
			$q = "UPDATE totfac SET STA_TUS ='$num' WHERE NUM_FAC = '$this->id';";
			$this->db->query($q);
			header('location: ?view=adprestamo');
		}

		public function eliminar(){
			$this->id = intval($_GET['id']);
			// $num = 'C';
			$q = "DELETE FROM catacli WHERE NUM_CLI = '$this->id' AND SAL_CLI='0';";
			if($this->db->query($q))
			{
				header('location: ?view=insert');	
			}
			else
			{
				$html = 
		          			'<div class="alert alert-dismissible alert-warning">
			  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
			              		<strong>Atencion</strong>, 
			              </div>';
				$re = array( 
						"mensaje"  =>  $html
			        );	
				echo json_encode($re);
			}
			
		}

		
		public function __destruct(){
			$this->db->close();
		}
	}
?>