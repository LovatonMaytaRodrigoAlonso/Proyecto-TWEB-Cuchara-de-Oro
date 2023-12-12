<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/exitoPedido.css">
    <title>Éxito Pedido | Cuchara de Oro</title>
</head>

<body>
    <div>
        <h1>¡Felicitaciones!</h1>
        <p>Gracias por completar su pedido.</p>
        <p>Para descargar su comprobante de pago, haga clic <a href="#" id="verFactura">aquí</a>.</p>
        <button>Volver al Inicio</button>
    </div>
</body>

<script>
    document.querySelector('button').addEventListener('click', function() {
        window.location.href = "../HTML/home.php";
    });
    
    document.getElementById('verFactura').addEventListener('click', function(e) {
    e.preventDefault();

    // Aquí debes proporcionar la URL correcta a tu script PHP que genera la factura
    var urlFactura = '../PHP/Factura.php';

    // Abrir la URL en una nueva pestaña
    window.open(urlFactura, '_blank');
});
</script>
</html>