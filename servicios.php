<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="ie-edge">
		<meta name="viewport" content="width=device-width, user-scalable=yes, initial-scale=1, maximum-scale=1, minimum-scale=1">
		<?php
		include "includes/estilo.php";
		include "conexion.php";
		?>
		<title>Essence Spa</title>
	</head>
	<body>
		<?php
			include "includes/header.php";
		?>
			<main>
			<div class="contenedor">
			<h1>Servicios</h1>
			<section class="lista">
			<?
				foreach($mbd->query('SELECT * from Servicios') as $res){
				echo '<div class="servicio">';
				echo '<div class="servicio1">';
				echo '<h3>'.$res[1].'</h3>';
				echo '<img src="data:image/png;base64,'.base64_encode($res[3]).'" alt="">'; 
				echo '</div>';
				echo '<div class="servicio2">';
				echo '<p>'.$res[2].'</p>';
				echo '<p>Duración:'.$res[4].'</p>';
				echo '<!--<p>Id Categoria:'.$res[5].'</p>-->';
				echo '</div>';
				echo '</div>';
				}
			?>
			</section>
			</div>
			</main>
		<?php include "includes/footer.php"; ?>
	</body>
</html>