
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/index.css" />
    <link rel="stylesheet" href="../CSS/header.css" />
    <link rel="stylesheet" href="../CSS/footer.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <script src="../JS/indexjs.js"></script>
    <script src="../JS/header.js"></script>
    <?php require 'Conexion&Consulta.php'; ?>
    <link rel="stylesheet" href="../CSS/home.css" />
    <title>Home | Cuchara de Oro</title>
</head>

<body>

    <header>
        <div id="BarraPrincipal">
            <img src="../Imagenes/Cuchara de Oro.jpg" class="avatar" alt="Avatar Image">
            <a href="../HTML/home.php">
                <h1>Cuchara de Oro</h1>
            </a>
            <div>

                <ul>
                    <li><a href="../HTML/acceso.php">Acceder a tu cuenta</a></li>
                </ul>
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
            </label>  -->

            <!--se contendra el icono de bolsa-->
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
                        <button class="Btn">
                            <li><a href="../HTML/pago.php">Pagar</a></li>
                            <svg class="svgIcon" viewBox="0 0 576 512">
                                <path
                                    d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z">
                                </path>
                            </svg>
                        </button>
                       
                           
                        
                        <h3>Total:</h3>
                        <span class="total-pagar">$200</span>
                    </div>
                    <p class="cart-empty">El carrito está vacío</p>
                </div>
            </div>

        </div>

        <div class="container-navbar">
            <nav class="navbar container">
                <i class="fa-solid fa-bars" id="btn_menu"></i>
                <div id="back_menu"></div>
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

    <main>
        <!--carrucel de imagenes-->
        <div class="carruselg">
            <a href="../HTML/Promociones.php">
                <div class="carrusel carrusel-1">
                    <img src="../Imagenes/Banner/1.png" alt="">
                </div>

                <div class="carrusel carrusel-2">
                    <img src="../Imagenes/Banner/2.png" alt="">
                </div>

                <div class="carrusel carrusel-3">
                    <img src="../Imagenes/Banner/3.png" alt="">
                </div>
            </a>
        </div>


        <!--contenedor de las imagenes-->
        <center>
            <hr>
            <h1 id="titulo-menu">MENÚ DEL DÍA </h1>
            <hr>
        </center>
        <div class="container-menu">
            <!--AJI DE POLLO-->
            <div class="container-items">                           
                <div class="item">
                    <figure>
                        <img src="https://www.recetas-argentinas.com/base/stock/Recipe/61-image/61-image_web.jpg"
                            alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre0; ?></h2>
                        <p class="price">$<?php echo $precio0; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--LOMO SALTADO-->
                <div class="item">                
                    <figure>
                        <img src="https://buenazo.cronosmedia.glr.pe/original/2022/06/20/62aea00d119a8801813a563b.jpg"
                            alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre1; ?></h2>
                        <p class="price">$<?php echo $precio1; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--ARROZ CON POLLO-->
                <div class="item">
                    <figure>
                        <img src="https://i.ytimg.com/vi/H6lgxgEWIs8/maxresdefault.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre2; ?></h2>
                        <p class="price">$<?php echo $precio2; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--SECO DE CARNE-->
                <div class="item">
                    <figure>
                        <img src="https://comidasperuanas.net/wp-content/uploads/2020/11/Seco-de-carne.jpg"
                            alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre3; ?></h2>
                        <p class="price">$<?php echo $precio3; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--TALLARINES VERDES-->
                <div class="item">
                    <figure>
                        <img src="https://cloudfront-us-east-1.images.arcpublishing.com/infobae/RIRWWA3V2JCMLI3DTMS375RPMU.png"
                            alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre4; ?></h2>
                        <p class="price">$<?php echo $precio4; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--ANTICUCHOS-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/Anticuchos-de-Corazón-Peruanos.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre5; ?></h2>
                        <p class="price">$<?php echo $precio5; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--PICANTE DE CARNE-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/Picante-de-carne.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre6; ?></h2>
                        <p class="price">$<?php echo $precio6; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--CAU CAU-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/cau-cau.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre7; ?></h2>
                        <p class="price">$<?php echo $precio7; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--CHANFAINITA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/Chanfainita.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre8; ?></h2>
                        <p class="price">$<?php echo $precio8; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <center>
                <hr>
                <h1 id="titulo-marino"> MENÚ MARINO </h1>
                <hr>
            </center>
            <div class="container-items">

            <!--ARROZ CHAUFA DE MARISCOS-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Mariscos/Arroz-chaufa-de-mariscos.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre9; ?></h2>
                        <p class="price">$<?php echo $precio9; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--BROCHETAS DE LANGOSTA Y CONCHA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Mariscos/Brochetas de langostino y concha.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre10; ?></h2>
                        <p class="price">$<?php echo $precio10; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--CEVICHE DE PESCADO-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Mariscos/ceviche-de-pescado.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre11; ?></h2>
                        <p class="price">$<?php echo $precio11; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--CHICHARRON DE PESCADO-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Mariscos/Chicharron de pescado.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre12; ?></h2>
                        <p class="price">$<?php echo $precio12; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--PAELA DE MARISCOS-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Mariscos/Paella de Mariscos.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                       <h2><?php echo $nombre13; ?></h2>
                        <p class="price">$<?php echo $precio13; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            <!--CHICHARRON DE POTA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Mariscos/Chicharron de pota.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre14; ?></h2>
                        <p class="price">$<?php echo $precio14; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <center>
                <hr>
                <h1 id="titulo-parrillas"> PARRILLAS </h1>
                <hr>
            </center>
            <div class="container-items">

             <!--CHULETA DE CARNE-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Parrillas/carnes-chuleta-300x300.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre15; ?></h2>
                        <p class="price">$<?php echo $precio15; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
             <!--PARRILLA ECONOMICA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Parrillas/Parrilla economica.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre16; ?></h2>
                        <p class="price">$<?php echo $precio16; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
             <!--COSTILLAS BBQ-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Parrillas/Costilla BBQ.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                       <h2><?php echo $nombre17; ?></h2>
                        <p class="price">$<?php echo $precio17; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
             <!--PARRILLA FAMILIAR-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Parrillas/parrilla familiar.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre18; ?></h2>
                        <p class="price">$<?php echo $precio18; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
             <!--PARRILLA CLASICA FAMILIAR-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Parrillas/parrilla-clasica-familiar.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre19; ?></h2>
                        <p class="price">$<?php echo $precio19; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
             <!--PARRILLA PARA 2-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Parrillas/Parrilla para 2.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre20; ?></h2>
                        <p class="price">$<?php echo $precio20; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>

            <center>
                <hr>
                <h1 id="titulo-bebidas"> BEBIDAS </h1>
                <hr>
            </center>
            <div class="container-items">

             <!--INCA KOLA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/inca-kola.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre21; ?></h2>
                        <p class="price">$<?php echo $precio21; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
              <!--CHICHA MORADA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/jarra-de-chicha.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                        <h2><?php echo $nombre22; ?></h2>
                        <p class="price">$<?php echo $precio22; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
              <!--MARACUYA-->
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Platos y Bebidas/jarra-de-maracuya.jpg" alt="producto" />
                    </figure>
                    <div class="info-product">
                          <h2><?php echo $nombre23; ?></h2>
                        <p class="price">$<?php echo $precio23; ?></p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <h5>Contactanos: </h5>
        <h5>WhatsApp: +51 906 153 801</h5>
        <a href="../HTML/Reclamaciones.php"><img src="../Imagenes/Iconos/libro de reclamaciones.png" height="100"></a>
        <h5>2023 © Todos los derechos reservados</h5>
    </footer>
</body>

</html>