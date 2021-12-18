<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<?php
		include "includes/estilo.php";
		?>
		<title>Essence Spa</title>
	</head>
	<body>
		<?php
			include "includes/header.php";
		include "conexion.php";
		
		foreach($mbd->query('SELECT * from Contacto') as $res){
		}
		?>
		<main class="main">
			<div class="contenedor">
				<section class="contacto">
				<div>
				<h1>Horarios:</h1>
				<p><?echo $res[1]?></p>
				</div>
				<div>
				<h1 class="icon-phone1">Telefono:</h1>
				<p><?echo $res[2]?></p>
				</div>
				<div>
				<h1 class="icon-mail1">Correo:</h1>
				<p><?echo $res[3]?></p>
				</div>
				<div>
				<h1>Redes sociales:</h1>
				<div>
				<?echo '<a href="'.$res[4].'" class="icon-facebook">Facebook</a><br>'?>
				<?echo '<a href="'.$res[5].'" class="icon-instagram">Instagram</a><br><br>'?>
				</div>
				</div>
				<div>
				<h1 class="icon-location1">Domicilio:</h1>
				<p><?echo $res[6]?></p>
				</div>
				<iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3754.626383983617!2d-104.36786718570247!3d19.771022134896306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842455c2d396bdb9%3A0x1b3052d43676dffa!2sCalle%20%C3%81lvaro%20Obreg%C3%B3n%2028%2C%20Centro%2C%2048900%20Autl%C3%A1n%20de%20Navarro%2C%20Jal.!5e0!3m2!1ses!2smx!4v1584973139577!5m2!1ses!2smx" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				</section>
			</div>
		</main>
		<?php
			include "includes/footer.php";
		?>
	</body>
</html>