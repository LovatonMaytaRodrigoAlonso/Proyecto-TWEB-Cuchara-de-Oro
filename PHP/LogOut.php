<?php
// Inicia la sesión
session_start();

// Destruye todas las variables de sesión
session_destroy();

// Redirige al usuario a la página de inicio
header("Location: ../HTML/acceso.php");
?>
