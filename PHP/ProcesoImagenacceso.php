<?php

if (isset($_REQUEST["accion"])) {
    $accion = $_REQUEST["accion"];

    if ($accion == "add") {

      
        
        $foto = $_FILES["evidencia"];

        $nombreArchivo = $foto['name'];
        $tipoMIME = $foto['type'];
        $tamañoArchivo = $foto['size'];
        $nombreArchivoTemporal = $foto['tmp_name'];
        $errorSubida = $foto['error'];
       
        if ($errorSubida === UPLOAD_ERR_OK) {

            if ($tipoMIME === 'image/jpeg' || $tipoMIME === 'image/png') {

                $nombreArchivoDestino = '../evidencias/'; 

                 if (move_uploaded_file($nombreArchivoTemporal, $nombreArchivoDestino.$nombreArchivo)) {
                     echo "<script>alert('El archivo se ha cargado y movido correctamente.')</script>";
                     header('Location: ../HTML/exitoacceso.php');
                 } else {
                     echo "<script>alert('Hubo un error al cargar o mover el archivo.')</script>";
                 }

                
            } else {
                 echo "<script>alert('No es un archivo JPG ni PNG.')</script>";
            }
        } else {
             echo "<script>alert('Error al subir')</script>";
        }
    }
}