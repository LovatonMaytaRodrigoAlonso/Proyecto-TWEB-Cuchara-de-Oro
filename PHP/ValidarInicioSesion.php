<?php

function obtenerImagenUsuario($con, $email) {
    $sql = "SELECT CLI_FotoPerfil FROM cliente WHERE CLI_Correo = ?";
    if ($statement = mysqli_prepare($con, $sql)) {
        mysqli_stmt_bind_param($statement, "s", $email);
        if (mysqli_stmt_execute($statement)) {
            mysqli_stmt_bind_result($statement, $imagenUsuario);
            if (mysqli_stmt_fetch($statement)) {
                return $imagenUsuario;
            }
        }
    }
}

include_once '../HTML/Consultas.php';

// Inicia la sesión
session_start();

if (isset($_POST['acceder'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) || empty($password)) {
        //header('Location: ../HTML/acceso.php');
        ?>
        <h3 class='bad'>Por favor, complete todos los campos</h3>
        <?php
    } else {
        $email = mysqli_real_escape_string($conexion, $email);
        $password = mysqli_real_escape_string($conexion, $password);

        $consulta = "SELECT * FROM cliente WHERE CLI_Correo='$email' AND CLI_Password='$password'";
        $resultado = mysqli_query($conexion, $consulta);

        $filas = mysqli_num_rows($resultado);
        if ($filas) {
            $_SESSION['email'] = $email;
            $_SESSION['name'] = obtenerNombreUsuario($conexion, $email);

            // Obtén la imagen del usuario y guárdala en $_SESSION['user_image'] si está disponible en la base de datos
            $imagenUsuario = obtenerImagenUsuario($conexion, $email); // Reemplaza 'obtenerImagenUsuario'
            if ($imagenUsuario) {
                $_SESSION['user_image'] = $imagenUsuario;
            }

            header('Location: ../HTML/home.php');
        } else {
            //header('Location: ../HTML/acceso.php');
            ?>
            <h3 class='bad'>Credenciales inválidas. Por favor, inténtalo de nuevo</h3>
            <?php
        }
    }
}
?>


