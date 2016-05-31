<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{ 
	

	$db = new Conexion();
	$id = $_POST['val'];

		if($id !='')
		{

				
				$consulta = $db->query("SELECT * FROM catacli WHERE NUM_FAC = '$id';");
				

				if($db->rows($consulta) > 0)
				{
					
					$row = $db->runs($consulta);
					$id_fac = $row['NUM_FAC'];	
					
					$consulta2 = $db->query("SELECT *,COUNT(NUM_PAG) AS NUM_PAG FROM movpag WHERE NUM_FAC = '$id' AND REF_ERE !='Cancelado';");
					$row2 = $db->runs($consulta2);

					$consulta3 = $db->query("SELECT * FROM totfac WHERE NUM_FAC = '$id';");
					$row3 = $db->runs($consulta3);

					$consulta4 = $db->query("SELECT * FROM movpag WHERE NUM_FAC='$id_fac';");

					$html = "<table class='tablap'><thead>
					    <tr>
					      <th>Folio</th>
					      <th>Fecha</th>
					      <th>Monto</th>
					      <th>Estatus</th>
					      <th>Opción</th>
					    </tr></thead><tbody>";
						while($row4 = $db->runs($consulta4))
						{
						  $html .= "<tr>
						  <td>" . $row4['NUM_PAG'] . "</td>
		                  <td>" . $row4['FEC_PAG'] . "</td>
		                  <td>" . $row4['IMP_PAG'] . "</td>
		                  <td>" . $row4['REF_ERE'] . "</td>
		                  <td>" . (($row4['REF_ERE']=='0') ? '<a href="?view=cancela&mode=cancelapag&id='.$row4['NUM_PAG'].'"><button class="btn cancel btn-danger btn-xs">Cancelar</button></a>' : ""). "</td>
		                  </tr>";

						} 

					$html .= "</tbody></table>";

				
						       $re = array(
						     	"id" => '1',
						     	"name"  =>  $row['NOM_CLI'],
							  	"tot_pag"  =>  $row['IMP_PRE'],
							  	"pag"  =>  $row2['NUM_PAG'],
							  	"referencia"  =>  $row2['REF_ERE'],
							  	"sal_fin"  =>  $row['SAL_CLI'],
							  	"pag_dia"  =>  $row['IMP_PAGD'],
							  	"forma_pago"  =>  $row3['TIP_PAG'],
							  	"sta_tus"  =>  $row3['STA_TUS'],
							  	"cancelar"  =>  $html
					        );	

			    	$db->liberar($consulta);    
			    }
			    else
					{
						$html = 
			          			'<div class="alert alert-dismissible alert-warning">
				  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
				              		<strong>Numero de credito no existe<strong>';

						$re = array( 
							"id" => '2',
							"mensaje"  =>  $html
				        );	
					}


		}

		else
		{
			$html = 
          			'<div class="alert alert-dismissible alert-warning">
	  			  		<button type="button" class="close" data-dismiss="alert">&times;</button>
	              		<strong>Introduce un numero de credito...
	              </div>';

			$re = array( 
				"id" => '3',
				"mensaje"  =>  $html
	        );	
		}

			echo json_encode($re);
			$db->close();
	}
	
?>