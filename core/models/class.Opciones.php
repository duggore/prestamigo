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
			$num = '2';
			$q = "UPDATE movpag SET CLA_USR ='$num' WHERE NUM_PAG = '$this->id';";
			$this->db->query($q);
			header('location: ?view=adprestamo');
		}

		// public function imprimir()
		// {
		// 	$this->id = $_GET['id'];
		// 	if(isset($this->id))
		// 	{
				
  //   			// $this->mpdf->WriteHTML($stylesheet,1);
  //   			$stylesheet = file_get_contents('views/app/css/estilo.css');

		// 		$this->mpdf->SetHeader( 'Título del documento | Centro de texto |{PAGENO}');
		// 		$this->mpdf->AddPage ("L");  // Añade una nueva página en la orientación horizontal
		// 		$this->mpdf->debug = true;
		// 		$this->mpdf->WriteHTML($stylesheet,1);
				
				
		// 		$fechaInicio=strtotime(date("d-m-Y"));
		// 						$f=date("d-m-Y");
		// 						$fechaFin= strtotime(date("d-m-Y", strtotime("+15 day", strtotime("d-m-Y"))));
		// 					for($i=1; $i<=$fechaFin; $i+=86400){
		// 								$fecha = date("d-m-Y", $i);
		// 			    				$this->mpdf->WriteHTML($fecha);
		// 			    			}
				

		// 		$this->mpdf->WriteHTML('
		// 			<div id="contenedor-principal">
		// 				<div class="content">
		// 					<div style="border:2px solid red; text-align:center; width:48%; float:left; padding:0;">
		// 						<div style="border:2px solid red; text-align:center; width:31%; float:left; padding:0;">Fecha</div>
		// 						<div style="border:2px solid red; text-align:center; width:31%; float:left; padding:0;">Pago</div>
		// 						<div style="border:2px solid red; text-align:center; width:31%; float:left; padding:0;">Firma</div>
		// 						<div style="border:2px solid red; text-align:center; float:left; padding:0;">
		// 					</div>
		// 					</div>
		// 					<div style="border:2px solid red; text-align:center; width:48%; float:left; padding:0;">
		// 						<div style="border:2px solid red; text-align:center; width:31%; float:left; padding:0;">Fecha</div>
		// 						<div style="border:2px solid red; text-align:center; width:31%; float:left; padding:0;">Pago</div>
		// 						<div style="border:2px solid red; text-align:center; width:31%; float:left; padding:0;">Firma</div>
		// 						<div style="border:2px solid red; text-align:center; float:left; padding:0;">Aqui van las fechas
		// 						</div>
		// 					</div>
		// 				</div>
		// 				<div class="content"> Hola como estas
		// 				</div>
		// 			</div id="contenedor-principal">'
		// 		);
		// 		$this->mpdf->Output();
		// 	}
			

		// }
		
		public function __destruct(){
			$this->db->close();
		}
	}
?>