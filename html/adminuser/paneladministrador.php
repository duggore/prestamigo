<?php include (HTML_DIR.'dise-prin/header.php'); ?>

<!-- --------script para mostrar y ocultar los divs------ -->
   <script languaje="Javascript">   
document.write('<style type="text/css">div.cajamenu{display: none;}</style>');  
function MostrarOcultar(capa,enlace)  
{  
    if (document.getElementById)  
    {  
        var aux = document.getElementById(capa).style;  
        aux.display = aux.display? "":"block";  
    }  
}  
      
</script>  




<body>
	<article class="panel">
		<article class="pizquierda">
			<i class="fa picono fa-bars fa-3x"></i><p class="ppanel">Panel Adimistrativo</p>
		</article>

		<article class="pderecha">
			<button class="pboton">Cerrar Sesión</button>
		</article>

	</article>


	<section>

		<article class="izquierdasection">

				<article id="name">
		            <figure id="imgEstudiante">
		               <img src="views/app/images/Cliente.jpg" alt="">
		            </figure>
            		<p class="bien">Bienvenido</p>
         		</article>

         		<a href="#" ><p id="menu">HOLA</p></a>
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
        <a href="#"><p id="menu">Cerrar sesión</p></a>

		</article>






		<article class="derechasection">hdhdhdhd</article>
		





	</section>
</body>
