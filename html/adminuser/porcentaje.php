<?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>
 

		<article id="dere" class="derechasection">
			<p class="titulosec">Mantenimiento&nbsp;>>&nbsp;Porcentaje&nbsp;>>&nbsp;Porcentaje de Interes</p>
			<form class="for" role="form" onkeypress="return runScriptReg(event)" onsubmit="return false;">
				<div id="_AJAX_REG_"></div><br><br>


				<label class="ema">Porcentaje de Interes:</label><br>
				<input id="por_int" type="text" class="emai" placeholder="<?=$interes['id'];?>"><br><br>
			</form>

			<div id="button">
			<button class="button yellow medium radius" onclick="goModifica()">GRABAR</button>
			<button class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR</button>
			</div>
			
		</article>

	</section>
	<script src="views/app/js/goRegPorcentaje.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>

