 <?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<p class="titulosec">PRESTAMO CLIENTE</p>
<<<<<<< HEAD
			<form class="for" onsubmit="return false;" autocomplete="off">
				<div id="_AJAX_PRE_"></div><br><br>
=======
			<form class="for" onsubmit="return false;">
				<div id="_AJAX_PRE_"></div><br>
>>>>>>> origin/master
				
				<label class="ema">Nombre Cliente</label><br>
				<input type="text" id="user" list="users_busca" class="emai" placeholder="Nombre Cliente" onkeypress="Buscar($('#user').val())"><br><br>

				
				<?php 
					$db = new Conexion();
					$sql = $db->query("SELECT * FROM catacli;");
					echo "<datalist id='users_busca'>";
						while ($row = $db->runs($sql)){
						echo '<option value="'.$row['NOM_CLI'].'">'.$row['NUM_CLI'].'</option>';
					}
					echo '</datalist>';
					$db->liberar($sql);
					$db->close();
					
				?>
				
				
				<!-- <option value=""></option> -->
				<div class="contefoliofech">
				<div class="uno">
				<label class="ema">Ult. Folio</label><br>
<<<<<<< HEAD
				<input id="user_id" type="text" class="emai" onkeypress="Id($('#user_id').val())" onkeydown="" value="" placeholder="<?=$clientes['id'];?>"><br><br><br>
=======
				<input id="user_id" type="text" class="emai" onkeydown="Id($('#user_id').val())" value="" placeholder="<?=$clientes['id'];?>"> <br></div>
				<div class="dos">
				<label class="ema">Fecha</label><br>
				<input id="user_fec" type="date" class="emai" >
				</div></div><br>
>>>>>>> origin/master

				<label class="ema">Nombre Cliente</label><br>
				<div id="user_name" class="emai" autocomplete="off"></div><br>

				<label class="ema">Número Cliente</label><br>
				<div id="user_cli" class="emai" autocomplete="off"></div><br>

				<label class="ema">Número Prestamo</label><br>
				<div id="id_pres" class="emai" autocomplete="off"></div><br>

				<div class="contefoliofech">
				<div class="tres">

				<label class="ema" id="lbl_imp">Importe ($)</label><br>
				<input id="user_imp" type="text" class="emai" onkeyup="Calcula($('#user_imp').val())"><br><br></div>

				<div class="tres">			
				<label class="ema">Interes (%)</label><br>
				<div id="user_int" class="emai"></div><br>
				</div>
				<div class="tres">
				<label class="ema">Prestamo</label><br>
				<div id="user_pres" class="emai"></div><br><br>
				</div>
				</div>
			
				<label class="ema">Tipo de Prestamo</label><br>
				<select  id="user_tip" class="emai" >
					<option value="0">--</option>
					<option value="E">E</option>
					<option value="D">D</option>
				</select><br><br>
				
				

				<div id="dialog" title="Información General" style='display:none;' >
					
					<button>Adios</button>
				</div>

							
				

				
			<!-- 	<input type="button" class="button yellow medium radius"  value="PRESTAMO" onclick="form.submit()"> -->
				
			</form>

			<div id="button">
			<button type="button" class="button yellow medium radius" onclick="goPrestamo()">PRESTAMO</button>

				<button id="limpiar" class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR CAMPOS </button>	

				<button id="cancelar" style='display:none;' class="button yellow medium radius" onclick="Cancela('¿Está seguro que desea cancelar?','?view=cancela&mode=cancelar&id='+$('#user_id').val()+'')">CANCELAR</button>

<<<<<<< HEAD
				<button id="imprimir" style='display:none;' class="button yellow medium radius" onclick="Imprimir('?view=cancela&mode=imprimir&id='+$('#user_id').val()+'')">Imprimir</button>
=======
				<button id="imprimir" style='display:none;' class="button yellow medium radius" onclick="Cancela('?view=cancela&mode=imprimir&id='+$('#user_id').val()+'')">Imprimir</button> </div>
>>>>>>> origin/master

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




