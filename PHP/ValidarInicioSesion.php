<?php
include("conexionBD.php");

// Inicia la sesión
session_start();

$con = getConnection();

if (isset($_POST['acceder'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        // Los campos están vacíos
        echo "Por favor, complete todos los campos";
        header('Location: ../HTML/acceso.php');
        // Puedes mostrar un mensaje de error y/o redirigir al usuario al formulario de inicio de sesión
    } else {
        $email = mysqli_real_escape_string($con, $email);
        $password = mysqli_real_escape_string($con, $password);

        $consulta = "SELECT * FROM cliente WHERE CLI_Correo='$email' AND CLI_Password='$password'";
        $resultado = mysqli_query($con, $consulta);

        $filas = mysqli_num_rows($resultado);
        if ($filas) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = obtenerNombreUsuario($con,$email);
            header('Location: ../HTML/home.php');
            // Puedes redirigir al usuario a la página de inicio si las credenciales son válidas
        } else {
            echo "Credenciales inválidas. Por favor, inténtalo de nuevo.";
            header('Location: ../HTML/acceso.php');
            // Puedes mostrar un mensaje de error y/o redirigir al usuario al formulario de inicio de sesión
        }
    }
}
?>


