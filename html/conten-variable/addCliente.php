<?php include(HTML_DIR.'dise-secu/header.php'); ?>
<body>
	<article class="panel">
		<article class="pizquierda">
			<figure class="contienelogo">
				<img class="logo" src="views/app/images/logo.png" alt="">
			</figure>
			<article class="ppanel">
				<p class="ppanel">PRESTAMIGUITO</p>
				<p class="ppanel2">Sistema de Crédito</p>
			</article>
		</article>
		<?php include (HTML_DIR.'dise-secu/relog.php'); ?>
	</article>

	<section>

		<article class="izquierdasection">
				<article id="name">
		            <figure id="imgEstudiante">
		               <img src="views/app/images/Cliente.jpg" alt="">
		            </figure>
            		<p class="bien">Bienvenid@</p>
         		</article>			
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?>
		</article>


		<article id="dere" class="derechasection">
			<h1>REGISTRO DE CLIENTE</h1>
			<form>
				<label for="inputEmail">Nombre</label>
				<input type="email" class="form-control"  placeholder="Nombre">
			
				<label for="inputDirD">Dirección Domicilio</label>
				<input type="password" class="form-control" placeholder="Dirección Domicilio">
			
				<label for="inputDirN">Dirección Negocio</label>
				<input type="password" class="form-control" placeholder="Dirección Negocio">
			
				<label for="inputCD">Ciudad/Estado</label>
				<input type="password" class="form-control" placeholder="Ciudad y Estado">
			
				<label for="inputGN">Giro del Negocio</label>
				<input type="password" class="form-control" placeholder="Giro del Negocio">
			
				<label for="inputTel">Número Teléfono</label>
				<input type="password" class="form-control" placeholder="Número Teléfono">
			
				<label for="inputAg">Agente de Cobro</label>
				<input type="password" class="form-control" placeholder="Agente de Cobro">
			
				<label for="inputAg">Agente de Cobro</label>
				<input type="password" class="form-control" placeholder="Agente de Cobro">
			
				<button type="submit" class="btn btn-primary">Registrar</button>
			</form>
		</article>

	</section>
	<script src="view/app/boostrap/js/jquery.js"></script>
	<script src="view/app/boostrap/js/boostrap.min.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>



