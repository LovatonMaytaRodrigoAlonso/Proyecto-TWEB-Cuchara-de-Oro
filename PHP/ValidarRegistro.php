<?php
include("conexionBD.php");

$con = getConnection();

if (isset($_POST['registrar'])) {
    // Verificar si los campos obligatorios están vacíos
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        ?>
        <h3 class="bad">Complete los campos de Nombre, Email y Contraseña</h3>
        <?php
    } else {
        // Los campos no están vacíos, proceder con el registro
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        // Comprobar si se ha seleccionado una imagen
        if (isset($_FILES['foto']) && $_FILES['foto']['error'] === UPLOAD_ERR_OK) {
            $maxFileSize = 2 * 1024 * 1024; 

            if ($_FILES['foto']['size'] <= $maxFileSize) {
                $uploadDir = '../evidencias/FotoUsuario/';
                $uploadedFile = $uploadDir . $_FILES['foto']['name'];

                if (move_uploaded_file($_FILES['foto']['tmp_name'], $uploadedFile)) {
                    // La imagen se ha cargado correctamente, ahora puedes guardar la ruta en la base de datos
                    $sql = "INSERT INTO cliente (CLI_Nombres, CLI_Correo, CLI_Password, CLI_FotoPerfil) VALUES (?, ?, ?, ?)";
                    if ($statement = mysqli_prepare($con, $sql)) {
                        mysqli_stmt_bind_param($statement, "ssss", $name, $email, $password, $uploadedFile);
                        if (mysqli_stmt_execute($statement)) {
                        ?>
                        <h3 class='ok'>Te has registrado correctamente</h3>
                        <?php
                        // Puedes agregar un enlace para redirigir al usuario después de mostrar el mensaje
                        } else {
                            ?>
                            <h3 class='bad'>¡Oh! Algo ha fallado</h3>
                            <?php
                        }
                        mysqli_stmt_close($statement);
                    }
                } else {
                    echo '<h3 class="bad">Error al cargar la imagen</h3>';
                }
            } else {
                echo '<h3 class="bad">La imagen excede el tamaño máximo permitido (1 MB)</h3>';
            }
        } else {
            // Si no se ha seleccionado una imagen, simplemente registra los datos sin la imagen
            $sql = "INSERT INTO cliente (CLI_Nombres, CLI_Correo, CLI_Password) VALUES (?, ?, ?)";
            if ($statement = mysqli_prepare($con, $sql)) {
                mysqli_stmt_bind_param($statement, "sss", $name, $email, $password);
                if (mysqli_stmt_execute($statement)) {
                ?>
                <h3 class='ok'>Te has registrado correctamente</h3>
                <?php
                // Puedes agregar un enlace para redirigir al usuario después de mostrar el mensaje
                } else {
                    ?>
                    <h3 class='bad'>¡Oh! Algo ha fallado</h3>
                    <?php
                }
                mysqli_stmt_close($statement);
            } else {
                ?>
                <h3 class="bad">Error al cargar la imagen</h3>
                <?php
            }
        }
    }
}
?>
