<?php include(HTML_DIR.'dise-secu/header.php'); ?>
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?>
		</article>

<script>
$(document).ready(function(){ 
   $('#caja').on('click',function(){
      $('#accboton').toggle('slow');
   });

    $('#caja2').on('click',function(){
      $('#accboton2').toggle('slow');
   });

    $('#caja3').on('click',function(){
      $('#accboton3').toggle('slow');
   });
});

</script>


		<article id="dere" class="derechasection">
			<p class="titulosec"> Reportes&nbsp;>>&nbsp;Catalogos</p>
			<p class="aqui">Aquí puede realizar los siguientes reportes:</p>
			<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-users fa-5x"></i>
							<p class="rcliente">Clientes</p>
						</article>
					</article>
					<a href="#" id="caja"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>

                    <article id="accboton" style="display: none;">
                        <select placeholder="" name="Clientes" id="user_cliente" class="emai">
					       <!-- <option value="">Selecciona Zona</option> -->
					       <?php  
        						$bd = new Conexion();
        						$sql = $bd->query("SELECT * FROM catazon");
        						while($row = $bd->runs($sql))
        						{
        							echo '<option value='.$row['NUM_ZON'].'>'.$row['DES_ZON'].'</option>';	
        						}
						  ?>
				        </select>
                        <button id="imprimir" class="button yellow medium radius" onclick="javascript:window.open('?view=reportes&mode=repClientes&id='+$('#user_cliente').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')">Buscar</button>	
                    </article>
				</article>

				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-users fa-5x"></i>
							<p class="rcliente">Zona</p>
						</article>
					</article>
					<a href="#" id="caja2"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>

                    <article id="accboton2" style="display: none;">
					   <select placeholder="" name="Zonas" id="user_zona" class="emai">
					       <option value="1">Alfanúmerico</option>
					       <option value="2">Alfabetico</option>	
				        </select>
                        <button id="imprimir" class="button yellow medium radius" onclick="javascript:window.open('?view=reportes&mode=repZonas&id='+$('#user_zona').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')">Buscar</button>	
                    </article>
				</article>
				
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-users fa-5x"></i>
							<p class="rcliente">Agentes</p>
						</article>
					</article>
					<a href="#" id="caja3"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>

                    <article id="accboton3" style="display: none;">
                        <select placeholder="" name="Agentes" id="user_agente" class="emai">
					       <option value="1">Alfanúmerico</option>
					       <option value="2">Alfabetico</option>	
				        </select>
                        <button id="imprimir" class="button yellow medium radius" onclick="javascript:window.open('?view=reportes&mode=repAgentes&id='+$('#user_agente').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')">Buscar</button>	
                    </article>
				</article>

			</article>
		</article>

	</section>
	<!-- <script src="view/app/boostrap/js/jquery.js"></script> -->
	<!-- <script src="view/app/boostrap/js/boostrap.min.js"></script> -->
	<!-- <script src="views/app/boostrap/js/jquery.js"></script> -->
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>
</html>