<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">
	<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1">	
	<?php
	include "includes/estilo.php";
	include "includes/js.php";
	?>
	<title>Essence Spa</title>
</head>
<body>
	<header>
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
	<?php
		include "conexion.php";
		foreach($mbd->query('SELECT * from Inicio') as $res){
	}
	?> 
	<section class="sportada">
		<?
		 echo '<img src="data:image/png;base64,'.base64_encode($res[2]).'" alt="" class="portada">';
		?>
		<div class="degradado"></div>
		<div class="banner">
			<h2><?echo $res[3]?></h2>				
			<a href="contacto.php" class="llamado">Contáctanos</a>
			<div class="sesgoabajo"></div>
		</div>
	</section>
		
	<section class="contenedor-inicio">
		<div class="contenedor">
		<h1><?echo $res[1]?></h1>
		<p><?echo $res[4]?></p>
		</div>
	</section>
	<section class="servicios">
		<div class="sesgoarriba"></div>
			<h2>Nuestros servicios</h2>
			<div class="lista">
		<?
		foreach($mbd->query('SELECT * from Servicios') as $res){
		echo '<div class="service">';
		echo '<h3>'.$res[1].'</h3>';
		echo '<a href="servicios.php"><img src="data:image/png;base64,'.base64_encode($res[3]).'" alt=""></a>'; 
		echo '</div>';
			}
		?>
		</div>
		<a href="servicios.php" class="llamado">Ver más</a>
	</section>

	<?php include "includes/footer.php"; ?>
	</body>
</html>