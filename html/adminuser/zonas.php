<?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>
 

		<article id="dere" class="derechasection">
			<p class="titulosec">Mantenimiento&nbsp;>>&nbsp;Agentes&nbsp;>>&nbsp;Registro de Zonas</p>
			<form class="for" role="form" onkeypress="return runScriptReg(event)" onsubmit="return false;">
				<div id="_AJAX_REG_"></div><br><br>

				<label class="ema">Ultimo Folio:</label><br>
				<input id="zona_folio" type="text" class="emai" placeholder="<?=$zona['id'];?>" disabled><br><br>
				
				<label class="ema">Agente</label><br>
				<div class="buscaname">
					<input type="text" id="user" list="zona_busca" class="emai busname" placeholder="Nombre Zona">
					<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#user').val())">BUSCAR</button>
				</div><br>
				
				<?php 
					$db = new Conexion();
					$sql = $db->query("SELECT * FROM catazon;");
					echo "<datalist id='zona_busca'>";
						while ($row = $db->runs($sql)){
						echo '<option value="'.$row['DES_ZON'].'">'.$row['NUM_ZON'].'</option>';
					}
					$db->liberar($sql);
					$db->close();
					echo '</datalist>';
				?>

				<label class="ema">Descripción:</label><br>
				<input id="zona_name" type="text" class="emai" placeholder="Descripción"><br><br>
			</form>

			<div id="button">
			<button id="registro" class="button yellow medium radius" onclick="goRegZona()">Grabar</button>
			<button id="modifica" style='display:none;' class="button yellow medium radius" onclick="goModificaZona()">Grabar</button>
			<button class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR</button>
			<button id="elimina" style='display:none;' class="button yellow medium radius" onclick="Elimina('¿Está seguro que desea Eliminar?','?view=cancela&mode=eliminarZona&id='+$('#zona_folio').val()+'')">Eliminar</button>
			</div>
			
		</article>

	</section>
	<script src="views/app/js/goRegZona.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




