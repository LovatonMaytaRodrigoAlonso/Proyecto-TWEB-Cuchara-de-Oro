<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Carrito de compra  | Cuchara de Oro</title> 
        <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
        <link rel="stylesheet" href="../CSS/reclamaciones.css">
        <link rel="stylesheet" href="../CSS/footer1.css"> 
        <link rel="stylesheet" href="../CSS/home.css">
    </head>
    <body>
        <header>
            <h1>Carrito de compras</h1>
            <h2>Cuchara de Oro</h2>
        </header>
        <main>

            <form method="post" >
                <section>
                    <h3>Datos del cliente: </h3>
                    <div>
                        <label for="nombre">Nombre completo:</label>
                        <input type="text"  name="nombre" required placeholder="Nombre">
                    </div>               
                    <div>
                        <label for="direccion">Dirección:</label>
                        <input type="text"  name="direccion" required placeholder="Dirección">
                    </div>
                    <div>
                        <label for="telefono">Teléfono:</label>
                        <input type="tel"  name="telefono" required placeholder="Teléfono">
                    </div>

                </section>

                <input type="hidden" name="accion" value="add">
                <button class="btn_terminar"  type="submit">
                    <li><a href="../HTML/verificacionpedido.php">Continuar compra</a></li></button>
            </form>
        </main>
    </body>
</html>


