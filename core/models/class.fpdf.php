<?php  
	// require('core/core.php');
	$db = new Conexion();
	$id = intval($_GET['id']);
	$sql = $db->query("SELECT * FROM totfac WHERE NUM_FAC='$id'");
	$row = $db->runs($sql);
	$id_cliente = $row['NUM_CLI'];
	$fecha = strtotime($row['FEC_PAG']);
	$fec_cli = date("d-m-Y", $fecha);
	$agente = $row['NUM_AGE'];

	$sql2 = $db->query("SELECT * FROM catacli WHERE NUM_ClI='$id_cliente'");
	$row2 = $db->runs($sql2);
	$name_cliente= $row2['NOM_CLI'];
	$dir_num= $row2['DIR_NUM'];
	$dir_col= $row2['DIR_COL'];
	$dir_ciu= $row2['DIR_CIU'];
	$tel_cli= $row2['TEL_CLI'];


	if ($id_cliente < 10)
		{
			// $new = $id_cliente +1;
			$clientes= '0000'.$id_cliente;	
		}

		if ($id_cliente >= 10)
		{
			// $new = $id_cliente + 1;
			$clientes= '000'.$id_cliente;	
		}
		

		if ($id_cliente >= 100)
		{
			// $new = $id_cliente +1;
			$clientes= '00'.$id_cliente;	
		}

		if ($agente >= 1000)
		{
			// $new = $agente +1;
			$clientes= '0'.$id_cliente;	
		}

		if ($agente >= 10000)
		{
			// $new = $agente +1;
			$clientes=  $id_cliente;	
		}

	if ($agente < 10)
		{
			// $new = $agente +1;
			$id_agente= '0000'.$agente;	
		}

		if ($agente >= 10)
		{
			// $new = $agente + 1;
			$id_agente= '000'.$agente;	
		}
		

		if ($agente >= 100)
		{
			// $new = $agente +1;
			$id_agente= '00'.$agente;	
		}

		if ($agente >= 1000)
		{
			// $new = $agente +1;
			$id_agente= '0'.$agente;	
		}

		if ($agente >= 10000)
		{
			// $new = $agente +1;
			$id_agente=  $agente;	
		}


	if ($id < 10)
		{
			$id_credito= '0000'.$id;	
		}

		if ($id >= 10)
		{
			$id_credito= '000'.$id;	
		}
		

		if ($id >= 100)
		{
			$id_credito= '00'.$id;	
		}

		if ($id >= 1000)
		{
			$id_credito= '0'.$id;	
		}

		if ($id >= 10000)
		{
			$id_credito=  $id;	
		}

	$pdf=new FPDF();

	$pdf->AddPage();
	// $pdf->Image('artesanias4.jpg',1,1,60,50,'jpg');
	$pdf->SetFont('Times','B',10);
	$pdf->Cell(15,10,'Agente:'.'('.$id_agente.')',0,0);
	$pdf->setX(58);
	$pdf->Cell(15,10,'Credito # : '.$id_credito,0,1);
	$pdf->setXY(58,15);
	$pdf->Cell(15,10,'Pago Diario $ : '.$id_credito,0,1);
	$pdf->setXY(58,20);
	$pdf->Cell(15,10,'Fecha Prestamo: '.$fec_cli,0,0);
	$pdf->setY(25);
	$pdf->Cell(15,6,'Cliente: '.$clientes,0,1);
	$pdf->Cell(93,6,'Cliente: '.$name_cliente,0,1);
	$pdf->Cell(93,6,$dir_num.' '.$dir_col.' '. $dir_ciu,0,1);
	$pdf->Cell(93,6,$tel_cli,0,0);
	$pdf->Ln(8);
	$pdf->SetFont('Times','I',10);
	$pdf->Cell(10,8,utf8_decode('N°'),1,0,'C');
	$pdf->Cell(28,8,'Fecha',1,0,'C');
	$pdf->Cell(30,8,'Pago',1,0,'C');
	$pdf->Cell(25,8,'Firma',1,1,'C');
	$pdf->Ln(3);
	
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
