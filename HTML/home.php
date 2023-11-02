<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
		<title>Home | Cuchara de Oro</title>
		<link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
		<link rel="stylesheet" href="../CSS/home.css" />
		<link rel="stylesheet" href="../CSS/header.css" />
		<link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">		
		<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
		<script src="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" crossorigin="anonymous"></script>
		<script>
			// Espera a que el documento esté completamente cargado
			document.addEventListener("DOMContentLoaded", function() {
				// Obtiene el elemento con la clase "fa-solid fa-user"
				var iconoUsuario = document.querySelector(".fa-solid.fa-user");
	
				// Agrega un evento de clic al icono
				iconoUsuario.addEventListener("click", function() {
					// Redirige a acceso.html cuando se hace clic en el icono
					window.location.href = "acceso.php";
				});
			});
		</script>	
		  <script src="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" crossorigin="anonymous"></script>
		  <script src="../JS/header.js">
			  // Espera a que el documento esté completamente cargado
			  document.addEventListener('DOMContentLoaded', function() {
				  // Obtén el elemento con la clase "fa-solid fa-basket-shopping"
				  const btnCartIcon = document.querySelector('.fa-solid.fa-basket-shopping');
	  
				  // Agrega un evento de clic al icono del carrito de compras
				  btnCartIcon.addEventListener('click', function() {
					  // Aquí puedes ejecutar el código que desees cuando se haga clic en el icono
					  // Por ejemplo, puedes llamar a una función para abrir el carrito de compras
					  // o redirigir a otra página relacionada con el carrito de compras.
					  // Ejemplo:
					  // abrirCarritoDeCompras();
					  // O redirigir a la página de compras:
					  // window.location.href = "compras.html";
				  });
			  });
		  </script>	
	</head>
	<body>
		<header>
			<div class="container-hero">
				<div class="container hero">
					<div class="customer-support">
						<i class="fa-solid fa-headset"></i>
						<div class="content-customer-support">
							<span class="text">Soporte al cliente</span>
							<span class="number">992-215-265</span>
						</div>
					</div>

					<div class="container-logo">
						<img src="../Imagenes/Cuchara de Oro.jpg" class="avatar" alt="Avatar Image">
						<h1 class="logo"><a href="../HTML/home.php">Cuchara de Oro</a></h1>
					</div>
					
					<!-- <label class="switch">
						<span class="sun"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
								<g fill="#ffd43b">
									<circle r="5" cy="12" cx="12"></circle>
									<path
										d="m21 13h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm-17 0h-1a1 1 0 0 1 0-2h1a1 1 0 0 1 0 2zm13.66-5.66a1 
								1 0 0 1 -.66-.29 1 1 0 0 1 0-1.41l.71-.71a1 1 0 1 1 1.41 1.41l-.71.71a1 1 0 0 1 -.75.29zm-12.02 12.02a1 1 0 0 1 -.71-.29 1 1 0 0 1 0-1.41l.71-.66a1 1 0 0 1 1.41 1.41l-.71.71a1 1 0 0 1 -.7.24zm6.36-14.36a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm0 17a1 1 0 0 1 -1-1v-1a1 1 0 0 1 2 0v1a1 1 0 0 1 -1 1zm-5.66-14.66a1 1 0 0 1 -.7-.29l-.71-.71a1 1 0 0 1 1.41-1.41l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.29zm12.02 12.02a1 1 0 0 1 -.7-.29l-.66-.71a1 1 0 0 1 1.36-1.36l.71.71a1 1 0 0 1 0 1.41 1 1 0 0 1 -.71.24z">
									</path>
								</g>
							</svg></span>
						<span class="moon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
								<path
									d="m223.5 32c-123.5 0-223.5 100.3-223.5 224s100 224 223.5 224c60.6 0 115.5-24.2 155.8-63.4 5-4.9 6.3-12.5 3.1-18.7s-10.1-9.7-17-8.5c-9.8 1.7-19.8 2.6-30.1 2.6-96.9 0-175.5-78.8-175.5-176 0-65.8 36-123.1 89.3-153.3 6.1-3.5 9.2-10.5 7.7-17.3s-7.3-11.9-14.3-12.5c-6.3-.5-12.6-.8-19-.8z">
								</path>
							</svg></span>
						<input type="checkbox" class="input">
						<span class="slider"></span>
					</label> -->
		

					<div class="container-icon">
						<div class="container-cart-icon">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="icon-cart">
								<div class="container-user">
									<i class="fa-solid fa-user"></i>
									<i class="fa-solid fa-basket-shopping"></i>
								   
								</div>
							</svg>
		
		
							<!--inicializa su conteo de la bolsa en cero-->
							<div class="count-products">
								<span id="contador-productos">0</span>
							</div>
						</div>
		
						<div class="container-cart-products hidden-cart">
							<div class="row-product hidden">
								<div class="cart-product">
									<div class="info-cart-product">
										<span class="cantidad-producto-carrito">1</span>
										<p class="titulo-producto-carrito">Aji de gallina</p>
										<span class="precio-producto-carrito">$10</span>
									</div>
									<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
										stroke="currentColor" class="icon-close">
										<path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
									</svg>
								</div>
							</div>
		
							<div class="cart-total hidden">
								<h3>Total:</h3>
								<span class="total-pagar">$200</span>
							</div>
							<p class="cart-empty">El carrito está vacío</p>
						</div>
					</div>
				</div>
			</div>

			<div class="container-navbar">
				<nav class="navbar container">
					<i class="fa-solid fa-bars"></i>
					<ul class="menu">
						<li><a href="../HTML/home.php">Inicio</a></li>
						<li><a href="../HTML#titulo-menu">Platos</a></li>
						<li><a href="../HTML#titulo-bebidas">Bebidas</a></li>
						<li><a href="../HTML/Promociones.php">Promociones</a></li>
						<li><a href="../HTML/Nosotros.php">Nosotros</a></li>
						<li><a href="#">Más</a></li>
					</ul>

					<form class="search-form">
						<input type="search" placeholder="Buscar..." />
						<button class="btn-search">
							<i class="fa-solid fa-magnifying-glass"></i>
						</button>
					</form>
				</nav>
			</div>
		</header>
<!--
		<section class="banner">
			<div class="content-banner">
				<p>Café Delicioso</p>
				<h2>100% Natural <br />Café Fresco</h2>
				<a href="#">Comprar ahora</a>
			</div>
		</section> -->

		

		<main class="main-content">

			<div class="carruselg">
				<a href="/HTML/Promociones.html">
				<div class="carrusel carrusel-1">
					<img src="../Imagenes/Banner/1.png"
						alt="">
				</div>
		
				<div class="carrusel carrusel-2">
					<img src="../Imagenes/Banner/2.png"
						alt="">
				</div>
		
				<div class="carrusel carrusel-3">
					<img src="../Imagenes/Banner/3.png"
						alt="">
				</div>
				</a>
			</div>

			<section class="container container-features">
				<div class="card-feature">
					<i class="fa-solid fa-plane-up"></i>
					<div class="feature-content">
						<span>Envío gratuito a nivel nacional</span>
						<p>En pedidos superiores a S/. 100</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-wallet"></i>
					<div class="feature-content">
						<span>Contrareembolso</span>
						<p>100% garantía de devolución de dinero</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-gift"></i>
					<div class="feature-content">
						<span>Códigos de descuento</span>
						<p>Ofrece bonos especiales con regalo</p>
					</div>
				</div>
				<div class="card-feature">
					<i class="fa-solid fa-headset"></i>
					<div class="feature-content">
						<span>Servicio al cliente 24/7</span>
						<p>LLámenos 24/7 al 992-215-265</p>
					</div>
				</div>
			</section>

			<section class="container top-categories">
				<h1 class="heading-1">Mejores Categorías</h1>
				<div class="container-categories">
					<div class="card-category category-tradicional">
						<p>Menú tradicional</p>
						<span id="ver-mas-tradicional";">Ver más</span>

					</div>
					<div class="card-category category-marino">
						<p>Menú marino</p>
						<span id="ver-mas-marino";">Ver más</span>
					</div>
					<div class="card-category category-parrillas">
						<p>Parrillas</p>
						<span id="ver-mas-parrillas";">Ver más</span>
				</div>
			</section>
			<script>
				
				document.getElementById("ver-mas-tradicional").addEventListener("click", function() {
					window.location.href = "../HTML/index.php#titulo-menu"; // Reemplaza con la ruta correcta
				});			
			
				document.getElementById("ver-mas-marino").addEventListener("click", function() {
					window.location.href = "../HTML/index.php#titulo-marino"; // Reemplaza con la ruta correcta
				});
			
				document.getElementById("ver-mas-parrillas").addEventListener("click", function() {
					window.location.href = "../HTML/index.php#titulo-parrillas"; // Reemplaza con la ruta correcta
				});
			</script>
			

			<section class="container top-products">
				<h1 class="heading-1">Lo mejor de la carta</h1>

				<div class="container-options">
					<span class="active">Destacados</span>
					<span>Más recientes</span>
					<span>Mejores Vendidos</span>
				</div>

				<div class="container-products">
					<!-- Producto 1 -->
					<div class="card-product">
						<div class="container-img">
							<img src="../Imagenes/Comida/lomo saltado.jpg" alt="Lomo saltado" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Lomo saltado</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$18 <span>$20</span></p>
						</div>
					</div>
					<!-- Producto 2 -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="../Imagenes/Mariscos/Arroz-chaufa-de-mariscos.jpg"
								alt="arros chauda de mariscos"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Arroz chaufa de mariscos</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$15 <span>$18</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img
								src="../Imagenes/Parrillas/Parrilla para 2.jpg"
								alt="parrilla para 2"
							/>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Parrilla para 2 personas</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$46.50<span>$50</span></p>
						</div>
					</div>
					<!--  -->
					<div class="card-product">
						<div class="container-img">
							<img src="../Imagenes/Platos y Bebidas/jarra-de-chicha.jpg" alt="chicha morada" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Chicha morada</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$8.50<span>$9</span></p>
						</div>
					</div>
				</div>
			</section>

			<section class="gallery">
				<img
					src="../Imagenes/Mariscos/Brochetas de langostino y concha.jpg"
					alt="Gallery Img1"
					class="gallery-img-1"
				/><img
					src="../Imagenes/Comida/Seco-de-carne.jpg"
					alt="Gallery Img2"
					class="gallery-img-2"
				/><img
					src="../Imagenes/Mariscos/ceviche-de-pescado.jpg"
					alt="Gallery Img3"
					class="gallery-img-3"
				/><img
					src="../Imagenes/Platos y Bebidas/Receta-de-Causa-Rellena-Limena.jpg"
					alt="Gallery Img4"
					class="gallery-img-4"
				/><img
					src="../Imagenes/Parrillas/Costilla BBQ.jpg"
					alt="Gallery Img5"
					class="gallery-img-5"
				/>
			</section>
<!--
			<section class="container specials">
				<h1 class="heading-1">Especiales</h1>

				<div class="container-products">
				
					<div class="card-product">
						<div class="container-img">
							<img src="/img/cafe-irish.jpg" alt="Cafe Irish" />
							<span class="discount">-13%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Irish</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$4.60 <span>$5.30</span></p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img
								src="/img/cafe-ingles.jpg"
								alt="Cafe incafe-ingles.jpg"
							/>
							<span class="discount">-22%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Inglés</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.70 <span>$7.30</span></p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img src="/img/cafe-viena.jpg" alt="Cafe Viena" />
							<span class="discount">-30%</span>
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
							</div>
							<h3>Cafe Viena</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$3.85 <span>$5.50</span></p>
						</div>
					</div>
					
					<div class="card-product">
						<div class="container-img">
							<img src="/img/cafe-liqueurs.jpg" alt="Cafe Liqueurs" />
							<div class="button-group">
								<span>
									<i class="fa-regular fa-eye"></i>
								</span>
								<span>
									<i class="fa-regular fa-heart"></i>
								</span>
								<span>
									<i class="fa-solid fa-code-compare"></i>
								</span>
							</div>
						</div>
						<div class="content-card-product">
							<div class="stars">
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-solid fa-star"></i>
								<i class="fa-regular fa-star"></i>
							</div>
							<h3>Cafe Liqueurs</h3>
							<span class="add-cart">
								<i class="fa-solid fa-basket-shopping"></i>
							</span>
							<p class="price">$5.60</p>
						</div>
					</div>
				</div>
			</section>
		-->

			<section class="container blogs">
				<h1 class="heading-1">Últimos Blogs</h1>

				<div class="container-blogs">
					<div class="card-blog">
						<div class="container-img">
							<img src="../Imagenes/Comida/tallarin verde.png" alt="Imagen Blog 1" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Sobre los tallarines verdes</h3>
							<span>29 de Setiembre 2023</span>
							<p>
								Los tallarines verdes son un plato tradicional de la cocina peruana. Esta receta tiene influencias de la cocina italiana y es un claro ejemplo de la fusión de sabores que caracteriza a la gastronomía peruana. Los tallarines verdes consisten en fideos largos (tallarines) cubiertos con una deliciosa salsa de ají verde, espinacas, queso fresco, y otras hierbas aromáticas. La salsa de ají verde le da al plato su característico color y un toque picante. A menudo, se sirve acompañado de bistec a la parrilla, pollo a la parrilla o alguna otra proteína.
							</p>
							<div class="btn-read-more" id="enlaceLeerMas1">Leer más</div>
							<script>
								document.getElementById("enlaceLeerMas1").addEventListener("click", function() {
								window.location.href = "https://www.diariamenteali.com/receta/tallarines_verdes"; // Reemplaza "URL_DE_TU_ENLACE" con la URL que deseas abrir al hacer clic
								});
								</script>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="../Imagenes/Comida/Arroz-con-pollo-peruano.jpg" alt="Imagen Blog 2" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Sobre el arroz con pollo</h3>
							<span>05 Agosto 2023</span>
							<p>
								El arroz con pollo es otro plato emblemático de la cocina peruana. Se prepara cocinando pollo en una mezcla de especias y hierbas aromáticas, que incluyen ajo, cúrcuma y comino, y luego se mezcla con arroz y verduras. Este plato es conocido por su sabor reconfortante y su riqueza en sabores. Cada región de Perú tiene su propia versión del arroz con pollo, por lo que las variaciones en la receta son comunes. Algunas recetas también incluyen ingredientes como aceitunas, huevos duros y cilantro, que añaden capas adicionales de sabor al plato.
							</p>
							<div class="btn-read-more" id="enlaceLeerMas2">Leer más</div>
							<script>
							document.getElementById("enlaceLeerMas2").addEventListener("click", function() {
						    window.location.href = "https://www.recetasnestle.com.pe/recetas/arroz-con-pollo"; // Reemplaza "URL_DE_TU_ENLACE" con la URL que deseas abrir al hacer clic
							});
							</script>
						</div>
					</div>
					<div class="card-blog">
						<div class="container-img">
							<img src="../Imagenes/Mariscos/ceviche-de-pescado.jpg" alt="Imagen Blog 3" />
							<div class="button-group-blog">
								<span>
									<i class="fa-solid fa-magnifying-glass"></i>
								</span>
								<span>
									<i class="fa-solid fa-link"></i>
								</span>
							</div>
						</div>
						<div class="content-blog">
							<h3>Sobre el ceviche</h3>
							<span>02 Octubre 2023</span>
							<p>
								El ceviche es uno de los platos más famosos de la gastronomía peruana y es considerado el plato nacional de Perú. Se trata de pescado o mariscos frescos marinados en jugo de limón o lima, junto con cebolla roja, ají (chile), cilantro y otros condimentos. La acidez del jugo de cítricos "cocina" los mariscos, dándoles una textura firme y un sabor fresco y cítrico. El ceviche se sirve tradicionalmente con maíz mote (maíz hominy) y camote (batata), y a menudo se acompaña con cancha (maíz tostado) y rodajas de rocoto (un tipo de chile peruano).
							</p>
							<div class="btn-read-more" id="enlaceLeerMas3" >Leer más</div>
							<script>
								document.getElementById("enlaceLeerMas3").addEventListener("click", function() {
								window.location.href = "https://www.recetasgratis.net/receta-de-ceviche-peruano-18147.html"; // Reemplaza "URL_DE_TU_ENLACE" con la URL que deseas abrir al hacer clic
								});
								</script>
						</div>
					</div>
				</div>
			</section>
		</main>

		<footer class="footer">
			<div class="container container-footer">
				<div class="menu-footer">
					<div class="contact-info">
						<p class="title-footer">Información de Contacto</p>
						<ul>
							<li>
								Dirección: Av. San Felipe Mz. B, Comas 15311
							</li>
							<li>Teléfono: +51 992-215-265</li>							
							<li>EmaiL: cucharadeoro@gmail.com</li>
						</ul>
						<div class="social-icons">
							<span class="facebook">
								<i class="fa-brands fa-facebook-f"></i>
							</span>
							<span class="twitter">
								<i class="fa-brands fa-twitter"></i>
							</span>
							<span class="youtube">
								<i class="fa-brands fa-youtube"></i>
							</span>
							<!--
							<span class="pinterest">
								<i class="fa-brands fa-pinterest-p"></i>
							</span>-->
							<span class="instagram">
								<i class="fa-brands fa-instagram"></i>
							</span>
						</div>
					</div>

					<div class="information">
						<p class="title-footer">Información</p>
						<ul>
							<li><a href="../HTML/Nosotros.php">Acerca de Nosotros</a></li>
							<li><a href="#">Información Delivery</a></li>
							<li><a href="#">Politicas de Privacidad</a></li>
							<li><a href="https://maps.app.goo.gl/Q58jMbSvKZbAMqWg8">Contactános</a></li>
							<li><a href="../HTML/Reclamaciones.php">Reclamaciones</a></li>
						</ul>
					</div>

					<div class="my-account">
						<p class="title-footer">Mi cuenta</p>

						<ul>
							<li><a href="../HTML/acceso.php">Mi cuenta</a></li>
							<li><a href="#">Historial de órdenes</a></li>							
							<li><a href="#">Boletín</a></li>
							<li><a href="#">Reembolsos</a></li>
						</ul>
					</div>

					<div class="newsletter">
						<p class="title-footer">Boletín informativo</p>

						<div class="content">
							<p>
								Suscríbete a nuestros boletines ahora y mantente al
								día con nuevas colecciones y ofertas exclusivas que tenemos para ti.
							</p>
							<input type="email" placeholder="Ingresa el correo aquí...">
							<button>Suscríbete</button>
						</div>
					</div>
				</div>

				<div class="copyright">
					<p>
						Cuchara de Oro &copy; 2023
					</p>

					<img src="../img/payment.png" alt="Pagos">
				</div>
			</div>
		</footer>

		<script
			src="https://kit.fontawesome.com/81581fb069.js"
			crossorigin="anonymous"
		></script>
	</body>
</html>
