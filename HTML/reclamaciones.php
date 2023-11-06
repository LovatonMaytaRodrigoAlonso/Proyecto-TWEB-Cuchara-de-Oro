<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Libro de Reclamaciones | Cuchara de Oro</title> 
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/reclamaciones.css">
    <link rel="stylesheet" href="../CSS/footer1.css"> 
    <link rel="stylesheet" href="../CSS/home.css">

</head>
<body>
    <header>
        <h1>Libro de Reclamaciones</h1>
        <h2>Cuchara de Oro</h2>
    </header>
    
    <main>
        <form method="post" action="../PHP/ProcesoReclamaciones.php" enctype="multipart/form-data">
            <section>
                <h3>1. Información del Cliente</h3>
                <div>
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required placeholder="Nombre">
                </div>
                <div>
                    <label for="apeP">Apellido Paterno:</label>
                    <input type="text" id="apeP" name="apeP" required placeholder="Apellido Paterno">
                </div>
                <div>
                    <label for="apeM">Apellido Materno:</label>
                    <input type="text" id="apeM" name="apeM" required placeholder="Apellido Materno">
                </div>
                <div>
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion" required placeholder="Dirección">
                </div>
                <div>
                    <label for="tipDoc">Tipo de Documento:</label>
                    <select id="tipDoc" name="tipDoc">
                        <option value="dni">DNI</option>
                        <option value="pasaporte">Pasaporte</option>
                        <option value="ce">CE</option>
                    </select>
                </div>
                <div>
                    <label for="doc">Número de Documento:</label>
                    <input type="text" id="doc" name="doc" required pattern="[0-9]+">
                </div>
                <div>
                    <label for="telefono">Teléfono:</label>
                    <input type="tel" id="telefono" name="telefono" required placeholder="Teléfono">
                </div>
                <div>
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" id="correo" name="correo" required placeholder="Correo Electrónico" >
                </div>
            </section>
            
            <section>
                <h3>2. Identificación del Bien Adquirido</h3>
                <div>
                    <label for="plato"><input type="radio" id="plato" name="bienes" value="PLATO"> Plato</label>
                </div>
                <div>
                    <label for="bebida"><input type="radio" id="bebida" name="bienes" value="BEBIDA"> Bebida</label>
                </div>
                <div>
                    <label for="promo"><input type="radio" id="promo" name="bienes" value="PROMOCION"> Promoción</label>
                </div>
                <div>
                    <label for="importe">Importe (S/.):</label>
                    <input type="text" id="importe" name="importe" required placeholder="Importe">
                </div>
                <div>
                    <label for="evidencia">Subir evidencia</label>
                    <input type="file" name="evidencia" id="evidencia" accept=".png, .jpg" onchange="mostrarImagen()"/>
                    <img id="ImagenSeleccionada" alt="Imagen seleccionada" height="400px"/>
                </div>
                <div>
                    <label for="comentario">Comentario:</label>
                    <textarea name="comentario" cols="50" rows="10"></textarea>
                </div>
            </section>

            <input type="hidden" name="accion" value="add">
            <button type="submit" value="EnviarReclamacion">Enviar</button>
        </form>
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
 <script>
        function mostrarImagen() {
            const input = document.getElementById('evidencia');
            const imagen = document.getElementById('ImagenSeleccionada');
        if (input.files && input.files[0]) {
            const archivo = input.files[0];
            const reader = new FileReader();

            reader.onload = function(e){
                imagen.src = e.target.result;
            };
            reader.readAsDataURL(archivo);
           
            } else{
                imagen.src='';
            }            
        }    
    </script>

</body>
</html>