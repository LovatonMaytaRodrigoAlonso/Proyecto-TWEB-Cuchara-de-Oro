<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHPWebPage.php to edit this template
-->
<html>
  <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
            />
        <title>Mi Cuenta | Cuchara de Oro</title>
        <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
        <link rel="stylesheet" href="../CSS/home.css" />
        <link rel="stylesheet" href="../CSS/header.css" />
        <link rel="stylesheet" href="../CSS/InfoUsuario.css"/>
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
            document.addEventListener("DOMContentLoaded", function () {
                // Obtiene el elemento con la clase "fa-solid fa-user"
                var iconoUsuario = document.querySelector(".fa-solid.fa-user");

                // Agrega un evento de clic al icono
                iconoUsuario.addEventListener("click", function () {
                    // Redirige a acceso.html cuando se hace clic en el icono
                    window.location.href = "acceso.php";
                });
            });
        </script>	
        <script src="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" crossorigin="anonymous"></script>
        <script src="../JS/header.js">
            // Espera a que el documento esté completamente cargado
            document.addEventListener('DOMContentLoaded', function () {
                // Obtén el elemento con la clase "fa-solid fa-basket-shopping"
                const btnCartIcon = document.querySelector('.fa-solid.fa-basket-shopping');

                // Agrega un evento de clic al icono del carrito de compras
                btnCartIcon.addEventListener('click', function () {
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
                                <?php
                                if (isset($_SESSION['name'])) {
                                    // El usuario ha iniciado sesión, muestra su nombre
                                    echo "<h2>Hola, {$_SESSION['name']}</h2>";
                                    echo '<a href="../PHP/LogOut.php">Cerrar sesión</a>';
                                    // Aquí puedes mostrar otros contenidos específicos para usuarios autenticados
                                } else {
                                    // El usuario es un invitado
                                    echo "<h2>Bienvenido, invitado</h2>";
                                    // Aquí puedes mostrar contenidos diferentes para usuarios invitados
                                }
                                ?>
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
        
        <section class="seccion-perfil-usuario">
        <div class="perfil-usuario-header">
            <div class="perfil-usuario-portada">
                <div class="perfil-usuario-avatar">
                    <img src="http://localhost/multimedia/relleno/img-c9.png" alt="img-avatar">
                    <button type="button" class="boton-avatar">
                        <i class="far fa-image"></i>
                    </button>
                </div>
                <button type="button" class="boton-portada">
                    <i class="far fa-image"></i> Cambiar fondo
                </button>
            </div>
        </div>
        <div class="perfil-usuario-body">
            <div class="perfil-usuario-bio">
                <?php
                if (isset($_SESSION['name'])) {
                echo "<h3>Bienvenido, {$_SESSION['name']}</h3>";
                
                }
                ?>
                <p class="texto">Información personal del usuario (opcional).</p>
            </div>
            <div class="perfil-usuario-footer">
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-signs"></i> E-mail:</li>
                    <li><i class="icono fas fa-phone-alt"></i> Teléfono:</li>
                   
                </ul>
                <ul class="lista-datos">
                    <li><i class="icono fas fa-map-marker-alt"></i> Ubicación:</li>
                    <li><i class="icono fas fa-calendar-alt"></i> Fecha nacimiento:</li>                    
                    <li><i class="icono fas fa-share-alt"></i> Redes sociales.</li>
                </ul>
            </div>
            <div class="redes-sociales">
                <a href="" class="boton-redes facebook fab fa-facebook-f"><i class="icon-facebook"></i></a>
                <a href="" class="boton-redes twitter fab fa-twitter"><i class="icon-twitter"></i></a>
                <a href="" class="boton-redes instagram fab fa-instagram"><i class="icon-instagram"></i></a>
            </div>
        </div>
    </section>
        
     
        
        
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
    </body>>
</html>
