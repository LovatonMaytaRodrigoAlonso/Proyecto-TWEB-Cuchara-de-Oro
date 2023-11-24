<?php include_once '../PHP/Header.php'; ?>

        <main class="main-content">

            <div class="carruselg">
                <a href="../HTML/Promociones.php">
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

                document.getElementById("ver-mas-tradicional").addEventListener("click", function () {
                    window.location.href = "../HTML/index.php#titulo-menu"; // Reemplaza con la ruta correcta
                });

                document.getElementById("ver-mas-marino").addEventListener("click", function () {
                    window.location.href = "../HTML/index.php#titulo-marino"; // Reemplaza con la ruta correcta
                });

                document.getElementById("ver-mas-parrillas").addEventListener("click", function () {
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
                                document.getElementById("enlaceLeerMas1").addEventListener("click", function () {
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
                                document.getElementById("enlaceLeerMas2").addEventListener("click", function () {
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
                                document.getElementById("enlaceLeerMas3").addEventListener("click", function () {
                                    window.location.href = "https://www.recetasgratis.net/receta-de-ceviche-peruano-18147.html"; // Reemplaza "URL_DE_TU_ENLACE" con la URL que deseas abrir al hacer clic
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php include_once '../PHP/Footer.php'; ?>

        <script
            src="https://kit.fontawesome.com/81581fb069.js"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
