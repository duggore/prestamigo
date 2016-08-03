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

    $('#caja4').on('click',function(){
      $('#accboton4').toggle('slow');
   });
});

</script>
		<article id="dere" class="derechasection">
			<p class="titulosec"> Reportes&nbsp;>>&nbsp;Clientes</p>
			<p class="aqui">Aquí puede realizar los siguientes reportes:</p>
			<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Edo. de cuenta</p>
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
        						$sql = $bd->query("SELECT * FROM catacli");
        						while($row = $bd->runs($sql))
        						{
        							echo '<option value='.$row['NUM_CLI'].'>'.$row['NOM_CLI'].'</option>';	
        						}
						  ?>
				        </select>
                        <button id="imprimir" class="button yellow medium radius" onclick="javascript:window.open('?view=reportes&mode=etdCtaCliente&rp=1&id='+$('#user_cliente').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')">Buscar</button>	
                    </article>
				</article>

				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Cartera</p>
						</article>
					</article>
					<a href="javascript:window.open('?view=reportes&mode=etdCtaCliente&rp=2','','width=800,height=600,left=50,top=50,toolbar=yes')"><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>

				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Resumen/Cliente</p>
						</article>
					</article>
					<a href="#" id="caja3"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>

					<article id="accboton3" style="display: none;">
						<label for="F_inicial">Fecha Inicial:</label>
                        <input type="date" class="emai" value="<?=date("Y-m-d");?>" id="f_ini"><br><br>
                        <label for="F_final">Fecha Final</label>
                        <input type="date" class="emai" value="<?=date("Y-m-d");?>" id="f_fin">
                        <button id="imprimir" class="button yellow medium radius" onclick="if($('#f_inicial').val() > $('#f_final').val() ){alert('Fecha inicial no puede mayor a fecha final');}
                        	else{
                        	javascript:window.open('?view=reportes&mode=repVP&RP=3&fi='+$('#f_ini').val()+'&ff='+$('#f_fin').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')
                        	}">Buscar</button>	
                    </article>
				</article>

				<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-globe fa-5x" aria-hidden="true"></i>
							<p class="rcliente">Cartera/Zona</p>
						</article>
					</article>
					<a href="#" id="caja4" ><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
					<article id="accboton4" style="display: none;">
                        <select placeholder="" name="Clientes" id="user_zon" class="emai">
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
                        <button id="imprimir" class="button yellow medium radius" onclick="javascript:window.open('?view=reportes&mode=etdCtaZON&rp=4&id='+$('#user_zon').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')">Buscar</button>	
                    </article>
				</article>
				</article>


			</article>
		</article>

	</section>
	<script src="view/app/boostrap/js/jquery.js"></script>
	<script src="view/app/boostrap/js/boostrap.min.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>
</html>