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


	    <!-- CODIGO QUE CONECTA A LA BASE DE DATOS, FUNCIONES DE LOGGIN Y COMPRUEBA SI EXISTE UNA SESION
	     INICIADA Y TE REDIRIGE A index.php -->
    <?php
        include 'conf/connect.php';
    		include 'conf/functions.php';
    	    if (loggedin()) {
          	header('location: index.php');
        }
     ?>



  </head>

  <body>

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  <div id="login-page">
	  	<div class="container">


	  		 <!-- CODIGO PHP QUE TOMA EL USUARIO Y CONTRASEÑA Y LO BUSCA EN LA BASE DE DATOS -->

		      <form method="POST" class="form-login" >
        	<?php
        			if (isset($_POST['submit'])) {
        			 	$username = $_POST['username'];
        			 	$password = $_POST['password'];

        			 	if(empty($username) or empty($password)){
        			 				echo '<script language="javascript">';
        							echo 'alert("Existen campos faltantes")';
        							echo '</script>';
        			 	}else{
        			 		$check_login = mysql_query("SELECT id, estado FROM usuarios WHERE usuario='$username' AND password='$password'");
        			 		if(mysql_num_rows($check_login)==1){
        			 			$run = mysql_fetch_array($check_login);
        			 			$user_id=$run['id'];
        			 			$type=$run['estado'];

        			 			if($type == 'd'){
        			 				echo '<script language="javascript">';
        							echo 'alert("Tu cuenta ha sido desactivada")';
        							echo '</script>';
        			 			}else{
        			 				$_SESSION['user_id'] = $user_id;
        			 				header('location: index.php');
        			 			}
        			 			}else {
        			 				echo '<script language="javascript">';
        							echo 'alert("Usuario o Password incorrecto")';
        							echo '</script>';
        			 			}
        			 		}
        			 	}
        	?>


		        <h2 class="form-login-heading">Iniciar sesión</h2>
		        <div class="login-wrap">
		            <input type='text' name='username' class='form-control' placeholder='Usuario' autofocus>
		            <br>
		            <input type='password' name='password' class='form-control' placeholder='Password' >
					<br>
		            <button class="btn btn-theme btn-block" type="submit" name="submit"><i class="fa fa-lock"></i> Iniciar sesión</button>
		            <hr>

		            <div class="registration">
		                ¿Aún no tiene una cuenta?<br/>
		                <a class="" href="registro.php">
		                    Aquí puede crear una
		                </a>
		            </div>

		        </div>

		          <!-- Modal -->
		          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
		              <div class="modal-dialog">
		                  <div class="modal-content">
		                      <div class="modal-header">
		                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
		                          <h4 class="modal-title">Forgot Password ?</h4>
		                      </div>
		                      <div class="modal-body">
		                          <p>Enter your e-mail address below to reset your password.</p>
		                          <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

		                      </div>
		                      <div class="modal-footer">
		                          <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
		                          <button class="btn btn-theme" type="button">Submit</button>
		                      </div>
		                  </div>
		              </div>
		          </div>
		          <!-- modal -->

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
