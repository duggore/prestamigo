 <?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>
 

		<article id="dere" class="derechasection">
			<p class="titulosec">Mantenimiento&nbsp;>>&nbsp;Clientes&nbsp;>>&nbsp;Registro de Cliente</p>
			<div class="for" role="form" onkeypress="return runScriptReg(event)">
				<div id="_AJAX_REG_"></div><br><br>
				
				<label class="ema">Id</label><br>
				<div class="buscaname">
					<input type="text" id="user" list="users_busca" class="emai busname" placeholder="Nombre Cliente">
					<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#user').val())">BUSCAR</button>
				</div><br>

				<label class="ema">Nombre (s):</label><br>
				<input id="user_name" type="email" class="emai" placeholder="Nombre"><br><br>
			
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
			
				<label class="ema">Agente de Cobro:</label><br>
				<select placeholder="Número Teléfono" name="Agentes" id="user_agente" class="emai" >
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

			<div id="button">
			<button class="button yellow medium radius" onclick="goReg()">REGISTRAR</button>
			</div>
		</article>

	</section>
	<script src="views/app/js/goReg.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




