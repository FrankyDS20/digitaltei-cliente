@extends('layouts.base') @prepend('styles') @section('content') 

	<!-- End Header Area -->
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
  <div class="position-relative overflow-hidden bd-placeholder-img p-3 p-md-5 m-md-3 text-center bg-body-tertiary" style="background-image: url('assets/img/product/productoo2.png'); background-size: cover;  background-position: center;background-repeat: no-repeat;">
    <div class="col-md-5">
        <h1 class="display-4 fw-normal">PRODUCTOS</h1>
        <p class="lead fw-normal">Transformando ideas en soluciones digitales</p>
        <a class="btn btn-outline-secondary" href="#">INICIAR SESION</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
</div>
	<!-- End Banner Area -->
	<div class="container mt-5">
		<div class="row">
			<div class="col-xl-3 col-lg-4 col-md-5">
				<div class="sidebar-categories">
					<div class="head" style="background-color: rgba(254, 141, 0);">Categorías</div>
					<ul class="main-categories" id="categorias">
					</ul>
				  </div>
					{{-- <div class="sidebar-categories">
					<div class="head" style="background-color: rgba(219, 109, 19, 0.87);">Categorias</div>
					<ul class="main-categories">
						<li class="main-nav-list"><a data-toggle="collapse" href="#fruitsVegetable" aria-expanded="false" aria-controls="fruitsVegetable"><span
								 class="lnr lnr-arrow-right"></span>Categoria 1<span class="number">(53)</span></a>
							<ul class="collapse" id="fruitsVegetable" data-toggle="collapse" aria-expanded="false" aria-controls="fruitsVegetable">
								<li class="main-nav-list child"><a href="#">Frozen Fish<span class="number">(13)</span></a></li>
								<li class="main-nav-list child"><a href="#">Dried Fish<span class="number">(09)</span></a></li>
								<li class="main-nav-list child"><a href="#">Fresh Fish<span class="number">(17)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat Alternatives<span class="number">(01)</span></a></li>
								<li class="main-nav-list child"><a href="#">Meat<span class="number">(11)</span></a></li>
							</ul>
						</li>

					</ul>
				</div> --}}
				{{-- <div class="sidebar-filter mt-50">
					<div class="top-filter-head">Aplicar filtros de busqueda</div>
					<div class="common-filter">
						<div class="head">Marcas</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="apple" name="brand"><label for="apple">Apple<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="asus" name="brand"><label for="asus">Asus<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gionee" name="brand"><label for="gionee">Gionee<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="micromax" name="brand"><label for="micromax">Micromax<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="samsung" name="brand"><label for="samsung">Samsung<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Color</div>
						<form action="#">
							<ul>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="black" name="color"><label for="black">Black<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="balckleather" name="color"><label for="balckleather">Black
										Leather<span>(29)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="blackred" name="color"><label for="blackred">Black
										with red<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="gold" name="color"><label for="gold">Gold<span>(19)</span></label></li>
								<li class="filter-list"><input class="pixel-radio" type="radio" id="spacegrey" name="color"><label for="spacegrey">Spacegrey<span>(19)</span></label></li>
							</ul>
						</form>
					</div>
					<div class="common-filter">
						<div class="head">Precio</div>
						<div class="price-range-area">
							<div id="price-range"></div>
							<div class="value-wrapper d-flex">
								<div class="price">Precio:</div>
								<span>$</span>
								<div id="lower-value"></div>
								<div class="to">to</div>
								<span>$</span>
								<div id="upper-value"></div>
							</div>
						</div>
					</div>
				</div> --}}
			</div>
			<div class="col-xl-9 col-lg-8 col-md-7">
				<!-- Start Filter Bar -->
				<div class="filter-bar d-flex flex-wrap align-items-center">
					<div class="sorting">
						<select>
							<option value="1">Por orden Alfabetico</option>
							<option value="1">Por precio mayor a menor</option>
							<option value="1">Por precio de menor a mayor</option>
						</select>
					</div>
					<div class="sorting mr-auto">
						<select>
							<option value="1">6</option>
							<option value="1">10</option>
						</select>
					</div>
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div>
				<!-- End Filter Bar -->
				<!-- Start Best Seller -->
				<section class="lattest-product-area pb-40 category-list">
					<div id="lista_productos" class="row">
						<!-- single product -->
						@foreach($data as $product)
						<div class="col-lg-4 col-md-6">
							<div class="single-product">
                                <img class="img-fluid" src="http://digitaltei.test/storage/{{($product->image)}}" alt="">
								<div class="product-details">
									<h6>{{$product->name}}</h6>
									<div class="price">
										<h6>{{$product->price}}</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
									<div class="prd-bottom">

										<a href="" class="social-info">
											<span class="ti-bag"></span>
											<p class="hover-text">add to bag</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-heart"></span>
											<p class="hover-text">Wishlist</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-sync"></span>
											<p class="hover-text">compare</p>
										</a>
										<a href="" class="social-info">
											<span class="lnr lnr-move"></span>
											<p class="hover-text">view more</p>
										</a>
									</div>
								</div>
							</div>
						</div>
					@endforeach
					
					<div class="text-center">
						{{ $data->links('pagination::bootstrap-5') }}
					</div>
						
					</div>
				</section>
				<!-- End Best Seller -->
				<!-- Start Filter Bar -->
				{{-- <div class="filter-bar d-flex flex-wrap align-items-center">
					
					<div class="pagination">
						<a href="#" class="prev-arrow"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></a>
						<a href="#" class="active">1</a>
						<a href="#">2</a>
						<a href="#">3</a>
						<a href="#" class="dot-dot"><i class="fa fa-ellipsis-h" aria-hidden="true"></i></a>
						<a href="#">6</a>
						<a href="#" class="next-arrow"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
					</div>
				</div> --}}
				<!-- End Filter Bar -->
			</div>
		</div>
	</div>

	<!-- Start related-product Area -->
	{{-- <section class="related-product-area section_gap">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<div class="section-title">
						<h1>Ofertas de la semana</h1>
						<p>Para todos nuestros cliente , tenemos grande ofertas , que esperas registrate y podras aquirir nuestros servicio a un buen precio.</p>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-9">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r1.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r2.jpg') }}" alt=""></a>
                               
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r3.jpg') }}" alt=""></a>
                               
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r5.jpg') }}" alt=""></a>
                               
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r6.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6 mb-20">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r7.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r9.jpg') }}" alt=""></a>
                               
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r10.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="single-related-product d-flex">
								<a href="#"><img src="{{ asset('assets/img/r11.jpg') }}" alt=""></a>
								<div class="desc">
									<a href="#" class="title">Black lace Heels</a>
									<div class="price">
										<h6>$189.00</h6>
										<h6 class="l-through">$210.00</h6>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="ctg-right">
						<div class="single-deal">
							<div class="overlay"></div>
						<a href="{{route('login.index')}}" target="_blank">
							<img class="img-fluid d-block mx-auto"  src="{{ asset('assets/img/category/c5.jpg') }}" alt="" >
								<div class="deal-details">
									<h6 class="deal-title">Iniciar Sesion</h6>
								</div>
							</a>
							
						</a>
					</div>
				</div>
			</div>
		</div>
	</section> --}}

	<script>
	  // Hacer la solicitud HTTP a la API
	  fetch('http://digitaltei.test/api/products/subcategory/{id}')
		.then(response => response.json())
		.then(data => {
		  // Obtener la referencia al contenedor de productos
		  const listaProductos = document.getElementById('lista_productos');
	
		  // Generar el código HTML para cada producto
		  data.forEach(producto => {
			const html = `
			  <div class="col-lg-4 col-md-6">
				<div class="single-product">
				  <img class="img-fluid" src="${producto.image}" alt="">
				  <div class="product-details">
					<h6>${producto.name}</h6>
					<div class="price">
					  <h6>${producto.price}</h6>
					  <h6 class="l-through">${producto.oldPrice}</h6>
					</div>
					<div class="prd-bottom">
					  <a href="" class="social-info">
						<span class="ti-bag"></span>
						<p class="hover-text">add to bag</p>
					  </a>
					  <a href="" class="social-info">
						<span class="lnr lnr-heart"></span>
						<p class="hover-text">Wishlist</p>
					  </a>
					  <a href="" class="social-info">
						<span class="lnr lnr-sync"></span>
						<p class="hover-text">compare</p>
					  </a>
					  <a href="" class="social-info">
						<span class="lnr lnr-move"></span>
						<p class="hover-text">view more</p>
					  </a>
					</div>
				  </div>
				</div>
			  </div>
			`;
	
			// Agregar el producto al contenedor
			listaProductos.innerHTML += html;
		  });
		})
		.catch(error => {
		  console.error('Error:', error);
		});
	</script>
<script>
	// Obtener las categorías mediante AJAX
	fetch('http://digitaltei.test/api/categorias')
	  .then(response => response.json())
	  .then(data => {
		const categorias = document.getElementById('categorias');
  
		// Generar el código HTML para cada categoría
		data.forEach(categoria => {
			var categoriaRoute = "{{ route('products.by.category', ':id') }}";
			const categoriaHtml =
    '<li class="main-nav-list">' +
    '  <a  href="' + categoriaRoute.replace(':id', categoria.id) + '" >' +
    '    <span class="lnr lnr-arrow-right"></span>' + categoria.name +
    '  </a>' +
    '  <ul class="collapse" id="' + categoria.id + '" data-toggle="collapse" aria-expanded="false" aria-controls="' + categoria.id + '">' +
    '  </ul>' +
    '</li>';
  


  
		  categorias.innerHTML += categoriaHtml;
  
		  // Obtener las subcategorías mediante AJAX
		  fetch(`http://digitaltei.test/api/subcategories/${categoria.id}`)
			.then(response => response.json())
			.then(subcategorias => {
			  const subcategoriasList = document.getElementById(categoria.id);
  
			  // Generar el código HTML para cada subcategoría
			  subcategorias.forEach(subcategoria => {
				const subcategoriaHtml = `
				  <li class="main-nav-list child">
					<a href="#">${subcategoria.name}<span class="number">(${subcategoria.name})</span></a>
				  </li>
				`;
  
				subcategoriasList.innerHTML += subcategoriaHtml;
			  });
			})
			.catch(error => {
			  console.error('Error:', error);
			});
		});
	  })
	  .catch(error => {
		console.error('Error:', error);
	  });
  </script>
	<!-- End related-product Area -->

	<!-- start footer Area -->
    @endsection