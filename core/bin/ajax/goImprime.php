<?php 	 
	
	class PDF 
	{
		private $db;
		private $id;
		private $mpdf;

		public function __construct(){
			$this->db = new Conexion();
		}

		

		public function __destruct(){
			$this->db->close();
		}
	}
?>