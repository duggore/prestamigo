<?php include 'conf/indexheader.php' ?>
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
            <section id="main-content">
          <section class="wrapper site-min-height">
            <h3><i class="fa fa-angle-right"></i> Bienvenido al archivo general del estado</h3>
            <div class="row mt">
              <div class="col-lg-12">
              <p>Aquí puede realizar las siguientes acciones:</p>
              </div>
            </div>

            <div class="col-lg-3 col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-text-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h4>Consultar documentos originales</h4></div>
                                    </div>
                                </div>
                            </div>
                            <a href="consultaroriginal.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Iniciar acción</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

            <div class="col-lg-3 col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-pdf-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h4>Consultar documentos digitales</h4></div>
                                    </div>
                                </div>
                            </div>
                            <a href="consultardigital.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Iniciar acción</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

            <div class="col-lg-3 col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-file-o fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h4>Consultar microfilms</h4></div>
                                    </div>
                                </div>
                            </div>
                            <a href="consultarmicrofilm.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Iniciar acción</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


            <div class="col-lg-3 col-md-9">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-archive fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h4>Consultar servicios</h4></div>
                                    </div>
                                </div>
                            </div>
                            <a href="consultarservicio.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Iniciar acción</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>

                                <div class="col-lg-3 col-md-3">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <div class="row">
                                    <div class="col-xs-3">
                                        <i class="fa fa-archive fa-5x"></i>
                                    </div>
                                    <div class="col-xs-9 text-right">
                                        <div><h4>Hacer solicitud de Servicio</h4></div>
                                    </div>
                                </div>
                            </div>
                            <a href="agregarservicio.php">
                                <div class="panel-footer">
                                    <span class="pull-left">Iniciar acción</span>
                                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                    <div class="clearfix"></div>
                                </div>
                            </a>
                        </div>
                    </div>


                    <!-- /LAS OPCIONES PARA AGREGAR PRODUCTOS Y ADMINISTRAR USUARIOS SE ENCUENTRAN
                     EN EL ARCHIVO conf/opcionadmin.php -->

                <!-- /ESTE CODIGO COMPRUEBA QUE EL USUARIO ES 1 = ADMINISTRADOR, SI NO ES 1 LAS OPCIONES
                NO APARECEN EN EL MENU -->
                    <?php  
                        if($user_level == 1){
                            include "conf/opcionadmin.php";
                        }

                     ?>
      

      
    </section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->


    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/jquery-1.8.3.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="assets/js/gritter-conf.js"></script>


  

  </body>
</html>
