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
				<form action="#" method="get">
				<h1>Encuesta de servicio</h1>
				<section class="lista">
				<?
				foreach($mbd->query('SELECT * from Preguntas') as $res){
					echo '<div class="pregunta">';
					echo '<h3>'.$res[1].'</h3>';
					echo '<div class="respuestas">';	
					echo '<input type="radio" id="a" name="'.$res[0].'"> a) '.$res[2].'</br>';
					echo '<input type="radio" id="b" name="'.$res[0].'"> b) '.$res[3].'</input></br>';
					echo '<input type="radio" id="c" name="'.$res[0].'"> c) '.$res[4].'</input></br>';
					echo '<input type="radio" id="d" name="'.$res[0].'"> d) '.$res[5].'</input></br>';
					echo '</div>';
					echo '</div>';
					
				}
			?>
			</section>
			<h3>Agrega un comentario sobre tu experiencia</h3>
			<input type="text" name="">
				<input type="submit" value="ENVIAR" class="boton">
				</form>		
				</div>
			</main>
		
		<?php
			include "includes/footer.php";
		?>
	</body>
</html>