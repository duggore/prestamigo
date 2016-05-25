<?php include(HTML_DIR.'/dise-secu/header.php'); ?>  
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<p class="titulosec">> CONSULTA DE ZONAS</p>
			<?php  
				$db = new Conexion();
				$sql = $db->query("SELECT * FROM catazon;");
				echo "<table><thead>
					    <tr>
					      <th>Clave</th>
					      <th>Descripción</th>
					    </tr></thead><tbody>";
				while($row = $db->runs($sql))
				{

				  echo "<tr>
				  <td>" . $row['NUM_ZON'] . "</td>
                  <td>" . $row['DES_ZON'] . "</td></tr>";

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