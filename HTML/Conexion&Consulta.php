<?php
function Conexion(){
    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "restaurante";

    $conexion = new mysqli($host, $user, $pass, $db);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }
    return $conexion;  
}
?>

<!--MENU DEL DIA-->
<?php
//AJI DE POLLO
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 1";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre0 = $row["COM_Nombre"];
        $precio0 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--LOMO SALTADO-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 5";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre1 = $row["COM_Nombre"];
        $precio1 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--ARROZ CON POLLO-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 2";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre2 = $row["COM_Nombre"];
        $precio2 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--SECO DE CARNE-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 6";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre3 = $row["COM_Nombre"];
        $precio3 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--TALLARINES VERDES-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 4";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre4 = $row["COM_Nombre"];
        $precio4 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--TANTICUCHOS-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 11";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre5 = $row["COM_Nombre"];
        $precio5 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--PICANTE DE CARNE-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 12";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre6 = $row["COM_Nombre"];
        $precio6 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--CAU CAU-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 3";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre7 = $row["COM_Nombre"];
        $precio7 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--CHANFAINITA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 13";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre8 = $row["COM_Nombre"];
        $precio8 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>

<!--MENU MARINO-->
<!--ARROZ CHAUFA CON MARISCOS-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 14";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre9 = $row["COM_Nombre"];
        $precio9 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--BROCHETAS DE LANGOSTA Y CONCHA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 15";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre10 = $row["COM_Nombre"];
        $precio10 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--CEVICHE DE PESCADO-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 16";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre11 = $row["COM_Nombre"];
        $precio11 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--CHICHARRON DE PESCADO-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 17";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre12 = $row["COM_Nombre"];
        $precio12 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--PAELA DE MARISCOS-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 18";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre13 = $row["COM_Nombre"];
        $precio13 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--CHICHARRON DE POTA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 19";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre14 = $row["COM_Nombre"];
        $precio14 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>

<!--PARRILLA-->
<!--CHULETA DE CARNE-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 20";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre15 = $row["COM_Nombre"];
        $precio15 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--PARRILLA ECONOMICA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 21";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre16 = $row["COM_Nombre"];
        $precio16 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--COSTILLAS BBQ-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 22";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre17 = $row["COM_Nombre"];
        $precio17 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--PARRILLA FAMILIAR-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 23";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre18 = $row["COM_Nombre"];
        $precio18 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--PARRILLA CLASICA FAMILIAR-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 23";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre19 = $row["COM_Nombre"];
        $precio19 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--PARRILLA PARA 2-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 23";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre20 = $row["COM_Nombre"];
        $precio20 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>

<!--BEBIDAS-->
<!--INCA KOLA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 10";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre21 = $row["COM_Nombre"];
        $precio21 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--CHICHA MORADA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 7";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre22 = $row["COM_Nombre"];
        $precio22 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>
<!--MARACUYA-->
<?php
$conexion = Conexion();

$sql = "SELECT COM_Nombre, COM_Precio FROM comida LIMIT 9";

$result = $conexion->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $nombre23 = $row["COM_Nombre"];
        $precio23 = $row["COM_Precio"];
    }
} 
$conexion->close();
?>