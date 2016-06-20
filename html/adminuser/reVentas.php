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
			<p class="titulosec"> Reportes&nbsp;>>&nbsp;Ventas</p>
			<p class="aqui">Aquí puede realizar los siguientes reportes:</p>
			<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Por periodo</p>
						</article>
					</article>
					<a href="#" id="caja"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>

					<article id="accboton" style="display: none;">
						<label for="F_inicial">Fecha Inicial:</label>
                        <input type="date" class="emai" value="<?=date("Y-m-d");?>" id="f_inicial"><br><br>
                        <label for="F_final">Fecha Final</label>
                        <input type="date" class="emai" value="<?=date("Y-m-d");?>" id="f_final">
                        <button id="imprimir" class="button yellow medium radius" onclick="if($('#f_inicial').val() > $('#f_final').val() ){alert('Fecha inicial no puede mayor a fecha final');}
                        	else{
                        	javascript:window.open('?view=reportes&mode=repVP&RP=p&fi='+$('#f_inicial').val()+'&ff='+$('#f_final').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')
                        	}">Buscar</button>	
                    </article>
				</article>

					<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Por dia (Totales)</p>
						</article>
					</article>
					<a href="#" id="caja2"><article class="accionesdentro2"> 
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>

					<article id="accboton2" style="display: none;">
						<label for="F_inicial">Fecha Inicial:</label>
                        <input type="date" class="emai" value="<?=date("Y-m-d");?>" id="f_inicial"><br><br>
                        <label for="F_final">Fecha Final</label>
                        <input type="date" class="emai" value="<?=date("Y-m-d");?>" id="f_final">
                        <button id="imprimir" class="button yellow medium radius" onclick="if($('#f_inicial').val() > $('#f_final').val() ){alert('Fecha inicial no puede mayor a fecha final');}
                        	else{
                        	javascript:window.open('?view=reportes&mode=repVP&RP=dt&fi='+$('#f_inicial').val()+'&ff='+$('#f_final').val()+'','','width=800,height=600,left=50,top=50,toolbar=yes')
                        	}">Buscar</button>	
                    </article>
				</article>

			

				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-users fa-5x"></i>
							<p class="rcliente">Por cliente</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				<article class="conteopciones">
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Por agente</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				<article class="acciones">
					<article class="accionesdentro1">
						<article class="accionesdentro11">
							<i class="users fa fa-pencil-square-o fa-5x"></i>
							<p class="rcliente">Por años (Totales)</p>
						</article>
					</article>
					<a href=""><article class="accionesdentro2">
						<p class="iniciaraccion">Iniciar Acción</p>
						<i class="right fa fa-arrow-circle-right"></i>
					</article></a>
				</article>
				</article>


			</article>
		</article>

	</section>
	<!-- <script src="view/app/boostrap/js/jquery.js"></script> -->
	<!-- <script src="view/app/boostrap/js/boostrap.min.js"></script> -->
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
</body>
</html>