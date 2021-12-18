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
			foreach($mbd->query('SELECT * from Nosotros') as $res){
				}	
		?>
		<main>
			<div class="contenedor">
			<label><?echo '<img src="data:image/png;base64,'.base64_encode($res[1]).'" alt="" class="imagen">';?> 
			</label>
			<p><?echo $res[2]?></p>
			<label><?echo '<img src="data:image/jpg;base64,'.base64_encode($res[3]).'" alt="" class="imagen" with="300px">';?>
			</div>
			<section class="nosotros">
			<div class="sesgoarriba"></div>
			<h2>Nuestro equipo</h2>
			<div class="equipo">
			<?
				foreach($mbd->query('SELECT * from Empleados') as $res){
				echo '<div class="empleado">';
				echo '<img src="data:image/png;base64,'.base64_encode($res[3]).'" alt="">'; 
				echo '<h3>'.$res[1].'</h3>';
				echo '<p>'.$res[2].'</p>';
				echo '</div>';
				}
			?> 
			</div>
			</section>
		</main>
		<?php
			include "includes/footer.php";
		?>
	</body>
</html>