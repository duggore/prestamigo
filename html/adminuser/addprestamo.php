 <?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<p class="titulosec">PRESTAMO CLIENTE</p>
			<form class="for" onsubmit="return false;" autocomplete="off">
				<div id="_AJAX_PRE_"></div><br><br>
			<!-- <form class="for" onsubmit="return false;">
				<div id="_AJAX_"></div><br> --> 
				
				<label class="ema">Nombre Cliente</label><br>
				<div class="buscaname">
					<input type="text" id="user" list="users_busca" class="emai busname" placeholder="Nombre Cliente">
					<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#user').val())">BUSCAR</button>
				</div><br>
				
				<?php 
					$db = new Conexion();
					$sql = $db->query("SELECT * FROM catacli;");
					echo "<datalist id='users_busca'>";
						while ($row = $db->runs($sql)){
						echo '<option value="'.$row['NOM_CLI'].'">'.$row['NUM_CLI'].'</option>';
					}
					echo '</datalist>';
					// $db->liberar($sql);
					$db->close();
					
				?>
				
				
				<!-- <option value=""></option> -->
				<div class="contefoliofech">

					<div class="uno">
						<label class="ema">Ult. Folio</label><br>
						<input id="user_id" type="text" class="emai"  value="" placeholder="<?=$clientes['id'];?>">
					</div>
					<div class="dos">
						<label class="ema">Fecha</label><br>
						<input id="user_fec" type="date" class="emai" value="<?=date("Y-m-d");?>">
					</div>
					<button type="button" class="yellow medium radius btn-name name" onclick="Id($('#user_id').val())">BUSCAR</button>
				</div><br>

				<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Nombre Cliente</label><br>
				    <div id="user_name" class="emai"></div><br>
				  </div>

				  <div class="cre">
					<label class="ema">Número Cliente</label><br>
				    <div id="user_cli" class="emai"></div><br>
				  </div>
				</div><br>
				

				<!-- <label class="ema">Número Prestamo</label><br> -->
				<!-- <div id="id_pres" class="emai"></div><br> -->

				<div class="contefoliofech">
				<div class="tres">
				<label class="ema" id="lbl_imp">Prestamo</label><br>
				<input id="user_pres" type="text" class="emai" onkeyup="Calcula($('#user_pres').val())"><br><br></div>

				<div class="tres">			
				<label class="ema">Interes (%)</label><br>
				<div id="user_int" class="emai"></div><br>
				</div>
				<div class="tres">
				<label class="ema">Importe ($)</label><br>
				<div id="user_imp" class="emai"></div><br><br>
				</div>
				</div>

				<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Pago Diario</label><br>
				    <div id="user_pagD" class="emai"></div>
				  </div>

				  <div class="cre">
					<label class="ema">Tipo de Pago</label><br>
						<select  id="user_tip" class="emai" >
							<option value="0">--</option>
							<option value="E">E</option>
							<option value="D">D</option>
						</select>
				  </div>
				</div><br>

				<!-- <div class="contenfoliocre">
				  </div> -->

				  <div class="fp">
					<label class="ema">Saldo Prestamo</label><br>
				    <div id="sal_final" class="emai"></div>
				  </div>
				</div><br>
					

				
			<!-- 	<input type="button" class="button yellow medium radius"  value="PRESTAMO" onclick="form.submit()"> -->
				
			</form>

			<div id="button">
			<button type="button" class="button yellow medium radius" onclick="goPrestamo()">GRABAR</button>

				<button id="limpiar" class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR CAMPOS </button>	

				<button id="imprimir" style='display:none;' class="button yellow medium radius" onclick="Imprimir('?view=cancela&mode=imprimir&id='+$('#user_id').val()+'')">Imprimir</button>

				<button id="cancelar" style='display:none;' class="button yellow medium radius" onclick="Cancela('¿Está seguro que desea cancelar?','?view=cancela&mode=cancelCre&id='+$('#user_id').val()+'')">CANCELAR</button>

		</article>

	</section>
	<script src="views/app/js/jquery-2.2.3.min.js"></script>
	<script src="views/app/js/jquery-ui.min.js"></script>
	<script src="views/app/js/goPrestamo.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>




