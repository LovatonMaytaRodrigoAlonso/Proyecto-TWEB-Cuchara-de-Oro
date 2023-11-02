<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../CSS/header.css" />
        <link rel="stylesheet" href="../CSS/home.css">
        <link rel="stylesheet" href="../CSS/promociones.css">
        <link rel="stylesheet" href="../CSS/footer.css" />
        <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
        <script src="../JS/header.js"></script>
        <title>Promociones | Cuchara de Oro</title>
    </head>
    
    <body>
        <header>
            <div id="BarraPrincipal">
                <img src="../Imagenes/Cuchara de Oro.jpg" class="avatar" alt="Avatar Image">
                <a href="../HTML/index.php">
                    <h1>Cuchara de Oro</h1>
                </a>
                <div>
                    <ul>
                        <li><a href="../HTML/acceso.php">Acceder a tu cuenta</a></li>
                        <!--<li><a href="Registro.html">Registrarse</a></li>-->
                    </ul>
                </div>
    
                <!--se contendra el icono de bolsa-->
                <div class="container-icon">
                    <div class="container-cart-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="icon-cart">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M15.75 10.5V6a3.75 3.75 0 10-7.5 0v4.5m11.356-1.993l1.263 12c.07.665-.45 1.243-1.119 1.243H4.25a1.125 1.125 0 01-1.12-1.243l1.264-12A1.125 1.125 0 015.513 7.5h12.974c.576 0 1.059.435 1.119 1.007zM8.625 10.5a.375.375 0 11-.75 0 .375.375 0 01.75 0zm7.5 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z" />
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
    
            <nav class="nav">
                <ul>
                    <li><a href="../HTML/home.php">HOME</a></li>
                    <li><a href="../HTML/Promociones.php">PROMOCIONES</a></li>
                    <li><a href="../HTML/index.php">PLATOS</a></li>
                    <li><a href="../HTML/index.php">BEBIDAS</a></li>
                    <li><a href="../HTML/Nosotros.php">NOSOTROS</a></li>
                </ul>
            </nav>
        </header>
    
        <main>
            <h1>PROMOCIONES</h1>
            <div class="container-items">
    
                <div class="item">
                    <figure>
                        <img src="../Imagenes/Banner/1.png" alt="banner" />
                    </figure>
                    <div class="info-product">
                        <h2>Festival Criollo</h2>
                        <p class="price">$12</p>
                        <button class="btn-add-cart">Añadir al carrito</button>
                    </div>
                </div>
            
            <div class="item">
                <figure>
                    <img src="../Imagenes/Banner/2.png" alt="banner" />
                </figure>
                <div class="info-product">
                    <h2>Sabor de la Costa</h2>
                    <p class="price">$29.90</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
    
            <div class="item">
                <figure>
                    <img src="../Imagenes/Banner/3.png" alt="banner" />
                </figure>
                <div class="info-product">
                    <h2>Parrillada Criolla</h2>
                    <p class="price">$65.90</p>
                    <button class="btn-add-cart">Añadir al carrito</button>
                </div>
            </div>
    
        </div>
        </main>
    
        <footer>
            <div class="footer-datos">
                <h5>Contactanos: </h5>
                <h5>WhatsApp: +51 906 153 801</h5>
                <h5 id="copyright">2023 © Todos los derechos reservados</h5>
            </div>
            <div>
                <a href="../HTML/Reclamaciones.php"><img src="../Imagenes/Iconos/libro de reclamaciones.png" height="100"></a>
            </div>
        </footer>
    </body>
    
</body>
</html>