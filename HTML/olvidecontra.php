<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../Imagenes/Cuchara de Oro circulo.png">
    <link rel="stylesheet" href="../CSS/stylescontra.css">
    <title>Olvidé contraseña | Cuchara de Oro</title>
</head>
<body>
    <div class="login-box">
        <!--
        <img src="/Imagenes/Cuchara de Oro.jpg" class="avatar" -->
        <h1>Recuperar Contraseña</h1>
        <form action="../HTML/olvidecontra.php" method="post">
            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>
            <button type="submit">Enviar Instrucciones de Recuperación</button>
        </form>
        <a href="../HTML/acceso.php">Volver al Inicio de Sesión</a>
    </div>
</body>
</html>