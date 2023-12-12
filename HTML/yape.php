<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Pago por yape</title>
        <link rel="stylesheet" href="../CSS/yape.css">

        <script src="https://cdn.jsdelivr.net/npm/yape@latest/dist/yape.min.js"></script>
    </head>
    <body>
        <main>

            <div class="contenedor" >
                <style>
                    .contenedor {
                        background-image: url('https://img.freepik.com/foto-gratis/concepto-fondo-estudio-fondo-sala-estudio-purpura-degradado-ligero-vacio-abstracto-producto_1258-54682.jpg?size=338&ext=jpg&ga=GA1.1.1546980028.1702339200&semt=sph'); /* Ruta a tu imagen de fondo */
                        background-size: cover; /* Ajusta la imagen para cubrir todo el contenedor */
                        background-position: center; /* Centra la imagen */
                        background-repeat: no-repeat;
                    }

                    .texto {
                        text-align: center; /* Centra el texto dentro del contenedor */
                       
                    }

                    #pagoyape {
                        font-size: 24px; /* Ajusta el tamaño del texto según tus preferencias */
                        padding: 10px; /* Ajusta el espacio interno del input */
                        border: 2px solid #3498db; /* Color del borde */
                        border-radius: 15px; /* Ajusta el radio del borde para hacerlo más circular */
                        padding: 5px 10px; /* Ajusta el espacio interno del label */
                        display: inline-block; 
                    }

                    .yapeando {
                        max-width: 30%; /* Ajusta el tamaño máximo de la imagen */
                        height: auto; /* Mantiene la proporción de aspecto de la imagen */
                        display: block; /* Elimina espacio adicional debajo de la imagen */
                        margin-bottom: 10px; /* Espaciado opcional entre la imagen y el input */
                        border: 2px solid #3498db; /* Color del borde */
                        border-radius: 15px; /* Ajusta el radio del borde para hacerlo más circular */
                        padding: 5px 10px; /* Ajusta el espacio interno del label */
                        display: inline-block; 
                    }

                    
                </style>

                <div class="texto">
                    <div id = contenedor_img> 
                        <center>
                            <img src="https://i.ytimg.com/vi/Ew0cCLyGsgQ/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLCXL5eGXNdGDkNpa9wvxtX_MM-oZw" alt="imgyape" class="yapeando">
                        </center>
                    </div> 
                    <label>S/ </label>
                    <input type="text" id="pagoyape" required > 
                    <p> Ordinola Vargas, Fabian Valentino </p>


                    <button  type="submit" class="btn-yape" >
                        <a href="../HTML/exitoPedido.php" >Yapear</a></button>
                </div>
            </div>

        </main>
    </body>
</html>