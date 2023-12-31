<?php

include './conexionBD.php';
include_once '../PHP/ReclamacionesDAO.php';

$conexion = Conexion();

if (isset($_REQUEST["accion"])) {
    $accion = $_REQUEST["accion"];

    if ($accion == "add") {

        $nom = $_POST["nombre"];
        $apeP = $_POST["apeP"];
        $apeM = $_POST["apeM"];
        $direccion = $_POST["direccion"];
        $tipoDoc = $_POST["tipDoc"];
        $numDoc = $_POST["doc"];
        $fono = $_POST["telefono"];
        $correo = $_POST["correo"];
        $bien = $_POST["bienes"];
        $importe = $_POST["importe"];
        $comentario = $_POST["comentario"];
        $estado = "Pendiente";

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
                    $nuevaDireccion = $nombreArchivoDestino . $nombreArchivo;

                    if (move_uploaded_file($nombreArchivoTemporal, $nuevaDireccion)) {
                        echo "<script>alert('El archivo se ha cargado y movido correctamente.')</script>";

                        if ($bien == "MENU") {
                            $bien = 1;
                        }
                        if ($bien == "MENU MARINO") {
                            $bien = 2;
                        }
                        if ($bien == "MENU PARRILLERO") {
                            $bien = 3;
                        }
                        if ($bien == "BEBIDA") {
                            $bien = 4;
                        }

                        $query = "INSERT INTO reclamos(REC_Nombres, REC_Apellido_Paterno, "
                            . "REC__Apellido_Materno, REC_Direccion, REC_TipoDoc, REC_Doc, "
                            . "REC_Telefono, REC_Correo, REC_BienAdq, REC_Importe, "
                            . "REC_Evidencia, REC_Comentario, REC_Estado) "
                            . "VALUES ('$nom','$apeP','$apeM','$direccion','$tipoDoc','$numDoc','$fono','$correo','$bien','$importe','$nuevaDireccion','$comentario','$estado');";
                        $rpta = mysqli_query($conexion, $query);

                        if ($rpta) {
                            header('Location: ../HTML/exito.php');
                        } else {
                            echo "<script>alert('Hubo un error al enviar el formulario.')</script>";
                        }
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
    }
}

if ($_POST['action'] == 'actualizarEstado') {
    ActualizarEstado($conexion, $_POST['id']);
}

if ($_POST['action'] == 'obtenerEvidencia') {
    $evidencia_img = ObtenerEvidencia($conexion, $_POST['id']);
    echo $evidencia_img;
}
