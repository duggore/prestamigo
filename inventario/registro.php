<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="jason" content="Inicio">
    <meta name="keyword" content="Menu, Bootstrap, inventario, internet, smartphone, Responsivo, Fluido, HD">

    <title>Sistema de inventario</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />

    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php
        include 'conf/connect.php';
    		include 'conf/functions.php';
     ?>
  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">

		      <form method="POST" class="form-login">
	<?php
			if (isset($_POST['submit'])) {
				$name = $_POST['name'];
			 	$username = $_POST['username'];
			 	$password = $_POST['password'];
			 	$correo = $_POST['correo'];

			 	if(empty($username) or empty($password)){
			 				echo '<script language="javascript">';
							echo 'alert("Existen campos faltantes")';
							echo '</script>';
			 	}else{
			 		mysql_query("INSERT INTO usuarios VALUES ('', '$name', '$username', '$password', '2', 'a','$correo')");
			 				echo '<script language="javascript">';
							echo 'alert("Te has registrado exitosamente!")';
							echo '</script>';
			}
			}
	?>

		        <h2 class="form-login-heading">Registrate</h2>
		        <div class="login-wrap">
		            <input type='text' name='name' class='form-control' placeholder='Nombre' autofocus>
		            <br>
		            <input type='text' name='username' class='form-control' placeholder='Usuario' autofocus>
		            <br>
		            <input type='password' name='password' class='form-control' placeholder='Password' >
		            <br>
		            <input type='text' name='correo' class='form-control' placeholder='Correo' >
		            <br>
		            <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-edit"></i> Registrarse</button>
		            <hr>
		            <p>

		            <div class="registration">
		                ¿Ya tienes una cuenta?<br/>
		                <a class="" href="login.php">
		                    Aquí puedes iniciar sesión
		                </a>
		            </div>

		        </div>

		      </form>

	  	</div>
	  </div>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>


  </body>
</html>
