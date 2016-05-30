<?php  

	class Opciones{
		private $db;
		private $id;
		private $pago;
		private $row;
		private $numfac;
		
		

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



		public function cancelapago(){
			$this->id = intval($_GET['id']);
			$num = 'C';
			$q = "UPDATE movpag SET REF_ERE ='Cancelado' WHERE NUM_PAG = '$this->id';";
			$this->db->query($q);

			$q2 = "SELECT * FROM movpag WHERE NUM_PAG = '$this->id';";
			$e = $this->db->query($q2);
			
			$this->row = $this->db->runs($e);
			$this->numfac = $this->row['NUM_FAC'];
			$this->pago = $this->row['IMP_PAG'];


			$q3 = "UPDATE totfac SET  SAL_DOF= SAL_DOF + $this->pago WHERE NUM_FAC = '$this->numfac';";
			$this->db->query($q3);

			$q3 = "UPDATE catacli SET  SAL_CLI= SAL_CLI + $this->pago, DES_CLI= DES_CLI + 1 WHERE NUM_FAC = '$this->numfac';";
			$this->db->query($q3);



			header('location: ?view=pago');
		}
		
		
		public function __destruct(){
			$this->db->close();
		}
	}
?>