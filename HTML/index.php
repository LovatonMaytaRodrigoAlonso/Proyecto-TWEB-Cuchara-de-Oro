<?php include_once '../PHP/Header.php'; ?>

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

    <?php include_once '../PHP/Footer.php'; ?>
    <script
            src="https://kit.fontawesome.com/81581fb069.js"
            crossorigin="anonymous"
        ></script>
</body>

</html>