<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/footer1.css" />
    <link rel="stylesheet" href="../CSS/nosotros.css">
    <link rel="stylesheet" href="../CSS/header1.css" />
    <link rel="stylesheet" href="../CSS/index.css">
    <link rel="stylesheet" href="../CSS/FAQ.css">
    <link rel="stylesheet" href="../CSS/home.css">
    <script src="../JS/header.js"></script>
    <title>Nosotros | Cuchara de Oro</title>
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

                <div class="container-user">
                    <i class="fa-solid fa-user"></i>
                    <i class="fa-solid fa-basket-shopping"></i>
                    <div class="content-shopping-cart">
                        <span class="text">Carrito</span>
                        <span class="number">(0)</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars"></i>
                <ul class="menu">
                    <li><a href="../HTML/home.php">Inicio</a></li>
                    <li><a href="../HTML/index.php">Platos</a></li>
                    <li><a href="../HTML/index.php">Bebidas</a></li>
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

    <main>
        <h1>¿Quienes somos?</h1>
        <div class="container-nosotros">
            
            <p class="parrafo-nosotros">
                Nuestro restaurante criollo “Cuchara de Oro” fue fundado hace 11 años,
                nuestro propósito además de ser una fuente de ingresos fue para rendir tributo a la cocina peruana.
                El restaurante con el tiempo se convirtió en un punto de referencia para los vecinos y sus conocidos
                gracias
                al boca a boca.
            </p>
            <img class="imagen-mediana" src="../Imagenes/Cuchara de Oro.jpg" alt="">
        </div>
        <h1>Ubicanos</h1>
        <div style="display: flex; justify-content: center;"> <br>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15616.394691747344!2d-77.0450454!3d-11.8982172!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105d16d5b8ffcef%3A0x378965e80406be8e!2sCuchara%20de%20Oro!5e0!3m2!1ses-419!2spe!4v1696745411795!5m2!1ses-419!2spe"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Preguntas frecuentes -->
		<section id="preguntas-frecuentes">
			<h2>Preguntas Frecuentes</h2>
			<div class="container">
				<div class="pregunta">
				   <div class="pregunta_encabezado">
					 <h3>¿Dónde se encuentran?</h3>
				   </div>
				   <div class="respuesta">
					 Nos encontramos en Av. San Felipe Mz. B, Comas 15311.
				  </div>  
				</div> 
		
				<div class="pregunta">
					<div class="pregunta_encabezado">
					  <h3>¿Cuál es la especialidad de su restaurante?</h3>
					</div>
					<div class="respuesta">
						Nos dedicamos a ofrecer comida criolla
				   </div>  
				 </div> 
		
				 <div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Cuáles son sus horarios de atención?</h3>
					</div>
					<div class="respuesta">
					Nuestro horario de atención es de 7 am a 11 pm.
				   </div>  
				 </div> 
		 
				 <div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Ofrecen opciones de comida a domicilio?</h3>
					</div>
					<div class="respuesta">
						Sí, damos la opción de envío a domicilio con un cargo adicional.
				   </div>  
				 </div> 
		
		 
				 <div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Qué formas de pago aceptan?</h3>
					</div>
					<div class="respuesta">
						Aceptamos tarjetas de crédito, Yape y Plin.
				   </div>  
				 </div> 
		
		 
				 <div class="pregunta">
					<div class="pregunta_encabezado">
						<h3>¿Cuánto cuesta el envío?</h3>
					</div>
					<div class="respuesta">
						El envío a domicilio tiene un mínimo de 5 soles.
				   </div>  
				 </div> 
			</div> 
		
		
				 <script>
					const preguntas = document.querySelectorAll(".pregunta_encabezado");
		
				   preguntas.forEach((pregunta) => {
				   pregunta.addEventListener("click", () => {
				   removerClaseActivo();
				   pregunta.nextElementSibling.classList.add("activo");
				   });
				 });
		
				  function removerClaseActivo() {
				  preguntas.forEach((pregunta) => {
				  pregunta.nextElementSibling.classList.remove("activo");
				  });
				 }
				</script>
				
		</section>
        <hr>
        <h1>Mira más de nosotros</h1>
        <div style="display: flex; justify-content: center;"> <br>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/kw-Cf20UyCc?si=vxAaAL2h_72c46tx"
                title="YouTube video player" frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                allowfullscreen></iframe>
        </div>
    </main>
<!--
    <footer>
        <div class="footer-datos">
            <h5>Contactanos: </h5>
            <h5>WhatsApp: +51 906 153 801</h5>
            <h5 id="copyright">2023 © Todos los derechos reservados</h5>
        </div>
        <div>
            <a href="/HTML/Reclamaciones.html"><img src="/Imagenes/Iconos/libro de reclamaciones.png" height="100"></a>
        </div>       
        
    </footer>
-->
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
                    <li><a href="../HTML/Reclamaciones.php">Reclamaciones</a></li>
                    <li><a href="https://maps.app.goo.gl/Q58jMbSvKZbAMqWg8">Contactános</a></li>
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
                        día con nuevas colecciones y ofertas exclusivas.
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