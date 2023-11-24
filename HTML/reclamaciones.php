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
                    <label for="menu"><input type="radio" id="menu" name="bienes" value="MENU"> Menu</label>
                </div>
                <div>
                    <label for="marino"><input type="radio" id="marino" name="bienes" value="MENU MARINO"> Menu Marino</label>
                </div>
                <div>
                    <label for="parrilla"><input type="radio" id="parrilla" name="bienes" value="MENU PARRILLERO"> Menu Parrillero</label>
                </div>
                <div>
                    <label for="bebida"><input type="radio" id="bebida" name="bienes" value="BEBIDA"> Bebida</label>
                </div>
                
                <div>
                    <label for="importe">Importe (S/.):</label>
                    <input type="text" id="importe" name="importe" required placeholder="Importe">
                </div>
                <div>
                    <label for="evidencia">Subir evidencia</label>
                    <label id="aviso">Aviso. La imagen debe pesar menos de 2 MB</label>
                    <input type="file" name="evidencia" id="evidencia" accept=".png, .jpg" onchange="mostrarImagen()"/>
                    <br>
                    <center>
                    <img id="ImagenSeleccionada" alt="Vista previa de la Imagen" height="400px"/>
                    </center>
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

    <?php include_once '../PHP/Footer.php'; ?>
    
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
            let imagenSize = archivo.size;

            if (imagenSize > 2097152) {
                alert("La imagen introducida excede los 2 MB, por favor introducir otra de menor tamaño.");
            }else{
                reader.onload = function(e){
                imagen.src = e.target.result;
                };
                reader.readAsDataURL(archivo);
            }

            } else{
                imagen.src='';
            }            
        }    
    </script>

</body>
</html>