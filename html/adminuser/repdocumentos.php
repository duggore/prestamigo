 <?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection"> 
		<p class="titulosec"> Reportes&nbsp;>>&nbsp;Documentos</p>
			<p class="aqui">Aquí puede realizar los siguientes reportes:</p>
			<article class="conteopciones docbus">

			<article class="contenfechaif">
			<p class="aqui bus">Buscar por el número de crédito</p>
				<input type="text" class="emai" name="" id="id_cre" placeholder="Número Crédito">

				<button id="imprimir" class="button yellow medium radius" onclick="javascript:window.open('?view=cancela&mode=imprimir&id='+$('#id_cre').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')">Buscar</button>

				<!-- <a href="?view=cancela&mode=imprimir&id=<?php echo $_GET['id_credito'];?>" class="yellow medium radius btn-name">Buscar</a> -->
				
				<!-- <input type="button" value="Nueva ventana" onclick="javascript:window.open('http://norfipc.com/','','width=600,height=400,left=50,top=50,toolbar=yes');" /> -->

				<!-- <a href="javascript:window.open('http://norfipc.com/','','width=600,height=400,left=50,top=50,toolbar=yes');void 0">BUSCAR 2</a><br /> -->

			</article>
		</article>

	</section>
	<script src="views/app/js/jquery-2.2.3.min.js"></script>
	<script src="views/app/js/jquery-ui.min.js"></script>
	<script src="views/app/js/goPrestamo.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




