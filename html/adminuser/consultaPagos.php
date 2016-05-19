<?php include(HTML_DIR.'/dise-secu/header.php'); ?>  
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<label class="ema">Fecha Inicial: </label><br>
			<input id="f_inicial" type="date" class="emai" value="<?=date("Y-m-d");?>"><br><br>

			<label class="ema">Fecha Final: </label><br>
			<input id="f_final" type="date" class="emai" value="<?=date("Y-m-d");?>"><br><br>

			<button type="button" class="yellow medium radius btn-name" onclick="Buscar2($('#f_inicial').val(),$('#f_final').val())">BUSCAR</button>

			<div id="muestratabla"></div>
		</article>

	</section>
	<script src="views/app/js/goConsulta.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>