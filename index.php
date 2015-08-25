<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Impter</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-3">
				<h1>
					<a href="index.php">
						<figure id="logo-movil">
							<img src="img/logo-imter-movil.png" alt="Imter">
						</figure>
					</a>
				</h1>
			</div>
			<div class="col-xs-9">
				<ul id="main-menu" class="nav nav-pills hidden-xs">
					<li class="active"><a href="index.php">INICIO</a></li>
					<li><a href="index.php">FILOSOFÍA</a></li>
					<li class="dropdown">
						<a href="sistemas-fotovoltaicos.php" class="dropdown-toggle" data-toggle="dropdown">SERVICIOS<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="sistemas-fotovoltaicos.php">Sistemas solares fotovoltáicos</a></li>
							<li><a href="constructora-sustentable.php">Constructora sustentable</a></li>
						</ul>
					</li>
					<li><a href="portafolio.php">PORTAFOLIO</a></li>
					<li><a href="contacto.php">CONTACTO</a></li>
				</ul>
				<a href="#" id="mobile-menu-button" class="btn-mobile visible-xs">
					<!-- <span class="glyphicon glyphicon-th-list"></span> -->
					<figure id="icon-movil">
						<img src="img/icon-movil.jpg" alt="icon-movil">
					</figure>
				</a>
					<li class="txtmenu">MENÚ</li>
			</div>
		</div>
	</div>
	<div class="visible-xs">
		<ul id="mobile-main-menu">
			<li><a href="index.php">INICIO</a></li>
			<li><a href="filosofia.php">FILOSOFÍA</a></li>
			<li class="dropdown">
						<a href="sistemas-fotovoltaicos.php" class="dropdown-toggle" data-toggle="dropdown">SERVICIOS<span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<li><a href="sistemas-fotovoltaicos.php">Sistemas solares fotovoltáicos</a></li>
							<li><a href="constructora-sustentable.php">Constructora sustentable</a></li>
						</ul>
					</li>
			<li><a href="portafolio.php">PORTAFOLIO</a></li>
			<li><a href="contacto.php">CONTACTO</a></li>
		</ul>
	</div>
	

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>