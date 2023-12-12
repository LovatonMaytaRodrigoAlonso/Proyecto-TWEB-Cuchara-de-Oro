<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cuchara de Oro</title>
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/home.css" />
    <link rel="stylesheet" href="../CSS/index.css" />
    <link rel="stylesheet" href="../CSS/header.css" />
    <link rel="stylesheet" href="../CSS/nosotros.css">
    <link rel="stylesheet" href="../CSS/promociones.css">
    <link rel="stylesheet" href="../CSS/FAQ.css">
    <link rel="stylesheet" href="../CSS/verReclamaciones.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" crossorigin="anonymous"></script>

    <!--Iconos-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--Animaciones Libreria-->
    <link rel="stylesheet"href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

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
    <script src="../JS/header.js"></script>
    <script>
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
    <!--COMBOBOX PARA EL USUARIO-->
    <script>
        const userIcon = document.getElementById('user-icon');
        const userDropdown = document.getElementById('user-dropdown');

        userIcon.addEventListener('click', function() {
            userDropdown.classList.toggle('show');
        });

        // Cierra el menú desplegable si haces clic fuera de él
        window.addEventListener('click', function(event) {
            if (!userIcon.contains(event.target) && !userDropdown.contains(event.target)) {
                userDropdown.classList.remove('show');
            }
        });
    </script>
    <?php require 'Consultas.php'; ?>
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

                        <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="icon-cart"> -->
                        <div class="container-user" style="align-items: center;">
                            <?php
                            if (isset($_SESSION['name'])) {
                                // El usuario ha iniciado sesión, muestra su nombre
                                echo "<h2 style='margin: 0;'>Hola,<br> {$_SESSION['name']}</h2>";

                                if (isset($_SESSION['user_image'])) {
                                    $uploadedFile = $_SESSION['user_image'];
                                } else {
                                    $uploadedFile = '';
                                }
                            ?>
                                <div style="position: relative; border-right: 2px solid #ffc64b; padding-right: 20px; padding-left: 10px">
                                    <img src="<?php echo $_SESSION['user_image']; ?>" style="border-radius: 50%;" width="60" id="user-image">
                                    <br>

                                    <ul id="user-options" style="display: none;">
                                        <li><a href="#"><i class="fa-solid fa-house-user" style="padding: 5px"></i>    Mi Cuenta</a></li>
                                        <li><a href="#"><i class="fa-solid fa-wallet" style="padding: 5px"></i>    Billetera</a></li>
                                        <li><a href="#"><i class="fa-solid fa-gear" style="padding: 5px"></i>    Configuración</a></li>
                                        <li><a href="../HTML/reclamaciones.php" style="display: flex; justify-content: space-between; align-items: center;"><i class="fa-solid fa-comment-dots" style="padding: 5px"></i><p style="padding-left: 5px;">    Enviar Comentarios</p></a></li>
                                        <li><a href="../PHP/LogOut.php"><i class="fa-solid fa-arrow-right-from-bracket" style="padding: 5px"></i>    Cerrar sesión</a></li>
                                    </ul>
                                </div>

                            <?php

                                // Aquí puedes mostrar otros contenidos específicos para usuarios autenticados
                                // Mostrar el menú desplegable si el usuario ha iniciado sesión
                                // echo '<select id="user-option" style="display: none;">';
                                // echo '<option value="my-account">Mi Cuenta</option>';
                                // echo '<option value="my-account">Billetera</option>';
                                // echo '<option value="support">Soporte</option>';
                                // echo '<option value="profile-settings">Configuración del perfil</option>';
                                // echo '<option value="send-comments">Enviar Comentarios</option>';
                                // echo '</select>';
                            } else {
                                // El usuario es un invitado
                                echo "<h2 style='margin: 0;'>Bienvenido,<br> invitado</h2>";
                                echo '<i class="fa-solid fa-user"></i>';
                            }
                            ?>
                            <div class="btn-cart-icon">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </div>
                            

                        </div>
                        <!-- </svg> -->

                        <!--inicializa su conteo de la bolsa en cero-->
                        <div class="count-products">
                            <span id="contador-productos">0</span>
                        </div>
                    </div>

                    <div class="container-cart-products hidden-cart"> <!------PONERLE LA R AQUÍIIII NO TE OLVIDES------>

                        <div class="row-product hidden">
                            <div class="cart-product">
                                <div class="info-cart-product">
                                    <span class="cantidad-producto-carrito">1</span>
                                    <p class="titulo-producto-carrito">Aji de gallina</p>
                                    <span class="precio-producto-carrito">$10</span>
                                </div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="icon-close">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </div>
                        </div>

                        <div class="cart-total hidden">
                            <button class="btn">
                                <li><a href="../HTML/pago.php">PAGAR</a></li>

                            </button>
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
                    <?php
                    if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) {
                        echo '<li><a href="../HTML/verReclamaciones.php">Ver Reclamaciones</a></li>';
                        echo '<script>console.log("El usuario es un administrador")</script>';
                    }
                    ?>
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

        <script>
            document.getElementById('user-image').addEventListener('click', function() {
                var userOptions = document.getElementById('user-options');
                if (userOptions.style.display === 'none') {
                    userOptions.style.display = 'block';
                } else {
                    userOptions.style.display = 'none';
                }
            });
        </script>

    </header>
    <!--
                        <section class="banner">
                                <div class="content-banner">
                                        <p>Café Delicioso</p>
                                        <h2>100% Natural <br />Café Fresco</h2>
                                        <a href="#">Comprar ahora</a>
                                </div>
                        </section> -->