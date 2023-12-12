<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Pago en Proceso</title> 
        <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
        <link rel="stylesheet" href="../CSS/pagoTarjeta.css">

    </head>
    <body>
        <div class="contenedor">

            <!-- Tarjeta -->
            <section class="tarjeta" id="tarjeta">
                <div class="delantera">
                    <div class="logo-marca" id="logo-marca">
                        <img src="../Imagenes/Tarjeta/visa.png" class="chip" alt="">
                    </div>
                    <img src="../Imagenes/Tarjeta/chip-tarjeta.png" class="chip" alt="">
                    <div class="datos">
                        <div class="grupo" id="numero">
                            <p class="label">Número Tarjeta</p>
                            <p class="numero">#### #### #### ####</p>
                        </div>
                        <div class="flexbox">
                            <div class="grupo" id="nombre">
                                <p class="label">Nombre Tarjeta</p>
                                <p class="nombre"></p>
                            </div>

                            <div class="grupo" id="expiracion">
                                <p class="label">Expiracion</p>
                                <p class="expiracion"><span class="mes">MM</span> / <span class="year">AA</span></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="trasera">
                    <div class="barra-magnetica"></div>
                    <div class="datos">
                        <div class="grupo" id="firma">
                            <p class="label">Firma</p>
                            <div class="firma"><p></p></div>
                        </div>
                        <div class="grupo" id="cvv">
                            <p class="label">CVV</p>
                            <p class="cvv"></p>
                        </div>
                    </div>
                    <p class="leyenda">---------------------------------------------------------------------------------------------------------</p>

                </div>
            </section>

            <!-- Contenedor Formulario -->
            <div class="contenedor-btn">
                <button class="btn-abrir-formulario" id="btn-abrir-formulario">
                    <i class="fas fa-plus"></i>
                </button>
            </div>

            <!-- Formulario -->
            <form action="" id="formulario-tarjeta" class="formulario-tarjeta">
                <div class="grupo">
                    <label for="inputNumero">Número Tarjeta</label>
                    <input type="text" id="inputNumero" maxlength="19" autocomplete="off">
                </div>
                <div class="grupo">
                    <label for="inputNombre">Nombre</label>
                    <input type="text" id="inputNombre" maxlength="19" autocomplete="off">
                </div>
                <div class="flexbox">
                    <div class="grupo expira">
                        <label for="selectMes">Expiracion</label>
                        <div class="flexbox">
                            <div class="grupo-select">
                                <select name="mes" id="selectMes">
                                    <option disabled selected>Mes</option>
                                </select>
                                <i class="fas fa-angle-down"></i>
                            </div>
                            <div class="grupo-select">
                                <select name="year" id="selectYear">
                                    <option disabled selected>Año</option>
                                </select>
                                <i class="fas fa-angle-down"></i>
                            </div>
                        </div>
                    </div>

                    <div class="grupo cvv">
                        <label for="inputCVV">CVV</label>
                        <input type="text" id="inputCCV" maxlength="3">
                    </div>
                </div>

                <center>

                    <button class="btn_terminar" type="submit">
                        <li><a href="../HTML/exitoPedido.php">Pagar</a></li></button>
                </center>

            </form>
        </div>                    
        <script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
        <script src="../JS/pago.js"></script>                   
    </body>
</html>