<?php    
    function Conexion(){
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $database = "restaurante";  
    $port = "3306";   
    global $con;
    $con = mysqli_connect($hostname, $username, $password, $database, $port) or die("Error al conectar a la Base de Datos");
    return $con;
}
$conexion = Conexion();