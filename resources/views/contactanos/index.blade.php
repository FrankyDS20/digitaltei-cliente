@extends('layouts.base') @prepend('styles') @section('content') 

	<!-- Start Banner Area -->
	{{-- <section class="banner-area organic-breadcrumb">
		<div class="container">
			<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
				<div class="col-first">
					<h1>Contactanos</h1>
					<nav class="d-flex align-items-center">
						<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
						<a href="category.html">Contacto</a>
					</nav>
				</div>
			</div>
		</div>
	</section> --}}
	<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<style>
	 
	  .col-md-5 {
		position: relative;
			z-index: 1;
			margin: 3% auto;
			max-width: 500px; /* Ajusta el ancho máximo del contenido */
			max-height: 600px; /* Ajusta el ancho máximo del contenido */
			padding: 3rem; /* Ajusta el espaciado interno del contenido */
			background-color: rgba(255, 255, 255, 0.8); /* Ajusta el color de fondo y la opacidad del contenido */
			border-radius: 8px; /* Ajusta el radio de borde del contenido */
	
	  }
	</style>
		<!-- Start Banner Area -->
		{{-- <section class="banner-area organic-breadcrumb">
			<div class="container">
				<div class="breadcrumb-banner d-flex flex-wrap align-items-center justify-content-end">
					<div class="col-first">
						<h1>{{$titulo}}</h1>
						<nav class="d-flex align-items-center">
							<a href="index.html">Home<span class="lnr lnr-arrow-right"></span></a>
							<a href="#">TIENDA<span class="lnr lnr-arrow-right"></span></a>
							<a href="category.html">SERVICIOS</a>
						</nav>
					</div>
				</div>
			</div>
		</section> --}}
	  <div class="position-relative overflow-hidden bd-placeholder-img p-3 p-md-5 m-md-3 text-center bg-body-tertiary" style="background-image: url('assets/img/contac/imagen1.png'); background-size: cover;  background-position: center;background-repeat: no-repeat;">
		<div class="col-md-5">
			<h1 class="display-4 fw-normal">Contactanos</h1>
			<p class="lead fw-normal">Transformando ideas en soluciones digitales</p>
			<a class="btn btn-outline-secondary" href="#">INICIAR SESION</a>
		</div>
		<div class="product-device shadow-sm d-none d-md-block"></div>
		<div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
	</div>
	<!-- End Banner Area -->
	{{-- <section class="contact_area section_gap_bottom">
		<div class="container">
		  <div id="map" class="map"></div>
		</div>
	  </section> --}}
	  
	 <!-- End Banner Area -->
	{{-- <section class="contact_area section_gap_bottom">
		<div class="container">
		  <div id="map" class="map"></div>
		</div>
	  </section> --}}
	  
	  {{-- <script src="https://maps.googleapis.com/maps/api/js?key=TU_API_KEY&callback=initMap" async defer></script>
	  <script>
		function initMap() {
		  var location = { lat: -6.632340, lng: -79.783406 };
		  var map = new google.maps.Map(document.getElementById('map'), {
			center: location,
			zoom: 13
		  });
		  var marker = new google.maps.Marker({
			position: location,
			map: map,
			title: 'Mi ubicación'
		  });
		}
	  </script> --}}
	  <body>
		<div  class="mt-5" style="display: flex; justify-content: center; mx-auto mt-5">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.117256443346!2d-79.78598478975336!3d-6.632356364806935!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x904c954517905665%3A0x5a077a735547000e!2sDIGITALTEI%20SAC!5e0!3m2!1ses!2spe!4v1685933653661!5m2!1ses!2spe" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>		</div>
	  </body>
	<!--================Contact Area =================-->
	{{-- <section class="contact_area section_gap_bottom">
		<div class="container">
			<div id="mapBox" class="mapBox" data-lat="-12.046374" data-lon="-77.042793" data-zoom="13" data-info="HAB. URBANA ERNESTO VILCHEZ ALCANTARA I MZ. G LOTE 7, Ferreñafe 14311"
				 data-mlat="-6.632340" data-mlon="-79.783406">
				  
			</div>
		</div> --}}
	</section>
			<div class="row p-5">
				<div class="col-lg-3">
					<div class="contact_info">
						<div class="info_item">
							<i class="lnr lnr-home"></i>
							<h6>FERREÑAFE</h6>
							<p>HAB. URBANA ERNESTO VILCHEZ ALCANTARA I MZ. G LOTE 7, Ferreñafe 14311</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-phone-handset"></i>
							<h6><a href="#">989466574</a></h6>
							<p>Horario de atencion : 8 am - 5 pm</p>
						</div>
						<div class="info_item">
							<i class="lnr lnr-envelope"></i>
							<h6><a href="#">digitaltei@gmail.com</a></h6>
							<p>¡Envíanos tu consulta cuando quieras!</p>
						</div>
					</div>
				</div>
				<div class="col-lg-9">
					<form class="row contact_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
						<div class="col-md-6">
							<div class="form-group">
								<input type="text" class="form-control" id="name" name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'">
							</div>
							<div class="form-group">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'">
							</div>
							<div class="form-group">
								<input type="text" class="form-control" id="subject" name="subject" placeholder="Enter Subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Subject'">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<textarea class="form-control" name="message" id="message" rows="1" placeholder="Enter Message" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'"></textarea>
							</div>
						</div>
						<div class="col-md-12 text-right">
							<button type="submit" value="submit" class="primary-btn">Send Message</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<!--================Contact Area =================-->

	
			{{-- <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap"> --}}
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
{{-- Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p> --}}
			{{-- </div>
		</div> --}}
		<script>
			var elementoInicio = document.getElementById("contactanos");
			elementoInicio.classList.add("active");
			
				  </script>

@endsection
