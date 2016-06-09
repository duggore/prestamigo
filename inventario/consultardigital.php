<?php include 'conf/consultardigitalheader.php' ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Lista de documentos digitales</h3>

                    <div class="col-md-12 mt">
                      <div class="content-panel">
                            <table class="table table-hover">
                            <h4><i class="fa fa-angle-right"></i> Documentos</h4>
                            <hr>
                                <thead>
                <?php
                $result = mysql_query("SELECT * FROM digitales");

                echo "<tr>
                      <th>Nombre</th>
                      <th>Categoria</th>
                      <th>Etiqueta</th>
                      <th>Estado</th>
                      <th>Revisar documento</th>
                      </tr>
                      </thead>
                      <tbody>";

                while($row = mysql_fetch_array($result)) {
                  $originales_id = $row['id'];
                  $digitales_nombre = $row['nombre'];
                  echo "<tr>";
                  echo "<td>" . $row['nombre'] . "</td>";
                  echo "<td>" . $row['categoria'] . "</td>";
                  echo "<td>" . $row['etiqueta'] . "</td>";
                  echo "<td>" . $row['estado'] . "</td>";


                ?> 
                              <td>  <?php                   echo "<a href='digitales/$digitales_nombre.pdf'><button class='btn btn-normal btn-xs'><i class='fa fa-trash-o '></i>consultar documento</button></a>"; ?> </td>

                <?php
                                  echo "</tr>";
                }
                echo "</tbody>"; 
                echo "</table>"; 
                 ?>

                        </div>
                    </div><!-- /col-md-12 -->
        </div><!-- row -->

		</section>
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
