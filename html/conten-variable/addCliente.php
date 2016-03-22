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
			<p class="titulosec">> REGISTRO DE CLIENTE</p>
			<form class="for">
				<label class="ema">Nombre (s):</label><br>
				<input type="email" class="emai"  placeholder="Nombre"><br><br>
			
				<label class="ema">Dirección Domicilio:</label><br>
				<input type="password" class="emai" placeholder="Dirección Domicilio"><br><br>
			
				<label class="ema">Dirección Negocio:</label><br>
				<input type="password" class="emai" placeholder="Dirección Negocio"><br><br>
			
				<label class="ema">Ciudad/Estado:</label><br>
				<input type="password" class="emai" placeholder="Ciudad y Estado"><br><br>
			
				<label class="ema">Giro del Negocio:</label><br>
				<input type="password" class="emai" placeholder="Giro del Negocio"><br><br>
			
				<label class="ema">Número Teléfono:</label><br>
				<input type="password" class="emai" placeholder="Número Teléfono"><br><br>
			
				<label class="ema">Agente de Cobro:</label><br>
				<input type="password" class="emai" placeholder="Agente de Cobro"><br><br>
			
				<label class="ema">Agente de Cobro:</label><br>
				<input type="password" class="emai" placeholder="Agente de Cobro"><br><br>
			
				<button type="submit" class="button yellow medium radius">Registrar</button>
			</form>
		</article>

	</section>
	<script src="view/app/boostrap/js/jquery.js"></script>
	<script src="view/app/boostrap/js/boostrap.min.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>



