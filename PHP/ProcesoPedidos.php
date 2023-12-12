<?php
session_start();

include_once '../PHP/conexionBD.php';

$conexion = Conexion();

if (isset($_POST['action']) && $_POST['action'] == 'enviarCarrito') {
    $carrito = ($_POST['carrito']);
} else {
    echo "No se pudo generar el pedido.";
}

if (isset($_POST["accion"])) {
    $accion = $_POST["accion"];

    if ($accion == "add") {

        $direccion = $_POST["direccion"];
        $fono = $_POST["fono"];
        $metodoPago = $_POST["metodoPago"];

        ActualizarDireccion($conexion, $_SESSION['cliente_id'], $direccion);
        ActualizarTelefono($conexion, $_SESSION['cliente_id'], $fono);

        if (isset($_POST['action']) && $_POST['action'] == 'enviarCarrito') {

            for ($i = 0; $i < count($carrito); $i++) {
                $precio = $carrito[$i][2];

                $total = $total + $precio;
            }

            $idPedido = AgregarPedido($conexion, $_SESSION['cliente_id'], $total, $metodoPago);

            for ($i = 0; $i < count($carrito); $i++) {
                $cantidad = $carrito[$i][0];
                $nombre = $carrito[$i][1];

                $idComida = ObtenerIdComida($conexion, $nombre);
                AgregarPedido_detalles($conexion, $idComida, $cantidad, $idPedido);
            }
        }
    }
}

// header("Location: ../HTML/exitoPedido.php");

function ActualizarDireccion($conexion, $idCliente, $direccion)
{
    $sql = "UPDATE cliente SET CLI_Direccion = '$direccion' WHERE CLI_ID = $idCliente";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        return true;
    } else {
        echo "Error al actualizar dirección: " . mysqli_error($conexion);
        return false;
    }
}

function ActualizarTelefono($conexion, $idCliente, $telefono)
{
    $sql = "UPDATE cliente SET CLI_Telefono = '$telefono' WHERE CLI_ID = $idCliente";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        return true;
    } else {
        echo "Error al actualizar teléfono: " . mysqli_error($conexion);
        return false;
    }
}

function ObtenerIdComida($conexion, $nombre)
{
    $sql = "SELECT COM_ID FROM comida WHERE COM_NOMBRE = '$nombre'";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        $id = mysqli_fetch_array($resultado);
        return $id[0];
    } else {
        echo "Error al agregar pedido: " . mysqli_error($conexion);
        return false;
    }
}

function AgregarPedido($conexion, $idCliente, $total, $metodo)
{
    $sql = "INSERT INTO pedido (CLI_ID, PED_Fecha, PED_Pago, PED_MetodoPago, PED_Estado) VALUES ($idCliente, 'NOW()' , $total, $metodo, 'Pendiente')";
    $resultado = mysqli_query($conexion, $sql);
    $idPedido = mysqli_insert_id($conexion);
    if ($resultado) {
        return $idPedido;
    } else {
        echo "Error al agregar pedido: " . mysqli_error($conexion);
        return false;
    }
}

function AgregarPedido_detalles($conexion, $idComida, $cantidad, $idPedido)
{
    $sql = "INSERT INTO pedido_detalles (COM_ID, DET_Cantidad, PED_ID) VALUES ($idComida, $cantidad, $idPedido)";
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado) {
        echo "Pedido agregado correctamente";
        return true;
    } else {
        echo "Error al agregar pedido: " . mysqli_error($conexion);
        return false;
    }
}
