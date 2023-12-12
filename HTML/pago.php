<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra | Cuchara de Oro</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/pago.css">
</head>

<body>
    <header>
        <h1>Carrito de compras</h1>
        <h2>Cuchara de Oro</h2>
    </header>
        <main id="mainContainer"> </main>

        <main>
          <div id="datos">  
            <h2>Datos Personales</h2>

            <form method="post" action="../PHP/ProcesoPedidos.php">
                
                <label for="direccion">Dirección:</label>
                <input type="text" id="direccion" name="direccion" required>

                <label for="fono">Número de teléfono:</label>
                <input type="text" id="fono" name="fono" required>

                <h2>Método de Pago</h2>
                  <div id="metodoPagoContainer">
                  <input type="radio" id="yape" name="metodoPago" value="yape" required>
                  <label for="yape">Yape</label>

                 <input type="radio" id="tarjeta" name="metodoPago" value="tarjeta" required>
                   <label for="tarjeta">Tarjeta de Crédito</label>
                   </div>

               <input type="hidden" name="accion" value="add">
                <center>
                  <button class="btn_terminar" type="button" onclick="procesarPago()">Procesar pago</button>
                </center>
            </form>
           </div>

            <!-- <center>
                button type="submit" value="PagarPedido">Pagar</button>
            </center> -->
        </main>
    <script>
        function procesarPago() {
            var metodoPago = document.querySelector('input[name="metodoPago"]:checked').value;

            if (metodoPago === "yape") {
                window.location.href = "../HTML/yape.php";
            } else if (metodoPago === "tarjeta") {
                window.location.href = "../HTML/tarjeta.php";
            } else {
                alert("Selecciona un método de pago");
            }
        }
    </script>
    <script src="../JS/pagocarrito.js"></script>
</body>

</html>
