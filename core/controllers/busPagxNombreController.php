<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
		$db = new Conexion();
		$val = $_POST['val'];
		if($val !='')
		{
			$sql = $db->query("SELECT * FROM catacli WHERE NOM_CLI ='$val';");
			$row = $db->runs($sql);
			$pagdiario = $row['IMP_PAGD'];
			$id_fac = $row['NUM_FAC'];

			$consulta2 = $db->query("SELECT *,COUNT(NUM_PAG) AS NUM_PAG FROM movpag WHERE NUM_FAC = '$id_fac' AND REF_ERE !='Cancelado';");
			$row3 = $db->runs($consulta2);
		
			$consulta = $db->query("SELECT * FROM totfac WHERE NUM_FAC='$id_fac';");
			$row2 = $db->runs($consulta);

			$consulta2 = $db->query("SELECT * FROM movpag WHERE NUM_FAC='$id_fac';");


			$html = "<table><thead>
					    <tr>
					      <th>Folio</th>
					      <th>Fecha</th>
					      <th>Monto</th>
					      <th>Estatus</th>
					      <th>Opción</th>
					    </tr></thead><tbody>";
				while($row4 = $db->runs($consulta2))
				{
				  $html .= "<tr>
				  <td>" . $row4['NUM_PAG'] . "</td>
                  <td>" . $row4['FEC_PAG'] . "</td>
                  <td>" . $row4['IMP_PAG'] . "</td>
                  <td>" . $row4['REF_ERE'] . "</td>
                  <td>" . (($row4['REF_ERE']=='0') ? '<a href="?view=cancela&mode=cancelapag&id='.$row4['NUM_PAG'].'"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i>Cancelar</button></a>' : ""). "</td>
                  </tr>";

				} 
				$html .= "</tbody></table>";

		
	       $re = array(
		     	"id" => '1',
			  	"id_fac"  =>  $row2['NUM_FAC'],
			  	"fecha"  =>  $row2['FEC_FAC'],
			  	"pag_tot"  =>  $row2['TOT_PAG'],
			  	"pag_dia"  =>  $pagdiario,
			  	"num_pag"  =>  $row3['NUM_PAG'],
			  	"tipo"  =>  $row2['TIP_PAG'],
			  	"saldo"  =>  $row2['SAL_DOF'],
			  	"estatus"  =>  $row2['STA_TUS'],
			  	"referencia"  =>  $row3['REF_ERE'],
			  	"cancelar"  =>  $html					  	
	        );	
	          		

			$db->liberar($sql,$consulta);
		}

	else
	{
		$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Campo vacio, Introduce dato...
	              </div>';

			$re = array( 
				"id" => '2',
				"mensaje"  =>  $html
	        );	
	}

		echo json_encode($re);
		$db->close();
				
	}

	
?>