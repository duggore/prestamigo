<?php  
	// require('core/core.php');
	$db = new Conexion();
	$id = intval($_GET['id']);
	$sql = $db->query("SELECT * FROM totfac WHERE NUM_FAC='$id'");
	$row = $db->runs($sql);
	$id_cliente = $row['NUM_CLI'];
	$fec_cli = $row['FEC_PAG'];

	$sql2 = $db->query("SELECT * FROM catacli WHERE NUM_ClI='$id_cliente'");
	$row2 = $db->runs($sql2);

	$pdf=new FPDF();

	$pdf->AddPage();
	// $pdf->Image('artesanias4.jpg',1,1,60,50,'jpg');
	$pdf->SetFont('Times','B',16);
	$pdf->Cell(0,18,'Lista de Pago',0,1,'C');
	$pdf->Ln();
	$pdf->SetFont('Times','I',10);
	$pdf->Cell(10,8,utf8_decode('N°'),1,0,'C');
	$pdf->Cell(28,8,'Fecha',1,0,'C');
	$pdf->Cell(30,8,'Pago',1,0,'C');
	$pdf->Cell(25,8,'Firma',1,1,'C');
	$pdf->Ln(2);
	
	$date = date($fec_cli); 
	$i = 1;
	$day = 1;
	while ($i <= 15) {

		$date_timestam = strtotime($date."+".$day." day");
		$date_current = date("d-m-Y", $date_timestam);
		
		$num_day = date("N", $date_timestam);
		
	 	if($num_day != 7){
	 		$pdf->SetFont('Times','I',10);
	 		$pdf->Cell(10,6,$i,0,0,'C');
	 		// $pdf->Cell(35,6,'Pago',0,1,'L');
	 		$pdf->Cell(90,6,$date_current. '    ________________________________',0,1,'C');

	 		// $pdf->Cell(30,6,,0,1,'C');
	 		$i++;
	 	}				 	
	 	$day++;
	}

	$pdf->setXY(107,45.9);
	// $pdf->SetFont('Times','B',16);
	// $pdf->Cell(0,18,'Lista de Pago',0,1,'C');
	// $pdf->Ln();
	$pdf->SetFont('Times','I',10);
	$pdf->Cell(10,8,utf8_decode('N°'),1,0,'C');
	$pdf->Cell(28,8,'Fecha',1,0,'C');
	$pdf->Cell(30,8,'Pago',1,0,'C');
	$pdf->Cell(25,8,'Firma',1,1,'C');
	$pdf->Ln(3);
	
	$i = 16;
	while ($i <= 30) {

		$date_timestam = strtotime($date."+".$day." day");
		$date_current = date("d-m-Y", $date_timestam);
		
		$num_day = date("N", $date_timestam);
		
	 	if($num_day != 7){
	 		$pdf->setX(107);
	 		$pdf->SetFont('Times','I',10);
	 		$pdf->Cell(10,6,$i,0,0,'C');
	 		$pdf->Cell(90,6,$date_current. '    ________________________________',0,1,'C');

	 		// $pdf->Cell(30,6,,0,1,'C');
	 		$i++;
	 	}				 	
	 	$day++;
	}

	$pdf->Ln();
	$pdf->SetFont('Times','I',10);
	$pdf->Cell(10,8,utf8_decode('N°'),1,0,'C');
	$pdf->Cell(28,8,'Fecha',1,0,'C');
	$pdf->Cell(30,8,'Pago',1,0,'C');
	$pdf->Cell(25,8,'Firma',1,1,'C');
	$pdf->Ln(2);
	
	$date = date($fec_cli); 
	$i = 1;
	$day = 1;
	while ($i <= 15) {

		$date_timestam = strtotime($date."+".$day." day");
		$date_current = date("d-m-Y", $date_timestam);
		
		$num_day = date("N", $date_timestam);
		
	 	if($num_day != 7){
	 		$pdf->SetFont('Times','I',10);
	 		$pdf->Cell(10,6,$i,0,0,'C');
	 		// $pdf->Cell(35,6,'Pago',0,1,'L');
	 		$pdf->Cell(90,6,$date_current. '    ________________________________',0,1,'C');

	 		// $pdf->Cell(30,6,,0,1,'C');
	 		$i++;
	 	}				 	
	 	$day++;
	}

	$pdf->setXY(107,153);
	// $pdf->SetFont('Times','B',16);
	// $pdf->Cell(0,18,'Lista de Pago',0,1,'C');
	// $pdf->Ln();
	$pdf->SetFont('Times','I',10);
	$pdf->Cell(10,8,utf8_decode('N°'),1,0,'C');
	$pdf->Cell(28,8,'Fecha',1,0,'C');
	$pdf->Cell(30,8,'Pago',1,0,'C');
	$pdf->Cell(25,8,'Firma',1,1,'C');
	$pdf->Ln(3);
	
	
	$i = 16;
	while ($i <= 30) {

		$date_timestam = strtotime($date."+".$day." day");
		$date_current = date("d-m-Y", $date_timestam);
		
		$num_day = date("N", $date_timestam);
		
	 	if($num_day != 7){
	 		$pdf->setX(107);
	 		$pdf->SetFont('Times','I',10);
	 		$pdf->Cell(10,6,$i,0,0,'C');
	 		$pdf->Cell(90,6,$date_current. '    ________________________________',0,1,'C');

	 		// $pdf->Cell(30,6,,0,1,'C');
	 		$i++;
	 	}				 	
	 	$day++;
	}
	$pdf->Output();
	

	

?>
