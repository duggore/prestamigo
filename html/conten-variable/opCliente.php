<?php include(HTML_DIR.'dise-secu/header.php'); ?>
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?>
		</article>


		<article id="dere" class="derechasection">
			<p class="titulosec"> Mantenimiento&nbsp;>>&nbsp;Clientes</p>
			<p class="aqui">Aquí puede realizar las siguientes acciones:</p>
			<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-users fa-5x"></i>
							<p class="rcliente">Registrar Cliente</p>
						</article>
					</article>
					<a href="?view=insert"><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Modificar Cliente</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>


			</article>
		</article>

	</section>
	<script src="view/app/boostrap/js/jquery.js"></script>
	<script src="view/app/boostrap/js/boostrap.min.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>
</html>



