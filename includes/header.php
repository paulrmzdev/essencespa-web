<? 
	include_once "conexion.php";
	include "estilo.php";
	?>
<header class="header2">
		<input type="checkbox" id="btn-menu" checked="no">
		<label for="btn-menu"><img src="img/menu.png" alt=""></label>
		<nav class="menu">
			<ul>
				<li><h3>Menú</h3><label class="menu-salir" for="btn-menu"><h1>X</h1></label></li>
	 			<li><a href="index.php" id="enlace-inicio">Inicio</a></li>
	 			<li><a href="nosotros.php" id="enlace-nosotros">Nosotros</a></li>
	 			<li><a href="servicios.php" id="enlace-servicios">Servicios</a></li>
	 			<li><a href="promociones.php" id="enlace-promociones">Promociones</a></li>
	 			<li><a href="experiencias.php" id="enlace-experiencias">Experiencias</a></li>
	 			<li><a href="contacto.php" id="enlace-contacto">Contacto</a></li>
	 			<li><a href="encuesta.php" id="enlace-encuesta">Encuesta</a></li>
			</ul>
		</nav>
</header>