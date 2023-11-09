<?php
/*function insertarCorreo($correo) {
    // Establece la conexión a tu base de datos
    $conexion = new mysqli("localhost", "root", "", "cuchara_de_oroo", "3307");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para insertar el correo en la base de datos
    $sql = "INSERT INTO suscriptores (correo) VALUES ('$correo')";

    // Ejecuta la consulta
    if ($conexion->query($sql) === TRUE) {
        header("Location: ../HTML/exito.php");
        exit(); // Asegura que el script se detenga después de redirigir
    } else {
        echo "Error al almacenar el correo electrónico: " . $conexion->error;
    }

    // Cierra la conexión a la base de datos
    $conexion->close();
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el correo electrónico del formulario
    $correo = $_POST['correo'];

    // Llama a la función para insertar el correo en la base de datos
    insertarCorreo($correo);
}*/

function insertarCorreo($correo) {
    // Establece la conexión a tu base de datos
    $conexion = new mysqli("localhost", "root", "", "cuchara_de_oroo", "3307");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    // Verifica si el correo electrónico ya existe en la base de datos
    $consulta = "SELECT id, CantidadDeVeces FROM suscriptores WHERE correo = '$correo'";
    $resultado = $conexion->query($consulta);

    if ($resultado->num_rows > 0) {
        // Si el correo ya existe, incrementa el contador
        $fila = $resultado->fetch_assoc();
        $id = $fila["id"];
        $Cantidad = $fila["CantidadDeVeces"] + 1;

        // Actualiza el contador en la base de datos
        $actualizarContador = "UPDATE suscriptores SET CantidadDeVeces = $Cantidad WHERE id = $id";
        $conexion->query($actualizarContador);
    } else {
        // Si el correo no existe, inserta un nuevo registro con contador en 1
        $sql = "INSERT INTO suscriptores (correo, CantidadDeVeces) VALUES ('$correo', 1)";
        $conexion->query($sql);
    }

    // Envia un mensaje de confirmación al correo electrónico del usuario
    $asunto = "Confirmación de suscripción a boletín";
    $mensaje = "Gracias por suscribirte a nuestro boletín informativo. Tu suscripción ha sido confirmada.";
    $headers = "From: noreply@cucharadeoro.com";

    // Envia el correo electrónico de confirmación
    mail($correo, $asunto, $mensaje, $headers);

    // Redirige al usuario a la página principal (reemplaza 'index.php' con la URL deseada)
    header("Location: ../HTML/exitoboletin.php");
    exit(); // Asegura que el script se detenga después de redirigir

    // Cierra la conexión a la base de datos
    $conexion->close();
}

// Verifica si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtiene el correo electrónico del formulario
    $correo = $_POST['correo'];

    // Llama a la función para insertar el correo en la tabla suscriptores
    insertarCorreo($correo);
}


?>


