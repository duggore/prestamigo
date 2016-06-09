<?php include 'conf/agregardigitalheader.php' ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
          	<h3><i class="fa fa-angle-right"></i> Agregar documento digital</h3>
          	
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
          		<div class="col-lg-12">
                  <div class="form-panel">
                  	  <h4 class="mb"><i class="fa fa-angle-right"></i> Formulario</h4>
                      <?php 
if(isset($_POST['submit'])){
    $nombre= $_POST['nombre'];
    $categoria= $_POST['categoria'];
    $etiqueta= $_POST['etiqueta'];
    $estado= $_POST['estado'];
    


    if(empty($nombre) or empty($categoria)){
        echo '<script language="javascript">';
        echo 'alert("Hay campos faltantes")';
        echo '</script>';
    }else{
        mysql_query("INSERT INTO digitales VALUES ('','$nombre','$categoria','$etiqueta','$estado')");
        echo '<script language="javascript">';
        echo 'alert("¡Documento digital registrado correctamente!")';
        echo '</script>';
    }
}

 ?>
<legend><em><h4>Los campos marcados con "*" son obligatorios</h4></em></legend>
                <div class="row">
                      <div class="col-lg-6">

    
                <form method='post' role='form'>
  
                        <div class="form-group">
                                <label>Nombre*</label>
                                <input class="form-control" name='nombre'>
                        </div>

                        <div class="form-group">
                                <label>Categoría*</label>
                                <input class="form-control" name='categoria'>
                        </div>

                        <div class="form-group">
                                <label>Etiqueta</label>
                                <input class="form-control" name='etiqueta'>
                        </div>

                        <div class="form-group">
                                <label>Estado</label>
                                <input class="form-control" name='estado'>
                        </div>


     <input type ='submit' class="btn btn-success btn-lg" name='submit' value='Registrar'/>
     <button type="reset" class="btn btn-warning btn-lg">Limpiar campos</button>
     <br/><br/>


    </form>
          	
        	
          	
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
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>

	<!--custom switch-->
	<script src="assets/js/bootstrap-switch.js"></script>
	
	<!--custom tagsinput-->
	<script src="assets/js/jquery.tagsinput.js"></script>
	
	<!--custom checkbox & radio-->
	
	<script type="text/javascript" src="assets/js/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/date.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap-daterangepicker/daterangepicker.js"></script>
	
	<script type="text/javascript" src="assets/js/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
	
	
	<script src="assets/js/form-component.js"></script>    
    
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
