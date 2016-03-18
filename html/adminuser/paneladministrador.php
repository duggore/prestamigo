<?php include (HTML_DIR.'dise-prin/header.php'); ?>

<!-- --------script para mostrar y ocultar los divs------ -->
<!--    <script languaje="Javascript">   
document.write('<style type="text/css">div.cajamenu{display: none;}</style>');  
function MostrarOcultar(capa,enlace)  
{  
    if (document.getElementById)  
    {  
        var aux = document.getElementById(capa).style;  
        aux.display = aux.display? "":"block";  
    }  
}  
      
</script>  --> 




<body>
	<article class="panel">
		<article class="pizquierda">
			<figure class="contienelogo"><img class="logo" src="views/app/images/logo.png" alt=""></figure>
			<article class="ppanel">
				<p class="ppanel">PRESTAMIGUITO</p>
			<p class="ppanel2">Sistema de Crédito</p>
			</article>
			
		</article>

		<article class="pderecha">
			<div class="widget">
				<div class="fecha">
				<p id="diaSemana" class="diaSemana"></p>
				<p id="dia" class="dia"></p>
				<p>de</p>
				<p id="mes" class="mes"></p>
				<p>de</p>
				<p id="year" class="year"></p>
				</div>
			 
				<div class="reloj">
				<p id="horas" class="horas"></p>
				<p>:</p>
				<p id="minutos" class="minutos"></p>
				<p>:</p>
				<div class="caja-segundos">
					<p id="ampm" class="ampm"></p>
					<p id="segundos" class="segundos"></p>
				</div>
				</div>
			</div>
			<!-- <button class="pboton">Cerrar Sesión</button> -->
		</article>

	</article>


	<section>

		<article class="izquierdasection">

				<article id="name">
		            <figure id="imgEstudiante">
		               <img src="views/app/images/Cliente.jpg" alt="">
		            </figure>
            		<p class="bien">Bienvenid@</p>
         		</article>

       <nav>
		<ul>
			
			
			<li>
				<div class="barra"></div>
				<p class="menu"> <i class="fa fa-home"></i> &nbsp; Inicio </p>
			</li>
			</a>


			<li>
				<div class="barra"></div>
				<p class="menu"><i class="fa fa-credit-card-alt"></i> &nbsp;Operaciones</p>
			</li>



			<li>
				<div class="barra"></div>
				<p class="menu"> <i class="fa fa-users"></i> &nbsp;Mantenimiento</p>
			</li>

			<li>
				<div class="barra"></div>
				<p class="menu"><i class="fa fa-file-text"></i> &nbsp;Reportes</p>
			</li>

			<li>
				<div class="barra"></div>
				<p class="menu"><i class="fa fa-pencil-square-o"></i> &nbsp;Consultas</p>
			</li>
			<li>
				<div class="barra"></div>
				<p class="menu"><i class="fa fa-wrench"></i> &nbsp;Utilerias</p>
			</li>
			<li>
				<div class="barra"></div>
				<p class="menu"><i class="fa fa-expeditedssl"></i> &nbsp;Cerrar Sesiòn</p>
			</li>



		</ul>
	</nav>

         		<!-- <a href="#" ><p id="menu">HOLA</p></a>
        		<a  href="#"><p id="menu">HOLA</p></a>
        		<a href="javascript:MostrarOcultar('caja1');" ><p id="menu">BUEN DIA</p></a>
       
       		 	<div class="cajamenu" id="caja1">
           			<hr  width=85% />

		        	<a href="#" ><p id="menu">BUENDIA 2</p></a>
			        <a href="#" ><p id="menu">BUENDIA 2</p></a>
			        <a href="#" ><p id="menu">BUENDIA 2</p></a>
			        <hr width=85% />
		        </div>
        
        <a href="javascript:MostrarOcultar('caja2');"><p id="menu">BUENAS TARDES</p></a>
        	<div class="cajamenu" id="caja2">
           			<hr  width=85% />

		        	<a href="#" ><p id="menu">HOLA</p></a>
			        <a href="#" ><p id="menu">HOLA</p></a>
			        <a href="#" ><p id="menu">HOLA</p></a>
			        <hr width=85% />
		        </div>
        <a href="#"><p id="menu">Mensajes</p></a>
        <a href="#"><p id="menu">Cerrar sesión</p></a> -->

		</article>






		<article class="derechasection">hdhdhdhd</article>
		





	</section>
	<script src="views/app/js/reloj.js"></script>
</body>
