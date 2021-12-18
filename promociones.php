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
		<?include "includes/header.php";?>
		<main>
			<div class="contenedor">
				<h1>Promociones</h1>
				<div class="lista">
				<?php
				foreach($mbd->query('SELECT * from Promociones') as $res){
					echo '<div class="promocion">';
					echo '<h3>'.$res[1].'</h3>';
					echo '<p>'.$res[2].'</p>';
					echo '<img src="data:image/png;base64,'.base64_encode($res[3]).'" alt="" class="imagen">'; 
					echo '</div>';
				}
				?>
				</div>	
			</div>
		</main>
		<?php
			include "includes/footer.php";
		?>
	</body>
</html>