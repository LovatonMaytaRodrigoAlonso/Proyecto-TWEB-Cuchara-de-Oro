<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de compra | Cuchara de Oro</title> 
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    
    <link rel="stylesheet" href="../CSS/verificacionpedido.css">
    <link rel="stylesheet" href="../CSS/home.css">

</head>

<body>
    <header>
        <h1> Carrito de compra </h1>
        <h2>Cuchara de Oro</h2>
    </header>
    <main>  
<div class="card"> 
      <button id="miBtn" class="Btn">
  
        <div class="sign"><svg viewBox="0 0 512 512"><path d="M217.9 105.9L340.7 228.7c7.2 7.2 11.3 17.1 11.3 27.3s-4.1 20.1-11.3 
      27.3L217.9 406.1c-6.4 6.4-15 9.9-24 9.9c-18.7 0-33.9-15.2-33.9-33.9l0-62.1L32 320c-17.7 0-32-14.3-32-32l0-64c0-17.7 14.3-32 
      32-32l128 0 0-62.1c0-18.7 15.2-33.9 33.9-33.9c9 0 17.6 3.6 24 9.9zM352 416l64 0c17.7 0 32-14.3 32-32l0-256c0-17.7-14.3-32-32-32l-64 
      0c-17.7 0-32-14.3-32-32s14.3-32 32-32l64 0c53 0 96 43 96 96l0 256c0 53-43 96-96 96l-64 0c-17.7 0-32-14.3-32-32s14.3-32 32-32z"></path></svg></div>
        
        <div class="text">
        <a href="../HTML/home.php">Cerrar</a></div>
      </button>  
  <div class="header"> 
    <div class="image">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"><g stroke-width="0" id="SVGRepo_bgCarrier"></g><g stroke-linejoin="round" stroke-linecap="round" id="SVGRepo_tracerCarrier"></g><g id="SVGRepo_iconCarrier"> <path stroke-linejoin="round" stroke-linecap="round" stroke-width="1.5" stroke="#000000" d="M20 7L9.00004 18L3.99994 13"></path> </g></svg>
      </div> 
      <div class="content">
         <span class="title">Pedido Validado</span> 
         <p class="message">Gracias por su compra</p> 
         </div> 
         <div class="actions">
            <button type="button" class="history">
            <a href="../HTML/pago.php">Pedido</a></button>
             
            <button type="button" class="track">
            <a href="../HTML/index.php">Seguir comprando</a></button> 
            <center><a href="#" id="verFactura">Ver Factura</a></center>
            </div> 
            </div> 
            </div>
  </main>   
</body>
<script>
document.getElementById('verFactura').addEventListener('click', function(e) {
    e.preventDefault();

    // Aquí debes proporcionar la URL correcta a tu script PHP que genera la factura
    var urlFactura = '../PHP/Factura.php';

    // Abrir la URL en una nueva pestaña
    window.open(urlFactura, '_blank');
});
</script>
</html>



