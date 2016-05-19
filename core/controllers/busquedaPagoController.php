<?php  
	if (!isset($_SESSION['app_id'])){
		include(HTML_DIR.'public/goLogin.php');
	}

	else
	{
	

	$db = new Conexion();
// 	f_ini
// f_fin
	$f_ini = $_POST['f_ini'];
	$f_fin = $_POST['f_fin'];
	$sql = $db->query("SELECT * FROM movpag WHERE FEC_PAG BETWEEN '$f_ini' AND '$f_fin'");

	if($db->rows($sql) > 0)
	{
		$html = "<table>
					    <tr>
					      <th>Folio</th>
					      <th>Fecha</th>
					      <th>Importe</th>
					      <th>Factura</th>
					      <th>Cliente</th>
					    </tr>";
				while($row = $db->runs($sql))
				{

				  $html .= "<tr>
				  <td>" . $row['NUM_PAG'] . "</td>
                  <td>" . $row['FEC_PAG'] . "</td>
                  <td>" . $row['IMP_PAG'] . "</td>
                  <td>" . $row['NUM_FAC'] . "</td>
                  <td>" . $row['NUM_CLI'] . "</td>";

				} 
				$html .= "</table>";

		$re = array(
     	"id" => '1',
     	"resultado" => $html
   		 );	
	}
	else
	{	
		$html = '<div class="alert alert-dismissible alert-success">
	  			  <button type="button" class="close" data-dismiss="alert">&times;</button>
	              <strong>Atención</strong> sin resultados de busqueda.
	              </div>';

		$re = array(
     	"id" => '2',
     	"resultado" => $html
   		 );	
	}
	

		$db->liberar($sql);
		$db->close();    
		echo json_encode($re);
		
	}
	
?>
