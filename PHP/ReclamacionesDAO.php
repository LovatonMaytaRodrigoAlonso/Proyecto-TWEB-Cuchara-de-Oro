<?php
include_once '../PHP/conexionBD.php';
$conexion = Conexion();

function obtenerDatos($conexion)
{
    $query = 'SELECT r.REC_ID, r.REC_Nombres, r.REC_Apellido_Paterno, r.REC__Apellido_Materno, r.REC_Direccion, r.REC_TipoDoc, r.REC_Doc, r.REC_Telefono, r.REC_Correo, c.CAT_Nombre, r.REC_Importe, r.REC_Evidencia, r.REC_Comentario, r.REC_Estado FROM reclamos r INNER JOIN categorias c ON r.REC_BienAdq = c.CAT_ID ORDER BY r.REC_Estado';

    $result = mysqli_query($conexion, $query);

    $datos = [];

    if ($result->num_rows > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $datos[] = $row;
        }
    }
    return $datos;
}

function ActualizarEstado($conexion, $id)
{
    $query = "UPDATE reclamos SET REC_Estado = 'Resuelto' WHERE REC_ID = '$id'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        echo "<script>alert('Se ha actualizado el estado correctamente.')</script>";
    } else {
        echo "<script>alert('No se ha podido actualizar el estado.')</script>";
    }
}

function ObtenerEvidencia($conexion, $id)
{
    $query = "SELECT REC_Evidencia FROM reclamos WHERE REC_ID = '$id'";
    $result = mysqli_query($conexion, $query);

    if ($result) {
        $row = mysqli_fetch_assoc($result);
        $evidencia = $row['REC_Evidencia'];
        return $evidencia;
        
    } else {
        echo "<script>alert('No se ha podido obtener la evidencia.')</script>";
    }
}
