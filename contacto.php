<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Contacto</title>
	<?php include 'inc/header-common.php' ?>
	<link rel="stylesheet" href="css/contacto.css">
</head>
<body>
	<?php include 'inc/header-menu.php' ?>

	<section id="bg">
			<div class="container contacto">
				<div class="row">
					<div class="col-xs-10 col-xs-offset-2">
						<h1>CONTACTO</h1>
						<p class="col-sm-8">Es importante para nosotros brindarte una buena atención.</br> Por favor rellena el formulario y envianos tus comentarios</p>		
					</div>
				</div>
			</div>
		</section>
		<div class="container tel-ubicacion">
			<div class="row">
				<div class="col-xs-12 col-sm-12">
					<div class="col-sm-5 visible-sm visible-md visible-lg">
						
							<span>También nos puedes llamar al:</span>
							<ul>
								<li>443 314 7000</li>
								<li>443 277 0175</li>
								<li>ID: 62*11*53446</li>
							</ul>
							<span>Estamos ubicados en:</span>
							<p>30 de julio #224 esq. Libertad Lomas de Hidalgo </br>
							58240 Morelia, México</p>
						
					</div>

					<div class="col-xs12 col-sm-7">
						<div class="row">
						<div id="respuesta"></div>
							<form action="" method="POST" id="formulario">
								<div class="col-sm-6">
									<div class="form-group">
										<label for="nombre">Nombre</label>
										<input type="text"  id="nombre" name="nombre"  class="form-control" placeholder="Nombre">
									</div>
									<div class="form-group">
										<label for="email">Email</label>
										<input type="email"  id="email" name="email" class="form-control" placeholder="Email">
									</div>
									<div class="form-group">
										<label for="tel">Teléfono</label>
										<input type="text"  id="telefono" name="telefono" class="form-control" placeholder="Teléfono">
									</div>
									
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="tel">Mensaje</label>
										
										<textarea class="form-control "name="mensaje" id="mensaje" cols="30" rows="10" placeholder="Mensaje"></textarea>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label for="captcha">Captcha</label>
										<input type="text"  id="captcha" name="captcha" class="form-control" placeholder="captcha">
									</div>
									<li class="imagen-captcha-btn">
										<img class=" img-captcha bg-info" src="captcha.php">
										<button id="actualizar_captcha" type="button">Actualizar</button>
									</li>
								</div>
								
								
								<input type="submit" id="botton" class="btn btn-primary btn-block col-sm-6">
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-xs-12">
					<div id="mapa">
						
					</div>
				</div>
			</div>
		</div>
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/footer-common.php' ?>
</body>
</html>