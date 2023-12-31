<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="icon" type="image/x-icon" href="Imagenes/Cuchara de Oro circulo.png">
    
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de usuario | Cuchara de Oro</title>
    <link rel="stylesheet" href="CSS/registro.css">
    <link rel="icon" type="image/x-icon" href="Imagenes/Cuchara de Oro circulo.png">
      <script>
        function validarFormulario() {
            var Contraseña=document.getElementById("Contraseña").value;
            var ConfirmarContraseña=document.getElementById("ConfirmarContraseña").value;

            if(contraseña!==ConfirmarContraseña) {
                alert( "Las contraseñas no coinciden, intentelo de nuevo"); 
                return false;
            } 
            
        }
      </script>  

    
    <div class="registro-box">
        <img src="Imagenes/Cuchara de Oro.jpg" class="avatar" alt="Avatar Image">
        <h1>Regístrate</h1>
    
    <form action="Registro.html" method="post">         
            <label for="nombres">Nombres:</label>
            <input type="text" id="nombres" name="nombres" required>

            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required>

            <label for="email">Correo Electrónico:</label>
            <input type="email" id="email" name="email" required>

            <label for="telefono">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" required>

            <label for="tipoDocumento">Tipo de Documento:</label>
            <select id="tipoDocumento" name="tipoDocumento" required>
                <option value="DNI">DNI</option>
                <option value="Carnet de extranjería">Carnet de extranjería</option>
                <option value="Pasaporte">Pasaporte</option>
                
            </select>

            <label for="numeroDocumento">Número de Documento:</label>
            <input type="text" id="numeroDocumento" name="numeroDocumento" required>

            <label for="password">Contraseña:</label>
            <input type="password" id="password" name="password" required>

            <label for="confirmPassword">Confirmar Contraseña:</label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <input type="submit" value="Registrarse">
        </form>
        <a href="/login.html">¿Ya tienes una cuenta? Inicia sesión</a>
      
              
    </body>
</html>