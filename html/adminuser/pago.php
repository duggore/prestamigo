<?php include(HTML_DIR.'/dise-secu/header.php'); ?> 
<body>
	<?php include (HTML_DIR.'dise-secu/encabezado.php'); ?> 
	<section>
 		<article class="izquierdasection">		 
		<?php include (HTML_DIR.'dise-secu/menu.php'); ?> 
		</article>

		
		<article id="dere" class="derechasection">
			<p class="titulosec">> APLICACIÒN DE PAGOS</p>
			<div class="for" role="form" onkeypress="return runScriptPago(event)">
				<div id="_AJAX_PRE_"></div><br><br>

				<label class="ema">Nombre Cliente</label><br>
				<div class="buscaname">
					<input type="text" id="user" list="user_busca" class="emai busname" placeholder="Nombre Cliente">
					<button type="button" class="yellow medium radius btn-name" onclick="Buscar($('#user').val())">BUSCAR</button>
				</div><br>
				
				<?php 
					$db = new Conexion();
					$sql = $db->query("SELECT * FROM catacli;");
					echo "<datalist id='user_busca'>";
						while ($row = $db->runs($sql)){
						echo '<option value="'.$row['NOM_CLI'].'">'.$row['NUM_CLI'].'</option>';
					}
					$db->liberar($sql);
					$db->close();
					echo '</datalist>';
					
					
				?>
				
				<div class="contenfoliocre">
					<div class="fp">
						<label class="ema">Folio Pago:</label><br>
						<input id="user_id" type="text" class="emai"  value="" placeholder="<?=$pagos['id'];?>">
					</div>
					<div class="contefoliofech cre">
						<div class="unoo">
							<label class="ema">Credito:</label><br>
							<input id="fol_cre" type="text" class="emai"  value="" placeholder="Credito">
						</div>
						<button type="button" class="yellow medium radius btn-name name" onclick="Id($('#fol_cre').val())">BUSCAR</button>
					</div>
				</div><br>

				<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Fecha Pago:</label><br>
					<input id="fec_pag" type="date" class="emai" value="<?=date("Y-m-d");?>">
				  </div>

				  <div class="cre">
					<label class="ema">Total Credito:</label><br>
					<div id="tot_cre" class="emai"></div>
				  </div>
				</div><br>

				<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Total a Aplicar:</label><br>
				    <div id="pag_dia" class="emai"></div>
				  </div>

				  <div class="cre">
					<label class="ema">Total Pagos:</label><br>
				    <div id="tot_pag" class="emai"></div>
				  </div>
				</div><br>

				<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Forma de Pago:</label><br>
				    <div id="for_pag" class="emai"></div>
				  </div>

				  <div class="cre">
					<label class="ema">Saldo Credito:</label><br>
				    <div id="sal_cre" class="emai"></div>
				  </div>
				</div><br>
				

				<div class="contenfoliocre">
				  <div class="fp">
					<label class="ema">Referencia:</label><br>
				    <div id="ref_pag" class="emai"></div>
				  </div>

				  <div class="cre">
					<label class="ema">Estatus Credito:</label><br>
				    <div id="sta_tus" class="emai"></div>
				  </div>
				</div><br>

				<!-- <label class="ema">Estatus</label><br>
				<div id="user_est" class="emai"></div><br><br> -->
				
				
			</div>

				<div id="button">
				<div id="opcancelar"></div>
				<button class="button yellow medium radius" onclick="LimpiarCampos()">LIMPIAR CAMPOS</button>
				<button class="button yellow medium radius" onclick="goPago()">GRABAR</button>
				</div>
				
		</article>

	</section>
	<script src="views/app/js/goPago.js"></script>
	<script src="views/app/js/reloj.js"></script>
	<script src="views/app/js/main.js"></script>
	<script src="views/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
