<?php
include("conexionBD.php");
$con = getConnection();


if (isset($_POST['registrar'])) {
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['evidencia']) >= 1) {
        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $evidencia = trim($_POST['evidencia']);

        $consulta = "INSERT INTO cliente ( CLI_Nombres, CLI_Correo, CLI_Password, CLI_FotoPerfil)
                     VALUES ('$name', '$email', '$password', '$evidencia')";
        $resultado = mysqli_query($con, $consulta);
        if ($resultado) {
            ?>
            <h3 class="correcto">Registrado Correctamente</h3>
            <?php
            mysqli_close($con);
            header('Location: ../HTML/acceso.php');
        } else {
            ?>
            <h3 class="incorrecto">¡Vaya! Parece que algo ah fallado</h3>
            <?php
        }
    } else {
        ?>
        <h3 class="incorrecto">Complete todos los datos</h3>
        <?php
    }
}
//Copia de Seguridad
//if (isset($_REQUEST["accion"])) {
//    $accion = $_REQUEST["accion"];
//
//    if ($accion == "add") {
//
//        // Lógica de validación de la imagen
//        $foto = $_FILES["evidencia"];
//        $nombreArchivo = $foto['name'];
//        $tipoMIME = $foto['type'];
//        $tamañoArchivo = $foto['size'];
//        $nombreArchivoTemporal = $foto['tmp_name'];
//        $errorSubida = $foto['error'];
//
//        if ($errorSubida === UPLOAD_ERR_OK) {
//            if ($tipoMIME === 'image/jpeg' || $tipoMIME === 'image/png') {
//                $nombreArchivoDestino = '../evidencias/';
//                if (move_uploaded_file($nombreArchivoTemporal, $nombreArchivoDestino . $nombreArchivo)) {
//                    // Lógica de registro en la base de datos
//                    include("conexionBD.php");
//                    $con = getConnection();
//                    
//
//                    if (isset($_POST['registrar'])) {
//                        $name = mysqli_real_escape_string($con, $_POST['name']);
//                        $email = mysqli_real_escape_string($con, $_POST['email']);
//                        $password = mysqli_real_escape_string($con, $_POST['password']);
//                        $evidencia = mysqli_real_escape_string($con, $nombreArchivo);
//
//                        $consulta = "INSERT INTO `cliente`(CLI_Nombres, CLI_Correo, CLI_Password, CLI_FotoPerfil) VALUES ('$name', '$email', '$password', '$evidencia')";
//                        $resultado = mysqli_query($con, $consulta);
//                        if ($resultado) {

//                        }
//                    }
//                } else {
//                    echo "<script>alert('Hubo un error al cargar o mover el archivo.')</script>";
//                }
//            } else {
//                echo "<script>alert('No es un archivo JPG ni PNG.')</script>";
//            }
//        } else {
//            echo "<script>alert('Error al subir')</script>";
//        }
//    }
//}
?>

        


