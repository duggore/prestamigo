<?php include 'conf/administrarheader.php' ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Modificar usuarios</h3>

            <?php //INICIA CODIGO PHP Y CONDICION IF
              if (isset($_GET['type']) && !empty($_GET['type'])) {
            ?>
    
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <table class="table table-striped table-advance table-hover">
                            
                            <h4><i class="fa fa-angle-right"></i> Listado de usuarios</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th><i class="fa fa-users"></i> Usuario</th>
                                  <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nombre</th>
                                  <th><i></i> Privilegios</th>
                                  <th><i></i> Estado</th>
                                  <th><i class=" fa fa-edit"></i> Opciones</th> 

                              </tr>
                              </thead>

                              <tbody>
            
            <?php //BUSCA EN LA BASE DE DATOS EL ID, USUARIO Y ESTADO Y LOS ALMACENA EN VARIABLES
             $list_query = mysql_query("SELECT id, nombre, usuario, privilegios, estado FROM usuarios WHERE privilegios='2' ");
             
              while ($run_list = mysql_fetch_array($list_query)) {
                $u_id = $run_list['id'];
                $u_name = $run_list['nombre'];
                $u_username = $run_list['usuario'];
                $u_type = $run_list['estado'];
                $u_level = $run_list['privilegios'];
            ?>

                              <tr>
                                  <td><?php echo $u_username ?></td>
                                  <td class="hidden-phone"><?php echo $u_name ?></td>
                                  <td>Consultor</td>

                                    <?php  //CONDICION QUE EVALUA Y MUESTRA UN BOTON CON RESPECTO AL ESTADO DE USUARIO
                                      if($u_type == 'a'){
                                        echo "<td><span class='label label-success label-mini'>Activado</span></td>";
                                      }else{
                                        echo "<td><span class='label label-warning label-mini'>Desactivado</span></td>";
                                      }
                                    ?>




                                  <td>

                                    <?php  //CONDICION QUE EVALUA Y MUESTRA UNA OPCION CON RESPECTO AL ESTADO DE USUARIO
                                      if($u_type == 'a'){
                                        echo "<a href='conf/estado.php?u_id=$u_id&type=$u_type'><button class='btn btn-warning btn-xs'><i class='fa fa-times'></i>Desactivar</button> </a>";
                                        echo "<a href='conf/borrarusuarios.php?u_id=$u_id'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i>Borrar</button></a>";
                                      }else{
                                        echo "<a href='conf/estado.php?u_id=$u_id&type=$u_type'><button class='btn btn-success btn-xs'><i class='fa fa-check'></i>Activar</button> </a>";
                                        echo "<a href='conf/borrarusuarios.php?u_id=$u_id'><button class='btn btn-danger btn-xs'><i class='fa fa-trash-o '></i>Borrar</button></a>";
                                      }
                                    ?>
                                      

                                  </td>
                              </tr>
                              <?php 
                                    } //FIN DEL CICLO WHILE DE PHP
                                    } //FIN DE LA CONDICION IFF DE PHP
                              ?> 
                              </tbody> <!-- FIN DEL CUERPO TE LA TABLA -->
                          </table> <!-- FIN DE LA TABLA -->


                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->

		</section><! --/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->

  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>


    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
