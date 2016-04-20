<?php include(HTML_DIR.'dise-secu/header.php'); ?>
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?>
		</article>


		<article id="dere" class="derechasection">
			<p class="titulosec">Mantenimiento&nbsp;>>&nbsp;Clientes&nbsp;>>&nbsp;Registro de Cliente</p>
			<div class="for" role="form" onkeypress="return runScriptReg(event)">
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
				<input id="user_agente" type="text" class="emai" placeholder="Agente de Cobro"><br><br>
			
				<!-- <label class="ema">Agente de Cobro:</label><br>
				<input id="user_login" type="password" class="emai" placeholder="Agente de Cobro"><br><br> -->

				<button class="button yellow medium radius" onclick="goReg()">INICIAR SESIÓN</button>
			</div>
		</article>

	</section>
	<script src="view/app/boostrap/js/jquery.js"></script>
	<script src="view/app/boostrap/js/boostrap.min.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>
</html>



