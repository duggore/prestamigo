
<?php include (HTML_DIR.'dise-secu/header.php'); ?>

<body class="body">
	<section class="iniciosesion">
		<div role="form" id="inicios" onkeypress="return runScriptLogin(event)">
			<div class= "" id="_AJAX_LOGIN_"></div>

			<div id="c1">INICIAR SESIÓN</div>
			<div role="form" id="conten">
				<div id="c2">
					<input class="emai nom" type="text" id="user_login" size="30" maxlength="40" placeholder="Usuario"><br><br>
					<input class="emai pass" type="password" id="pass_login" size="30" maxlength="40" placeholder="Contraseña"/>
				</div>
				<div id="c3">
					<button class="boton" onclick="goLogin()">INICIAR SESIÓN</button>
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
		</div>
	</section>
	<script src="views/app/js/goSesion.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>