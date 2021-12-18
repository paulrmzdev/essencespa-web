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
		<?php include "includes/header.php";?>
		<main>
			<section class="conteiner">
				<h1>Experiencias</h1>
				<div class="galeria">
				<?
				foreach($mbd->query('SELECT * from Experiencias') as $res){
					echo '<img src="data:image/png;base64,'.base64_encode($res[1]).'" alt="">';
				}
				?> 
				</div>
			</section>
		</main>
		<?php include "includes/footer.php"; ?>
	</body>
</html>