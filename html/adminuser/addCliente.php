 <?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>
 

		<article id="dere" class="derechasection">
			<p class="titulosec">Mantenimiento&nbsp;>>&nbsp;Clientes&nbsp;>>&nbsp;Registro de Cliente</p>
			<form class="for" onsubmit="return false;">
				<div id="_AJAX_REG_"></div><br><br>
		

				<label class="ema">Nombre Cliente</label><br>
				<div class="buscaname">
					<input type="text" id="user" list="user_busca" class="emai busname" placeholder="Nombre Cliente">
					<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#user').val())">BUSCAR</button>
				</div><br>
				
				<?php 
					$db = new Conexion();
					$sql = $db->query("SELECT * FROM catacli;");
					echo "<datalist id='user_busca'>";
						while ($row = $db->runs($sql)){
						echo '<option value="'.$row['NOM_CLI'].'">'.$row['NUM_CLI'].'</option>';
					}
					$db->liberar($sql);
					$db->close();
					echo '</datalist>';
					
					
				?>

				<label class="ema">Ultimo Folio:</label><br>
				<input id="user_folio" type="text" class="emai" placeholder="<?=$addcliente['id'];?>" disabled><br><br>

				<label class="ema">Nombre (s):</label><br>
				<input id="user_name" type="text" class="emai" placeholder="Nombre"><br><br>
			
				<label class="ema">Dirección Domicilio:</label><br>
				<input id="user_dir" type="text" class="emai" placeholder="Dirección Domicilio"><br><br>
			
				<label class="ema">Dirección Negocio:</label><br>
				<input id="user_dirNeg" type="text" class="emai" placeholder="Dirección Negocio"><br><br>
			
				<label class="ema">Ciudad/Estado:</label><br>
				<input id="user_dirCiu" type="text" class="emai" placeholder="Ciudad y Estado"><br><br>
			
				<label class="ema">Giro del Negocio:</label><br>
				<input id="user_giro"type="text" class="emai" placeholder="Giro del Negocio"><br><br>
			
				<label class="ema">Número Teléfono:</label><br>
				<input id="user_tel" type="text" class="emai" placeholder="Número Teléfono"><br><br>

				
			
			</form>

			<div id="button">
			<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Agente de Cobro:</label><br>
					<select placeholder="" name="Agentes" id="user_agente" class="emai" >
					<option value="">Selecciona Agente</option>
					<?php  
						$bd = new Conexion();
						$sql = $bd->query("SELECT * FROM cataage");
						while($row = $bd->runs($sql))
						{
							echo '<option value='.$row['NUM_AGE'].'>'.$row['NOM_AGE'].'</option>';	
						}
						
					?>
				</select>	
				  </div>

				  <div id="muestra" style="display: none;" class="cre cre2">
					<label class="ema"># de prestamo:</label><br>
					<div id="num_prestamo" class="emai"></div>
				  </div>
				</div><br>

				<div class="contenfoliocre">
				  <div class="fp">
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
				</select>	
				  </div>

				  <div id="muestra2" style="display: none;" class="cre cre2">
					<label class="ema">Importe de prestamo:</label><br>
					<div id="imp_prestamo" class="emai"></div>
				  </div>
				</div><br>

				<div id="muestra3" style="display: none;" class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Saldo:</label><br>
					<div id="saldo" class="emai"></div>
				  </div>

				  <div class="cre cre2">
					<label class="ema">Pago diario:</label><br>
					<div id="p_diario" class="emai"></div>
				  </div>
				</div><br><br><br><br>

				<div id="muestra4" style="display: none;" class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Ultimo prestamo:</label><br>
					<div id="ult_pres" class="emai"></div>
				  </div>

				  <div class="cre cre2">
					<label class="ema">Pagos restantes:</label><br>
					<div id="pag_res" class="emai"></div>
				  </div>
				</div><br><br><br><br>

				<div id="muestra5" style="display: none;" class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Ultimo pago:</label><br>
					<div id="ult_pag" class="emai"></div>	
				  </div>

				  <div class="cre cre2">
					<label class="ema">Folio de prestamo:</label><br>
					<div id="fol_pres" class="emai"></div>
				  </div>
				</div><br><br><br><br>

				<div id="muestra6" style="display: none;" class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Fecha de alta:</label><br>
					<div id="fec_alta" class="emai"></div>
				  </div>

				  <div class="cre cre2">
					<label class="ema">Bloqueo:</label><br>
					<input id="user_bloq" type="text" class="emai">
				  </div>
				</div><br><br><br><br>
			<button class="button yellow medium radius" onclick="goReg()">GRABAR</button>
			<button class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR</button>
			<button id="modifica" style='display:none;' class="button yellow medium radius" onclick="goModifica()">Modificar</button>
			<button id="elimina" style='display:none;' class="button yellow medium radius" onclick="Elimina('¿Está seguro que desea Eliminar?','?view=cancela&mode=eliminar&id='+$('#user_folio').val()+'')">Eliminar</button>
			</div>
			
		</article>

	</section>
	<script src="views/app/js/goReg.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




