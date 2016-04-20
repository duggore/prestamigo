<?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<p class="titulosec">> CONSULTA DE CLIENTE</p>
			<?php  
				$db = new Conexion();
				
				echo '<table>
					    <tr>
					      <th>Nombre</th>
					      <th>Importe</th>
					      <th>Fecha</th>
					    </tr>';
				$sql = $db->query("SELECT CLI.NOM_CLI, PAG.IMP_PAG, PAG.FEC_PAG  FROM catacli as CLI, movpag AS PAG WHERE CLI.NUM_CLI = PAG.NUM_CLI;");
				while($row =$db->runs($sql))
				{

				  echo '<tr>
                  <td>' . $row['NOM_CLI'] . '</td>
                  <td>' . $row['IMP_PAG'] . '</td>
                  <td>'. $row['FEC_PAG'] . '</td>
                  </tr>';
				} 
				echo "</table>";
			?>
		</article>

	</section>
	<!-- <script src="views/app/js/goPrestamo.js"></script> -->
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<!-- <script src="views/bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>