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
				$sql = $db->query("SELECT * FROM catacli;");
				echo "<table>
				      <thead>
					    <tr>
					      <th>Clave</th>
					      <th>Nombre</th>
					      <th>Agente</th>
					      <th>Credito</th>
					      <th>Importe</th>
					      <th>Saldo</th>
					      <th>Faltan</th>
					      <th>Pago Diario</th>
					    </tr>
					    </thead>
					    <tbody>";
				while($row = $db->runs($sql))
				{

				  echo "<tr>
				  <td>" . $row['NUM_CLI'] . "</td>
                  <td>" . $row['NOM_CLI'] . "</td>
                  <td>" . $row['NUM_AGE'] . "</td>
                  <td>" . $row['NUM_FAC'] . "</td>
                  <td>" . $row['IMP_PRE'] . "</td>
                  <td>" . $row['SAL_CLI'] . "</td>
                  <td>" . $row['DES_CLI'] . "</td>
                  <td>" . $row['IMP_PAGD'] . "</td></tr>";

				} 
				echo "</tbody></table>";
			?>
		</article>

	</section>
	<!-- <script src="views/app/js/goPrestamo.js"></script> -->
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<!-- <script src="views/bootstrap/js/bootstrap.min.js"></script> -->
</body>
</html>