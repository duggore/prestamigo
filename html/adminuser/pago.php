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
				
				<label class="ema">Folio Pago:</label><br>
				<!-- <input id="user_busca" type="text" class="emai" onkeyup="Buscar($('#user_busca').val())" placeholder="Número Cliente o Nombre"><br><br><br> -->
				<input id="user_id" type="text" class="emai"  value="" placeholder="<?=$pagos['id'];?>"><br><br>

				<div class="contefoliofech">
				<div class="uno">
					<label class="ema">Credito</label><br>
					<input id="fol_cre" type="text" class="emai"  value="" placeholder="Credito">
				</div>
				<button type="button" class="yellow medium radius btn-name name" onclick="Id($('#fol_cre').val())">BUSCAR</button>
				</div><br>

				<label class="ema">Fecha Pago:</label><br>
				<input id="fec_pag" type="date" class="emai"><br><br>
				<!-- <div id="fec_pag" class="emai"></div><br>  -->

				<label class="ema">Total a Aplicar:</label><br>
				<input type="text" id="tot_apli" class="emai"><br><br>
				<!-- <div ></div><br> -->
				
				<label class="ema">Total Credito</label><br>
				<div id="tot_cre" class="emai"></div><br>

				<!-- <label class="ema">Forma de Pago</label><br>
				<div id="for_pag" class="emai"></div><br><br>
			
				<label class="ema">Referencia</label><br>
				<div id="ref_pag" class="emai"></div><br><br> -->

				<label class="ema">Total Pagos</label><br>
				<div id="tot_pag" class="emai"></div><br><br>

				<label class="ema">Saldo Credito</label><br>
				<div id="sal_cre" class="emai"></div><br><br>

				<label class="ema">Estatus Credito</label><br>
				<div id="sta_tus" class="emai"></div><br><br>

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
