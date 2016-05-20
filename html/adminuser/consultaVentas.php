<?php include(HTML_DIR.'/dise-secu/header.php'); ?>  
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
		<p class="titulosec">> CONSULTA DE VENTAS</p>

		<article class="contenfechaif">
			<article class="fei">
			<label class="ema">Fecha Inicial: </label><br>
			<input id="f_inicial" type="date" class="emai" value="<?=date("Y-m-d");?>"></article>
			<article class="fei">
			<label class="ema">Fecha Final: </label><br>
			<input id="f_final" type="date" class="emai" value="<?=date("Y-m-d");?>"></article>
			<article class="fei btn">
			<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#f_inicial').val(),$('#f_final').val())">BUSCAR</button></article>

			</article>

			<div id="muestratabla"></div>
		</article>

	</section>
	<script src="views/app/js/goConsulta.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>