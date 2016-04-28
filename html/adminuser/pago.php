<?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<p class="titulosec">> PAGO CLIENTE</p>
			<div class="for" role="form" onkeypress="return runScriptPago(event)">
				<div id="_AJAX_PRE_"></div><br><br>
				
				<label class="ema">Nombre Cliente o Número Cliente:</label><br>
				<input id="user_busca" type="text" class="emai" onkeyup="Buscar($('#user_busca').val())" placeholder="Número Cliente o Nombre"><br><br><br>
					
				<label class="ema">Cliente:</label><br>
				<div id="user_name" class="emai"></div><br> 

				<label class="ema">Credito:</label><br>
				<div id="user_cre" class="emai"></div><br>
				
				<label class="ema">Total Credito</label><br>
				<div id="user_tcre" class="emai"></div><br>

				<label class="ema">Total Pago</label><br>
				<div id="user_tpag" class="emai"></div><br><br>
			
				<label class="ema">Saldo Credito</label><br>
				<div id="user_scre" class="emai"></div><br><br>

				<!-- <label class="ema">Estatus</label><br>
				<div id="user_est" class="emai"></div><br><br> -->
				
				
			</div>

				<div id="button">
				<button class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR CAMPOS</button>
				<button class="button yellow medium radius" onclick="goPago()">PAGAR</button>
				</div>
				
		</article>

	</section>
	<script src="views/app/js/goPago.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
