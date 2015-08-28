<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Portafolio</title>
	<?php include 'inc/header-common.php' ?>
	<link rel="stylesheet" href="css/portafolio.css">
	<link rel="stylesheet" href="css/bootstrap.lightbox.css">
</head>
<body>
	<?php include 'inc/header-menu.php' ?>

	<section id="bg">
			<div class="container portafolio">
				<div class="row">
					<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1">
						<h1>PORTAFOLIO DE SERVICIOS</h1>			
					</div>
				</div>
			</div>
	</section>
	
	<div class="example">
        <ul class="thumbnails" data-toggle="lightbox">

            <li class="span3"><a href="img/port-img1.jpg" title="panel-solar" data-title-link="" data-description="" class="thumbnail"><img src="img/port-img1.jpg" alt=""/></a></li>

            <li class="span3"><a href="img/port-img2.jpg" title="Image #2" data-title-link="#markup" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-2.jpg" alt=""/></a></li>

            <li class="span3"><a href="img/port-img3.jpg" title="Image #3" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-3.jpg" alt=""/></a></li>

            <li class="span3"><a href="img/port-img4.jpg" title="Image #4" data-description="Lorem ipsum dolor" class="thumbnail"><img src="img/thumb-4.jpg" alt=""/></a></li>

        </ul>
    </div>
	
	<?php include 'inc/footer.php' ?>
	<?php include 'inc/footer-common.php' ?>
</body>
</html>