<article id="name">
	<figure id="imgEstudiante">
	<img src="views/app/images/Cliente.jpg" alt="">
	</figure>
	<p class="bien">Bienvenido <strong><?= $users[$_SESSION['app_id']]['user']?></strong></p>
</article>
<ul id="accordion" class="accordion">
	<li>
		<a href="?view=admin"><div class="link"><i class="fa fa-home"></i>Inicio</div></a>
		<ul class="submenu">
		</ul>
	</li>
	<li>
		<div class="link"><i class="icono izquierda fa fa-credit-card-alt"></i>Operaciones<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href="?view=adprestamo">Créditos</a></li>
			<li><a href="?view=pago">Pagos</a></li>
		</ul>
	</li>
	<li>
		<div class="link"><i class="icono izquierda fa fa-users"></i>Mantenimiento<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href="?view=insert">Clientes</a></li> <!-- Cambiar el nombre del controlador add a op -->
			<li><a href="#">Agentes</a></li>
			<li><a href="#">Zonas</a></li>
			<li><a href="#">Usuarios</a></li>
		</ul>
	</li>
	<li>
		<div class="link"><i class="icono izquierda fa fa-file-text"></i>Reportes<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href="#">Catálogos</a></li>
			<li><a href="#">Documentos</a></li>
			<li><a href="#">Ventas</a></li>
			<li><a href="#">Pagos</a></li>
			<li><a href="#">Clientes</a></li>
		</ul>
	</li>
	<li>
		<div class="link"><i class="icono izquierda fa fa-pencil-square-o"></i>Consultas<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href="?view=consulta">Clientes</a></li>
			<li><a href="#">Agentes</a></li>
			<li><a href="#">Zonas</a></li>
			<li><a href="#">Ventas</a></li>
			<li><a href="#">Pagos</a></li>
		</ul>
	</li>
	<li>
		<div class="link"><i class="icono izquierda fa fa-wrench"></i>Utilerias<i class="fa fa-chevron-down"></i></div>
		<ul class="submenu">
			<li><a href="#">Respaldos</a></li>
			<li><a href="#">Reindexar</a></li>
			<li><a href="#">Cambio de fecha</a></li>
			<li><a href="#">Cierre mensual</a></li>
			<li><a href="#">Cierre anual</a></li>
		</ul>
	</li>
	<li>
		<a href="?view=logout"><div class="link"><i class="icono izquierda fa fa-expeditedssl"></i>Cerrar Sesión</div></a>
	</li>
</ul>