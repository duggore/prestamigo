
<?php include (HTML_DIR.'dise-secu/header.php'); ?>

<body class="body">
	<section class="iniciosesion">
		<form id="inicios" action="" method="POST">
			<div id="c1">INICIAR SESIÓN</div>
			<div id="conten">
				<div id="c2">
					<input id="nom" class="emai" type="text" name="usuario" size="30" maxlength="40" placeholder="Usuario"  required><br><br>
					<input id="pas" class="emai" type="password" name="contra" size="30" maxlength="40" placeholder="Contraseña" required />
				</div>
				<div id="c3">
					<input  class="boton" type="submit" value="INICIAR SESIÓN">
				</div><br>
				<hr width="90%">
			</div>

			<div class="registration">
				¿Aún no tiene una cuenta?<br/>
				<a class="" href="#">
				Aquí puede crear una
				</a>
			</div>	
			<br>
		</form>
	</section>
</body>
</html>