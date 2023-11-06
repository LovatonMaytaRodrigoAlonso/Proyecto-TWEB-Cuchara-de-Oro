<?php

include './conexionBD.php';

if (isset($_REQUEST["accion"])) {
    $accion = $_REQUEST["accion"];

    if ($accion == "add") {

        $nom = $_POST["nombre"];
        $apeP = $_POST["apeP"];
        $apeM = $_POST["apeM"];
        $direccion = $_POST["direccion"];
        $tipoDoc = $_POST["tipoDoc"];
        $numDoc = $_POST["doc"];
        $fono = $_POST["telefono"];
        $bien = $_POST["bienes"];
        $importe = $_POST["importe"];
        $comentario = $_POST["comentario"];

//        echo $nom . " " . $apeP . " " . $apeM . " " . $direccion . " " .
//        $numDoc . " " . $fono . " " . $bien . " " . $importe . " " . $comentario;

        $foto = $_FILES["evidencia"];

        $maxSize = 2097152; // 2 MB

        $nombreArchivo = $foto['name'];
        $tipoMIME = $foto['type'];
        $tamañoArchivo = $foto['size'];
        $nombreArchivoTemporal = $foto['tmp_name'];
        $errorSubida = $foto['error'];

        if ($errorSubida === UPLOAD_ERR_OK) {

            if ($tipoMIME === 'image/jpeg' || $tipoMIME === 'image/png') {

                if ($tamañoArchivo < $maxSize) {
                    $nombreArchivoDestino = '../evidencias/';

                    if (move_uploaded_file($nombreArchivoTemporal, $nombreArchivoDestino . $nombreArchivo)) {
                        echo "<script>alert('El archivo se ha cargado y movido correctamente.')</script>";
                        header('Location: ../HTML/exito.php');
                    } else {
                        echo "<script>alert('Hubo un error al cargar o mover el archivo.')</script>";
                    }
                } else {
                    header('Location: ../HTML/reclamaciones.php');
                    echo "<script>alert('Imagen mayor a 2 MB, por favor introducir otra imagen.')</script>";
                }
            } else {
                echo "<script>alert('No es un archivo JPG ni PNG.')</script>";
            }
        } else {
            echo "<script>alert('Error al subir')</script>";
        }
        
        $con = getConnection();
        
        
    }
}