<?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>
 

		<article id="dere" class="derechasection">
			<p class="titulosec">Mantenimiento&nbsp;>>&nbsp;Agentes&nbsp;>>&nbsp;Registro de Agentes</p>
			<form class="for" role="form" onkeypress="return runScriptReg(event)" onsubmit="return false;">
				<div id="_AJAX_REG_"></div><br><br>

				<label class="ema">Ultimo Folio:</label><br>
				<input id="agente_folio" type="text" class="emai" placeholder="<?=$agente['id'];?>" disabled><br><br>
				
				<label class="ema">Agente</label><br>
				<div class="buscaname">
					<input type="text" id="user" list="agente_busca" class="emai busname" placeholder="Nombre Agente">
					<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#user').val())">BUSCAR</button>
				</div><br>
				
				<?php 
					$db = new Conexion();
					$sql = $db->query("SELECT * FROM cataage;");
					echo "<datalist id='agente_busca'>";
						while ($row = $db->runs($sql)){
						echo '<option value="'.$row['NOM_AGE'].'">'.$row['NUM_AGE'].'</option>';
					}
					$db->liberar($sql);
					$db->close();
					echo '</datalist>';
					
					
				?>

				<label class="ema">Nombre (s):</label><br>
				<input id="agente_name" type="text" class="emai" placeholder="Nombre"><br><br>
			
				<label class="ema">Ventas:</label><br>
				<input id="agente_venta" type="text" class="emai" placeholder="Ventas"><br><br>
			
				<label class="ema">Zona:</label><br>
					<select placeholder="" name="Agentes" id="user_zona" class="emai" >
					<option value="">Selecciona Zona</option>
					<?php  
						$bd = new Conexion();
						$sql = $bd->query("SELECT * FROM catazon");
						while($row = $bd->runs($sql))
						{
							echo '<option value='.$row['NUM_ZON'].'>'.$row['DES_ZON'].'</option>';	
						}
						
					?>
				</select><br><br>
			
				<label class="ema">% Comisión:</label><br>
				<input id="agente_comision" type="text" class="emai" placeholder="Comisión"><br><br>
			</form>

			<div id="button">
			<button id="registro" class="button yellow medium radius" onclick="goRegAgente()">Grabar</button>
			<button id="modifica" style='display:none;' class="button yellow medium radius" onclick="goModificaAgente()">Grabar</button>
			<button class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR</button>
			
			<button id="elimina" style='display:none;' class="button yellow medium radius" onclick="Elimina('¿Está seguro que desea Eliminar?','?view=cancela&mode=eliminar&id='+$('#user').val()+'')">Eliminar</button>
			</div>
			
		</article>

	</section>
	<script src="views/app/js/goRegAgente.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




