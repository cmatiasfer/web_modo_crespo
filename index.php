<?php
	header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	error_reporting(E_ALL);
	ini_set("display_errors", 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Modo Crespo</title>
	<link rel="stylesheet" href="css/bootstrap-reboot.min.css">
	<link rel="stylesheet" href="css/bootstrap-grid.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
	<link rel="manifest" href="img/favicon/site.webmanifest">
</head>
<body>

	<div id="preloader">
		<div id="status">&nbsp;</div>
	</div>
		
	<header>
		<div class="container-fluid">
			<div class="row">
				<div class="col-6 offset-6 d-flex justify-content-between">
					<span class="logo"></span>
					<span id="btn-menu"></span>
					<!-- <span id="btn-menu"></span> -->
				</div>
			</div>
		</div>
	</header>

	<div class="menu-full  close d-flex align-items-center justify-content-center">
		<nav class="">
			<a href="#ubicacion">Ubicación</a>
			<a href="#edificios">Los edificios</a>
			<a href="#unidades">Las unidades</a>
			<a href="#amenities">Las amenities</a>
			<a href="#contacto">Contacto</a>
		</nav>
	</div>

	<section id="hero" class="full-height">
		<h2>Modo Crespo</h2>
	</section>

	<footer>
		<div class="container-fluid">
			<div class="row">
				<div class="d-flex b-mini-logo border-r">
					<a href="" class="mini-logo"></a>
				</div>
				<div class="d-flex b-locations border-r align-items-center">
					<span>
					<a href="https://goo.gl/maps/LjL5Z74e3KwdjEWh7" class="dire" target="_blank">Julián Alvarez 516</a> - <a href="https://goo.gl/maps/TxRVt1PfYYttcyKm7" target="_blank" class="dire">Velasco 323</a> <br>Villa Crespo, Bs. As.
					</span>
				</div>
				<div class="d-flex b-data border-r">
					<div class="row">
						<div class="col-8 ">
							<a href="tel:+1152190786" target="_blank">5219 0786</a>
							<a href="mailto:info@modocrespo.com" target="_blank">info@modocrespo.com</a>
						</div>
						<div class="col-4 d-flex justify-content-end">
							<a href="#" class="d-inline-block"><i class="fb"></i></a>
							<a href="#" class="d-inline-block"><i class="ig"></i></a>
							
						</div>
					</div>
				</div>
				<div class="d-flex b-partners">
					<div class="row">
						<div class="col-5 d-flex align-items-center flex-column">
							<h3>Proyecto y Dirección</h3>
							<a href="" class="partner-proy"></a>
						</div>
						<div class="col-3">
							<h3>Desarrolla</h3>
							<a href="" class="partner-des"></a>
						</div>
						<div class="col-4">
							<h3>Comercializa</h3>
							<a href="" class="partner-com"></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<section id="ubicacion">
		<div class="main-bg-image" style="background-image: url(img/ubicacion/_bg-image.jpg);">
			<div class="filter"></div>
			<div class="title d-flex align-items-center justify-content-center"> <h2>Ubicacion</h2> </div>
		</div>
		<div class="container">
			<div class="main-text text-mobile">
				<p><strong>MODO CRESPO</strong> se encuentra en una zona <br>
						en constante crecimiento y de importante<br>
						revalorización a nivel inmobiliario.</p>
			</div>

			<div class="slick">
				<div><span><img src="img/ubicacion/slider1.jpg" class="img-fluid" alt=""></span></div>
				<div><span><img src="img/ubicacion/slider2.jpg" class="img-fluid" alt=""></span></div>
			</div>
			<div class="container-dots">
				<div class="row no-gutters">
					<div class="col-6">
						<span class="title-image">Parque Centenario</span>
					</div>
					<div class="col-6">
						<div class="list-sliders">
							<span data-slider="ubicacion" data-index="0" class="active">1</span>
							<span data-slider="ubicacion" data-index="1">2</span>
						</div>
					</div>
				</div>
				<span class="full-line"></span>
			</div>
			<div class="row content-img-text">
				<div class="col-md-6">
					<img src="img/ubicacion/ubi-bici.jpg" class="img-fluid" alt="" srcset="">
				</div>
				<div class="col-md-6">
					<div class="col-text d-flex justify-content-center flex-column justify-content-start text-mobile">
						<span class="line"></span>
						<p>
							Cercano a barrios como Palermo <br>
							y Caballito, con múltiples <br>
							accesos a medios de transporte, <br>
							a metros de la boca del subte,<br>
							rodeado de diferentes propuestas<br>
							gastronómicas y comerciales.
						</p>
					</div>
				</div>
			</div>
			<img src="img/ubicacion/ubi-grid-1.jpg" class="d-block d-sm-none img-fluid" alt="">
			<div class="phrase text-mobile">
				<p>Villa Crespo, se transforma en uno de los barrios <br> más buscados dentro de la Ciudad.</p>
			</div>
			<div class="row ubi-grid">
				<div class="col-sm-4 d-none d-sm-block">
					<img src="img/ubicacion/ubi-grid-1.jpg" class="d-none d-sm-block img-fluid" alt="">
				</div>
				<div class="col-sm-4">
					<img src="img/ubicacion/ubi-grid-2.jpg" class="img-fluid" alt="">
				</div>
				<div class="col-sm-4">
					<img src="img/ubicacion/ubi-grid-3.jpg" class="img-fluid"alt="">
				</div>
			</div>
		</div>
		<!-- <div class="gmap"></div> -->
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13136.377951907567!2d-58.445346956774735!3d-34.601772132375096!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bcca73d0846311%3A0x9b6d4ab1b4e04ef9!2sJuli%C3%A1n%20%C3%81lvarez%20516%2C%20C1414DRL%20CABA!5e0!3m2!1sen!2sar!4v1568297975504!5m2!1sen!2sar" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
	</section>

	<section id="edificios">
		<div class="main-bg-image" style="background-image: url(img/edificios/_bg-image.jpg);">
			<div class="filter"></div>
			<div class="title d-flex align-items-center justify-content-center"> <h2>edificios</h2> </div>
		</div>
		<div class="container">
			<div class="main-text text-mobile">
				<p>
					<strong>MODO CRESPO</strong> <br>
					ABRE LA POSIBILIDAD DE ALGO NUEVO, <br>
					EN LAS CALLES DE SIEMPRE.
				</p>
				<span class="line"></span>
				<p class="desc">MODO CRESPO es un complejo de dos edificios unidos, <br>
					que conforman un proyecto único e irrepetible.</p>
			</div>
			<div class="row grid-edificios">
				<div class="col-sm-6">
					<img src="img/edificios/edificio-velasco.jpg" class="img-fluid" alt="">
					<span>VELASCO 323</span>
				</div>
				<div class="col-sm-6">
					<img src="img/edificios/alvarez.jpg" class="img-fluid" alt="">
					<span>JULIÁN ALVAREZ 516</span>
				</div>
			</div>
			<span class="full-line"></span>
			<div class="main-text text-mobile">
				<p>
					Los edificios se emplazan en un predio que surge de la unificación de <br>
					dos lotes que se encuentran en el centro de la manzana, permitiendo así una <br>
					optimización de las plantas en cuanto a orientación y luminosidad.
				</p>
			</div>
		</div>

		<img src="img/edificios/mapa.jpg" class="img-fluid only-img" alt="">

		<div class="container">
			<!-- <div class="row content-img-text">
				<div class="col-sm-6">
					<img src="img/edificios/msg-modo-crespo.jpg" class="img-fluid" alt="" srcset="">
				</div>
				<div class="col-sm-6">
					<div class="col-text d-flex justify-content-center flex-column justify-content-start">
						<span class="line"></span>
						<p>
							Son 53 uniades de viviendas y estudios <br>
							profesionales que comparten un único <br>
							hall de acceso, amenities, sin perder la <br>
							intimidad pero por sobre todo permitiendo <br>
							unas expensas mucho más bajas que la <br>
							media del mercado, conviviendo solo <br>
							3 unidades por módulo.
						</p>
					</div>
				</div>
			</div> -->
			<div class="main-text text-mobile">
				<p>
					Son 53 unidades de viviendas y estudios <br>
					profesionales que comparten un único <br>
					hall de acceso, amenities, sin perder la <br>
					intimidad pero por sobre todo permitiendo <br>
					unas expensas mucho más bajas que la <br>
					media del mercado, conviviendo solo <br>
					3 unidades por módulo.
				</p>
			</div>
			<div class="slick">
				<div><span><img src="img/edificios/slider1.jpg" class="img-fluid" alt=""></span></div>
				<div><span><img src="img/edificios/slider2.jpg" class="img-fluid" alt=""></span></div>
			</div>

			<div class="container-dots">
				<div class="row no-gutters">
					<div class="col-6">
						<span class="title-image">Lobby</span>
					</div>
					<div class="col-6">
						<div class="list-sliders">
							<span data-slider="edificios" data-index="0" class="active">1</span>
							<span data-slider="edificios" data-index="1">2</span>
						</div>
					</div>
				</div>
				<span class="full-line"></span>
			</div>

			<div class="main-text text-mobile">
				<p>
					La entrada al complejo es sobre la calle Velasco 323  desde allí <br>
					se puede ingresar a ambos módulos, cada uno con su <br>
					correspondiente ascensor de última generación. <br>
					<br>
					Ambos módulos “Velasco” y “J. Alvarez” se comunican <br>
					únicamente en la Planta Baja y en el sector de Terraza. <br>
					El resto del complejo mantiene su independencia, <br>
					como si fuesen edificios separados.
				</p>
			</div>
		</div>
	</section>

	<section id="unidades">
		<div class="main-bg-image" style="background-image: url(img/unidades/_bg-image.jpg);">
			<div class="filter"></div>
			<div class="title d-flex align-items-center justify-content-center"> <h2>unidades</h2> </div>
		</div>
		<div class="container">
			<div class="main-text text-mobile">
				<p>
					Todas las unidades son con  orientación al frente o al contra <br>
					frente, recibiendo una óptima luminosidad.
				</p>
			</div>
		</div>

		<img src="img/unidades/unidades-1.jpg" class="img-fluid only-img" alt="">
		
		<div class="container">
			<div class="main-text text-mobile">
				<p>
					Con un diseño moderno y despejado, grandes ventanales de piso a techo <br>
					conforman un planteo contemporáneo de gran aceptación.
				</p>
			</div>
			<img src="img/unidades/unidades-2.jpg" class="img-fluid only-img" alt="">
			<span class="full-line"></span>

			<div class="data">
				<div class="row">
					<div class="col-md-4">
						<div class="data-unity active" data-index="0">
							<span class="unidad">UNIDAD 01</span>
							<span class="piso">Piso 1º a 8º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">2 Ambientes</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 65.8 <br>
								M2 Total Cubiertos: 58.3 <br>
								M2 Semicubiertos: 7.5
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include './img/planos/mini/miniplano1@.svg'; ?>
							</div>
						</div>
						<div class="data-unity" data-index="1">
							<span class="unidad">UNIDAD 06</span>
							<span class="piso">Piso 1º a 8º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">2 Ambientes</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
									M2 Total: 54.1 <br>
									M2 Total Cubiertos: 48.4 <br>
									M2 Semicubiertos: 5.7
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/miniplano2.svg"; ?>
							</div>
						</div>
						<div class="data-unity" data-index="2">
							<span class="unidad">UNIDAD 03</span>
							<span class="piso">Piso 1º a 9º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">2 Ambientes</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 45.9 <br>
								M2 Total Cubiertos: 43.0 <br>
								M2 Semicubiertos: 2.9
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/miniplano3.svg" ;?>
							</div>
						</div>
						<div class="data-unity" data-index="3">
							<span class="unidad">UNIDAD 01</span>
							<!-- <span class="piso">Piso 1º a 8º</span> -->
							<span class="piso">Piso 9º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">2 Ambientes</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 59.5 <br>
								M2 Total Cubiertos: 42.0 <br> 
								M2 Descubiertos: 17.5
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/miniplano1.svg"; ?>
							</div>
						</div>
						<div class="data-unity" data-index="4">
							<span class="unidad">UNIDAD 04</span>
							<span class="piso">Piso 9º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">2 Ambientes</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 48.0 <br>
								M2 Total Cubiertos: 45.0 <br>
								M2 Descubiertos: 3.0
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/unidad4piso9.svg"; ?>
							</div>
						</div>
						<div class="data-unity" data-index="5">
							<span class="unidad">UNIDAD 05</span>
							<span class="piso">Piso 9º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">2 Ambientes</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 64.5 <br>
								M2 Total Cubiertos: 49.3 <br>
								M2 Descubiertos: 15.5
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/unidad5piso9.svg"; ?>
							</div>
						</div>
						<div class="data-unity" data-index="6">
							<span class="unidad">UNIDAD 04</span>
							<span class="piso">Piso 1º a 8º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">ESTUDIO</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 27.8 <br>
								M2 Total Cubiertos: 25.6 <br>
								M2 Semicubiertos: 2.2
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/miniplano4b.svg"; ?>
							</div>
						</div>
						<div class="data-unity" data-index="7">
							<span class="unidad">UNIDAD 05</span>
							<span class="piso">Piso 1º a 8º</span>
							<span class="data-unity-line"></span>
							<span class="tipo">MONOAMBIENTE</span>
							<span class="data-unity-line"></span>
							<p class="data-sup">
								M2 Total: 33.8 <br>
								M2 Total Cubiertos: 30.9 <br>
								M2 Semicubiertos: 2.9
							</p>
							<span class="data-unity-line"></span>
							<div class="desk-miniplantas">
								<?php include "./img/planos/mini/miniplano5b.svg"; ?>
							</div>
						</div>
						
					</div>
					<div class="col-md-8">
						<div class="slick">
							<div><span class="content-image"><img src="img/planos/plano1@.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano2.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano3.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano4.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano5.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano6.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano7.png" class="img-fluid plano" alt=""></span></div>
							<div><span class="content-image"><img src="img/planos/plano5b.png" class="img-fluid plano" alt=""></span></div>
						</div>
					</div>
				</div>

				<div class="row lista-miniplantas">
					<div class="col">
						<div class="mobile-miniplantas" data-index="0">
							<?php include './img/planos/mini/miniplano1@.svg'; ?>
						</div>
						<div class="mobile-miniplantas" data-index="1">
							<?php include './img/planos/mini/miniplano2.svg'; ?>
						</div>
						<div class="mobile-miniplantas" data-index="2">
							<?php include './img/planos/mini/miniplano3.svg'; ?>
						</div>
						<div class="mobile-miniplantas" data-index="3">
							<?php include './img/planos/mini/miniplano1.svg'; ?>
						</div>
						<div class="mobile-miniplantas" data-index="4">
							<?php include './img/planos/mini/unidad4piso9.svg'; ?>
						</div>
						<div class="mobile-miniplantas" data-index="5">
							<?php include './img/planos/mini/unidad5piso9.svg'; ?>
						</div>
						<div class="mobile-miniplantas" data-index="6">
							<?php include './img/planos/mini/miniplano4b.svg'; ?>	
						</div>
						<div class="mobile-miniplantas" data-index="7">
							<?php include './img/planos/mini/miniplano5b.svg'; ?>	
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="amenities">
		<div class="main-bg-image" style="background-image: url(img/amenities/_bg-image.jpg);">
			<div class="filter"></div>
			<div class="title d-flex align-items-center justify-content-center"> <h2>amenities</h2> </div>
		</div>
		<div class="feature d-flex justify-content-center">
			<div class="list">
				<p>
					SUM ⋅ TERRAZA ⋅ PILETA ⋅ PARRILLA ⋅ LAUNDRY ⋅ SOLARIUM
				</p>
			</div>
		</div>

		<img src="img/amenities/amenities1.jpg" class="img-fluid img-with-title" alt="">
		<div class="container">
			<span class="title-img mb-space">Terraza</span>
			<img src="img/amenities/amenities2.jpg" class="img-fluid img-with-title" alt="">
			<span class="title-img mb-space">Piscina</span>
		</div>
	</section>

	<section id="contacto">
		<div class="content-form d-flex justify-content-center align-items-center">
			<form id="form-contacto">
				<input type="text" placeholder="Nombre" id="Name"  name="name">
				<input type="text" placeholder="Email" id="Email" name="email">
				<input type="text" placeholder="Teléfono" id="Phone" name="phone">
				<textarea type="text" placeholder="Mensaje" id="Msg" name="msg"></textarea>
				<p>*Estos campos son obligatorios</p>
				<button type="submit" class="send">Enviar</button>
			</form>
			<div class="response"></div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/jquery.validate.js"></script>
	<script src="js/jquery.start.js"></script>
</body>
</html>