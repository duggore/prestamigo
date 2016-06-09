<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Sistema de inventario</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="assets/lineicons/style.css">    
    
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <script src="assets/js/chart-master/Chart.js"></script>
    
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
  
  <?php include 'connect.php'; 
        include 'functions.php'; 

        if (!loggedin()) {
          header('location: login.php');
        }

        if ($user_level != 1) {
          header('location: index.php');
        }
  ?>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Mover Menú"></div>
              </div>
            <!--logo start-->
            <a href="index.php" class="logo"><b>Inventario</b></a>
            <!--logo end-->
            <div class="top-menu">
              <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="conf/logout.php">Cerrar Sesión</a></li>
              </ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
                  <p class="centered"><a href="index.php"><img src="assets/img/<?php echo $level_name ?>.jpg" class="img-circle" width="60"></a></p>
                  <h5 class="centered"><?php echo $username ?></b></h5>
                  <h5 class="centered">[<?php echo "$level_name"; ?>]</h5>
                    
                  <li class="mt">
                      <a href="index.php">
                          <i class="fa fa-home"></i>
                          <span>Inicio</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="javascript:;" >
                          <i class="fa fa-book"></i>
                          <span>Consultar</span>
                      </a>
                      <ul class="sub">
                          <li><a  href="consultaroriginal.php">Documentos originales</a></li>
                          <li><a  href="consultardigital.php">Documentos digitales</a></li>
                          <li><a  href="consultarmicrofilm.php">Microfilms</a></li>
                          <li><a  href="consultarservicio.php">Servicios</a></li>
                      </ul>
                  </li>



                  <?php 
                      if($user_level == 1){

                  echo '<li class="sub-menu">';
                    echo '<a href="javascript:;" >';
                      echo '<i class="fa fa-book"></i>';
                      echo '<span>Agregar</span>';    
                      echo '</a>';    
                      
                      echo '<ul class="sub">';
                          echo '<li><a  href="agregaroriginal.php">Documentos originales</a></li>';
                          echo '<li><a  href="agregardigital.php">Documentos digitales</a></li>';
                          echo '<li><a  href="agregarmicrofilm.php">Microfilms</a></li>';
                          echo '<li><a  href="agregarservicio.php">Servicios</a></li>';
                      echo '</ul>';
                          echo '</li>';

                  echo '<li class="sub-menu">';
                    echo '<a href="javascript:;" >';
                      echo '<i class="fa fa-book"></i>';
                      echo '<span>Eliminar</span>';    
                      echo '</a>';    
                      
                      echo '<ul class="sub">';
                          echo '<li><a  href="eliminaroriginal.php">Documentos originales</a></li>';
                          echo '<li><a  href="eliminardigital.php">Documentos digitales</a></li>';
                          echo '<li><a  href="eliminarmicrofilm.php">Microfilms</a></li>';
                          echo '<li><a  href="eliminarservicio.php">Servicios</a></li>';
                      echo '</ul>';
                          echo '</li>';




                        echo '<li>';
                          echo '<a class="active" href="administrar.php?type=user">';
                            echo '<i class="fa fa-book"></i>';
                            echo '<span>Administrar usuarios</span>';
                          echo '</a>';
                        echo '</li>';




                      }

                  ?>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->