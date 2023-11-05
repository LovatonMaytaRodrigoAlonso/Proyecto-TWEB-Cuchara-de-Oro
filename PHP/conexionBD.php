<?php
    
    function getConnection(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "cuchara_de_oro";
    $port = "3306";
    $con = mysqli_connect($hostname, $username, $password, $database, $port) or die("Error al conectar a la Base de Datos");
    return $con;
}

function obtenerNombreUsuario($con, $email) {
    $consulta = "SELECT CLI_Nombres FROM cliente WHERE CLI_Correo = '$email'";
    $resultado = mysqli_query($con, $consulta);

    if ($resultado) {
        $fila = mysqli_fetch_assoc($resultado);
        return $fila['CLI_Nombres'];
    } else {
        return null;
    }
}




