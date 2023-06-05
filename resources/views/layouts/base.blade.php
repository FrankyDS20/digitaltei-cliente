<!DOCTYPE html>
<html lang="zxx" class="no-js">
   <head>
      <link rel="shortcut icon" type="image/x-icon" href="{{asset('/assets/img/logo.png') }}">
      <title>Digitaltei | {{$titulo}}</title>
      <!-- Mobile Specific Meta -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <!-- Favicon-->
      <link rel="shortcut icon" href="img/fav.png">
      <!-- Author Meta -->
      <meta name="author" content="CodePixar">
      <!-- Meta Description -->
      <meta name="description" content="">
      <!-- Meta Keyword -->
      <meta name="keywords" content="">
      <!-- meta character set -->
      <meta charset="UTF-8">
      <!-- Site Title -->
      <title>Karma Shop</title>
      <!--
         CSS
         ============================================= -->
		 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
      <link rel="stylesheet" href="{{ asset('assets/css/linearicons.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/nice-select.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/nouislider.min.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/ion.rangeSlider.skinFlat.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}"/>
      <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}"/>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
      <script src="{{asset('/assets/js/vendor/jquery-2.2.4.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/vendor/bootstrap.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/jquery.ajaxchimp.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/jquery.nice-select.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/jquery.sticky.js') }}" defer></script> 
      <script src="{{asset('/assets/js/nouislider.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/countdown.js') }}" defer></script> 
      <script src="{{asset('/assets/js/jquery.magnific-popup.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/owl.carousel.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/gmaps.min.js') }}" defer></script> 
      <script src="{{asset('/assets/js/main.js') }}" defer></script> 
      {{-- <script src="{{asset('/assets/assets/js/color-modes.js') }}"></script> --}}
      {{-- 
      <link href="{{asset('/assets/assets/dist/css/bootstrap.min.css') }}" rel="stylesheet">
      --}}
      <script src="{{asset('/assets/assets/dist/js/bootstrap.bundle.min.js') }}"></script>
      <link href="{{asset('/assets/css/carousel.css') }}" rel="stylesheet">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
         crossorigin="anonymous"></script>
      <!--gmaps Js-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
   </head>
   <body>
      <!-- Start Header Area -->
      <header class="header_area sticky-header">
		<div class="main_menu">
		   <nav class="navbar navbar-expand-lg navbar-light main_box">
			  <div class="container">
				 <!-- Brand and toggle get grouped for better mobile display -->
				 <a class="navbar-brand logo_h" href="index.html"><img width="50" height="55" src="{{asset('/assets/img/logo.png') }}" alt=""> DIGIALTEI</a>
				 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 </button>
				 <!-- Collect the nav links, forms, and other content for toggling -->
				 <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
					<ul class="nav navbar-nav menu_nav ml-auto">
					   <li id="inicio" class="nav-item"><a class="nav-link" href="{{route('home')}}">INICIO</a></li>
					   <li class="nav-item submenu dropdown">
						  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
							 aria-expanded="false">TIENDA</a>
						  <ul class="dropdown-menu">
							 <li class="nav-item"><a class="nav-link" href="{{route('servic.index')}}">Servicios</a></li>
							 <li class="nav-item"><a class="nav-link" href="{{route('product.index')}}">Productos</a></li>
						  </ul>
					   </li>
					   <li id="nosotros" class="nav-item "><a class="nav-link" href="{{route('about.index')}}">NOSOTROS</a></li>
					  
					   <li id="contactanos" class="nav-item "><a class="nav-link" href="{{route('contact.index')}}">CONTACTANOS</a></li>
					  
					   <li id="login" class="nav-item "><button class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >LOGIN</button></li>
					  
					</ul>
					<ul class="nav navbar-nav navbar-right">
					   <li class="nav-item"><a href="#" class="cart"><span class="ti-bag"></span></a></li>
					   <li class="nav-item">
						  <button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
					   </li>
					</ul>
				 </div>
			  </div>
		   </nav>
		</div>
		</div>
	 </header> 


      @yield('content')
      <!-- start footer Area -->
      {{-- <footer class="footer-area section_gap">
         <div class="container">
            <div class="row">
               <div class="col-lg-3  col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h6>About Us</h6>
                     <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
                        magna aliqua.
                     </p>
                  </div>
               </div>
               <div class="col-lg-4  col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h6>Newsletter</h6>
                     <p>Stay update with our latest</p>
                     <div class="" id="mc_embed_signup">
                        <form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                           method="get" class="form-inline">
                           <div class="d-flex flex-row">
                              <input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
                                 required="" type="email">
                              <button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
                              <div style="position: absolute; left: -5000px;">
                                 <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
                              </div>
                              <!-- <div class="col-lg-4 col-md-4">
                                 <button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
                                 </div>  -->
                           </div>
                           <div class="info"></div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="col-lg-3  col-md-6 col-sm-6">
                  <div class="single-footer-widget mail-chimp">
                     <h6 class="mb-20">Instragram Feed</h6>
                     <ul class="instafeed d-flex flex-wrap">
                        <li><img src="{{ asset('assets/img/i1.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i2.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i3.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i4.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i5.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i6.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i7.jpg')}}" alt=""></li>
                        <li><img src="{{ asset('assets/img/i8.jpg')}}" alt=""></li>
                     </ul>
                  </div>
               </div>
               <div class="col-lg-2 col-md-6 col-sm-6">
                  <div class="single-footer-widget">
                     <h6>Follow Us</h6>
                     <p>Let us be social</p>
                     <div class="footer-social d-flex align-items-center">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
               <p class="footer-text m-0">
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
               </p>
            </div>
         </div>
      </footer> --}}

	  <div class="w-100 ">
		<footer class="py-5 bg-dark text-light p-5">
		  <div class="row">
			<div class="col-6 col-md-2 mb-3">
			  <h5>Section</h5>
			  <ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
			  </ul>
			</div>
	  
			<div class="col-6 col-md-2 mb-3">
			  <h5>Section</h5>
			  <ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
			  </ul>
			</div>
	  
			<div class="col-6 col-md-2 mb-3">
			  <h5>Section</h5>
			  <ul class="nav flex-column">
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Home</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Features</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">Pricing</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">FAQs</a></li>
				<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-light">About</a></li>
			  </ul>
			</div>
	  
			<div class="col-md-4 offset-md-1 mb-3">
			  <form>
				<h5>Subscribe to our newsletter</h5>
				<p>Monthly digest of what's new and exciting from us.</p>
				<div class="d-flex flex-column flex-sm-row w-100 gap-2">
				  <label for="newsletter1" class="visually-hidden">Email address</label>
				  <input id="newsletter1" type="text" class="form-control" placeholder="Email address">
				  <button class="btn btn-primary" type="button">Subscribe</button>
				</div>
			  </form>
			</div>
		  </div>
	  
		  <div class="d-flex flex-column flex-sm-row justify-content-between py-4 my-4 border-top">
			<p>© 2023 Company, Inc. All rights reserved.</p>
			<ul class="list-unstyled d-flex">
			  <li class="ms-3"><a class="link-body-emphasis h3" href="#"><i class="bi bi-instagram text-light" width="100" height="100" ></i></a></li>
			  <li class="ms-3"><a class="link-body-emphasis h3" href="#"><i class="bi bi-facebook text-light" width="30" height="30" ></i></a></li>
			  <li class="ms-3"><a class="link-body-emphasis h3" href="#"><i class="bi bi-whatsapp text-light" width="30" height="30" ></i></a></li>
	
			</ul>
		  </div>
		</footer>
	  </div>
      <!-- Modal -->
      <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header mx-auto">
                  <h1 class="modal-title fs-5 " id="staticBackdropLabel ">Iniciar Sesion</h1>
                  {{-- 
                  <div class="d-flex justify-content-end">
                     <div class="position-relative">
                        <div class="position-absolute top-0 end-0">
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                     </div>
                  </div>
                  --}}
               </div>
               <div class="modal-body">
                  <div class="">
                     <div class="">
                        <form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                           <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="USUARIO" onfocus="this.placeholder = ''" onblur="this.placeholder = 'USUARIO'">
                           </div>
                           <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="CONTRASEÑA" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CONTRASEÑA'">
                           </div>
                           <div class="col-md-12 form-group">
                              <div class="creat_account">
                                 <input type="checkbox" id="f-option2" name="selector">
                                 <label for="f-option2">Recordar contraseña</label>
                              </div>
                           </div>
                           <div class="col-md-12 form-group">
                              <button type="submit" value="submit" class="primary-btn">Iniciar Sesion</button>
                              <div class="hover">	
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  {{-- <button type="button" class="btn btn-primary" ="modal">registrar</button> --}}
                  <button type="button" class="btn btn-primary " class="nav-link " data-bs-toggle="modal" data-bs-target="#staticBackdroc">registrar</button>
                  {{-- <button class="btn btn-primary" class="nav-link" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >registrar</button> --}}
                  {{-- <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Registrar</button> --}}
               </div>
            </div>
         </div>
      </div>
      <!-- Modal 2-->
      <div class="modal fade" id="staticBackdroc" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
            <div class="modal-content">
               <div class="modal-header mx-auto">
                  <h1 class="modal-title fs-5 " id="staticBackdropLabel ">Registrar</h1>
                  {{-- 
                  <div class="d-flex justify-content-end">
                     <div class="position-relative">
                        <div class="position-absolute top-0 end-0">
                           <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                     </div>
                  </div>
                  --}}
               </div>
               <div class="modal-body">
                  <div class="">
                     <div class="">
                        <form class="row login_form" action="contact_process.php" method="post" id="contactForm" novalidate="novalidate">
                           <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="USUARIO" onfocus="this.placeholder = ''" onblur="this.placeholder = 'USUARIO'">
                           </div>
                           <div class="col-md-12 form-group">
                              <input type="text" class="form-control" id="name" name="name" placeholder="CONTRASEÑA" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CONTRASEÑA'">
                           </div>
                           <div class="col-md-12 form-group">
                              <div class="creat_account">
                                 <input type="checkbox" id="f-option2" name="selector">
                                 <label for="f-option2">Recordar contraseña</label>
                              </div>
                           </div>
                           <div class="col-md-12 form-group">
                              <button type="submit" value="submit" class="primary-btn">Iniciar Sesion</button>
                              <div class="hover">	
                              </div>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-bs-dismiss="modal">crear cuenta</button>
               </div>
            </div>
         </div>
      </div>
      <!-- End footer Area -->
      {{-- <script src="{{asset('/assets/js/vendor/bootstrap.min.js') }}" defer></script>  --}}
      <script src="{{asset('/assets/js/vendor/jquery-2.2.4.min.js') }}" defer></script> 
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
         crossorigin="anonymous"></script>
      <script src="{{asset('/assets/js/vendor/bootstrap.min.js') }}" ></script>
      <script src="{{asset('/assets/js/jquery.ajaxchimp.min.js') }}" ></script>
      <script src="{{asset('/assets/js/jquery.nice-select.min.js') }}" ></script>
      <script src="{{asset('/assets/js/jquery.sticky.js') }}" ></script>
      <script src="{{asset('/assets/js/nouislider.min.js') }}" ></script>
      <script src="{{asset('/assets/js/countdown.js') }}" ></script>
      <script src="{{asset('/assets/js/jquery.magnific-popup.min.js') }}" ></script>
      <script src="{{asset('/assets/js/owl.carousel.min.js') }}" ></script>
      <!--gmaps Js-->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
      <script src="{{asset('/assets/js/gmaps.min.js') }}" ></script>
      <script src="{{asset('/assets/js/main.js') }}" ></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
   </body>
</html>