<?php

session_start();
include("conexionBD.php");
require_once ('../TCPDF/tcpdf.php');

// Obtiene el ID del cliente desde la sesión
if (isset($_SESSION['cliente_id'])) {
    // Obtiene el ID del cliente desde la sesión
    $cliente_id = $_SESSION['cliente_id'];

    // Obtiene el número de la última factura
    $query_last_invoice = mysqli_query($con, "SELECT MAX(PED_ID) as last_invoice FROM pedido WHERE CLI_ID = $cliente_id");
    
    if ($result_last_invoice = mysqli_fetch_assoc($query_last_invoice)) {
        $last_invoice_number = $result_last_invoice['last_invoice'];

        // Resto del código para generar la factura
        // ...
    } else {
        echo "No se encontraron facturas para el cliente.";
    }
} else {
    echo "La variable de sesión cliente_id no está definida.";
}

// Obtiene la información del cliente y la última factura
$query = mysqli_query($con, "SELECT p.PED_ID, DATE_FORMAT(p.PED_Fecha, '%d/%m/%Y') as fecha, DATE_FORMAT(p.PED_Fecha, '%H:%i:%s') as hora,
                                c.CLI_Nombres, c.CLI_Correo, p.PED_Estado
                            FROM pedido p
                            INNER JOIN cliente c ON p.CLI_ID = c.CLI_ID
                            WHERE p.PED_ID = $last_invoice_number AND c.CLI_ID = $cliente_id");


// Verifica si hay resultados
if ($row = mysqli_fetch_assoc($query)) {

    // Se genera el PDF
    $pdf = new TCPDF();

    // Agregar una página
    $pdf->AddPage();

    // Agregar contenido al PDF
    $pdf->SetFont('times', 'B', 14);
    $pdf->Cell(0, 10, 'Cuchara de Oro', 0, 1, 'C');
    $pdf->SetFont('times', '', 10);
    $pdf->Cell(0, 0, 'Avenida', 0, 1, 'C');
    $pdf->Cell(0, 0, 'Telefono', 0, 1, 'C');
    $pdf->Cell(0, 0, 'Email', 0, 1, 'C');
    $pdf->Ln(10);

    $pdf->SetFont('times', 'B', 14);
    $pdf->Cell(0, 10, 'Factura', 0, 1);
    $pdf->SetFont('times', '', 12);
    $pdf->Cell(0, 0, 'No. Factura: ' . $row['PED_ID'], 0, 1);
    $pdf->Cell(0, 0, 'Fecha: ' . $row['fecha'], 0, 1);
    $pdf->Cell(0, 0, 'Hora: ' . $row['hora'], 0, 1);
    
    $pdf->SetFont('times', 'B', 14);
    $pdf->Cell(0, 10, 'Cliente', 0, 1);
    $pdf->SetFont('times', '', 12);
    $pdf->Cell(0, 0, 'Cliente: ' . $row['CLI_Nombres'], 0, 1);
    $pdf->Cell(0, 0, 'Correo Electronico: ' . $row['CLI_Correo'], 0, 1);

    // Añadir tabla de productos
    $pdf->Ln(10);
    $pdf->SetFont('times', 'B', 12);
    $pdf->Cell(60, 10, 'Producto', 1);
    $pdf->Cell(30, 10, 'Cantidad', 1);
    $pdf->Cell(30, 10, 'Precio Unitario', 1);
    $pdf->Cell(40, 10, 'Precio Total', 1);
    $pdf->Ln();

    $query_productos = mysqli_query($con, "SELECT c.COM_Nombre, pd.DET_Cantidad, c.COM_Precio, (pd.DET_Cantidad * c.COM_Precio) as precio_total
                                            FROM pedido_detalles pd
                                            INNER JOIN comida c ON pd.COM_ID = c.COM_ID
                                            WHERE pd.PED_ID = $last_invoice_number");
    

    while ($producto = mysqli_fetch_assoc($query_productos)) {

        $pdf->Cell(60, 10, $producto['COM_Nombre'], 1);
        $pdf->Cell(30, 10, $producto['DET_Cantidad'], 1);
        $pdf->Cell(30, 10, $producto['COM_Precio'], 1);
        $pdf->Cell(40, 10, $producto['precio_total'], 1);
        $pdf->Ln();
    }
    // Calcular y mostrar el total
    $query_total = mysqli_query($con, "SELECT SUM(pd.DET_Cantidad * c.COM_Precio) as total
                                        FROM pedido_detalles pd
                                        INNER JOIN comida c ON pd.COM_ID = c.COM_ID
                                        WHERE pd.PED_ID = $last_invoice_number");
    $total = mysqli_fetch_assoc($query_total)['total'];
    $pdf->SetFont('times', 'B', 14);
    $pdf->Cell(0, 10, 'Total: ' . $total, 0, 1);
    
    $pdf->SetFont('times', 'B', 14);
    $pdf->Cell(0, 10, '¡GRACIAS POR SU COMPRA!', 0, 1, 'C');

    $filename = 'factura_' . $row['PED_ID'] . '.pdf';
    $pdf->Output($filename, 'I');

    
    
} else {
    echo "No hay facturas disponibles.";
}

?>
