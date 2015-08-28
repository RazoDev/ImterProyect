<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Impter</title>
	<?php include 'inc/header-common.php' ?>
</head>
<body>
	<header>
		<?php include 'inc/header-menu.php' ?>
	</header>



	<!-- <div class="container-slider">
		<img src="img/slide1.jpg" style="width:100%;" alt="slide1">
	</div> -->


	<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="carousel-example-generic" data-slide-to="1"></li>
			<li data-target="carousel-example-generic" data-slide-to="2"></li>
		</ol>
		<!-- slides -->
		<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="img/slide1.jpg" alt="Paneles Solares">
					<div class="carousel-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quaerat deserunt quod dignissimos consectetur id atque maxime at natus, ipsum. Eaque adipisci sit blanditiis error. Perspiciatis debitis ducimus doloribus odit.
						div
					</div>
					<div class="flechita">
						<a href=""  role="button" data-slide="next">
							<span  class=" glyphicon glyphicon-chevron-right" aria-hidden="true"></span>	
						</a>
					</div>
				</div>
				<div class="item">
					<img src="img/slide2.jpg" alt="Paneles Solares">
					<div class="carousel-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quaerat deserunt quod dignissimos consectetur id atque maxime at natus, ipsum. Eaque adipisci sit blanditiis error. Perspiciatis debitis ducimus doloribus odit.
					</div>
					<div class="flechita">
						<a href=""  role="button" data-slide="next">
							<span  class=" glyphicon glyphicon-chevron-right" aria-hidden="true"></span>	
						</a>
					</div>
				</div>
				<div class="item">
					<img src="img/slide3.jpg" alt="Paneles Solares" width="100%" height="50">
					<div class="carousel-caption">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam quaerat deserunt quod dignissimos consectetur id atque maxime at natus, ipsum. Eaque adipisci sit blanditiis error. Perspiciatis debitis ducimus doloribus odit.
					</div>
					<div class="flechita">
						<a href=""  role="button" data-slide="next">
							<span  class=" glyphicon glyphicon-chevron-right" aria-hidden="true"></span>	
						</a>
					</div>
				</div>
			</div>
			<!-- controls -->
			<a href="#carousel-example-generic" class="left carousel-control" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previus</span>
			</a>
			<a href="#carousel-example-generic" role="button" class="right carousel-control" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>



	<article>
		<section>
			<div class="container servicios">
				<div class="row">
					<div class="col-xs-12">
						<h3>Servicios que ofrecemos</h3>
						<figure>
							<img src="img/espacios-sustentables.jpg" alt="eco-energia-solar" width="460" height="146">
							
						</figure>
						<figure>
							<img src="img/eco-energia-solar.jpg" alt="eco-energia-solar" width="460" height="146">
							
						</figure>
						
					</div>
			</div>
			<div class="container txt-servicios">
				<div class="row">
					
					<div class="col-sm-12">

						<div class="col-sm-4">
							<p class="visible-sm visible-md visible-lg"><strong>70</br></strong><span>Proyectos Realizados</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						<div class="col-sm-4">
							<p class="visible-sm visible-md visible-lg"><strong>50-70%</br></strong><span>En ahorro anual</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
						<div class="col-sm-4">
							<p class="visible-sm visible-md visible-lg"><strong>34</br></strong><span>Años de experiencia</span>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section>
			<div class="container servicios">
				<div class="row">
					<div class="col-xs-12">
						<h3>Algunos de nuestros proyectos</h3>
						<div class="col-xs-offset-3 col-xs-6 col-xs-offset-3"></div>
					</div>
				</div>
			</div>


			<div class="wrapper">
    
            <div class="next-prev">

			<a href="#"  role="button" class="jcarousel-control-prev">
							<span  class=" glyphicon glyphicon-chevron-left" aria-hidden="true"></span>	
						</a>
			<a href="#" class="jcarousel-control-next">
							<span  class=" glyphicon glyphicon-chevron-right"></span>	
						</a>
            </div>
            <div class="jcarousel-wrapper">
                <div class="jcarousel">
                    <ul>
                        <li><img src="img/proyect1.jpg" alt="Image 1" width="230">
                        	<p>Residencia Bioclimática</p>
                        </li>
                        <li><img src="img/proyect2.jpg" alt="Image 2" width="230">
                        <p>Construcción sustentable Rio Belo</p>
                        </li>
                        <li><img src="img/proyect3.jpg" alt="Image 3" width="230"></li>
                        <li><img src="img/proyect4.jpg" alt="Image 4" width="230"></li>
                        
                    </ul>
                </div>

                

                
            </div>
        </div>


		</section>
	</article>
	<div class="container servicios">
				<div class="row">
					<div class="col-xs-12">
						<h3>CONTÁCTANOS</h3>
						<div class="col-xs-offset-3 col-xs-6 col-xs-offset-3"></div>
					</div>
				</div>
			</div>

	<?php include 'inc/footer.php' ?>
	<?php include 'inc/footer-common.php' ?>
</body>
</html>