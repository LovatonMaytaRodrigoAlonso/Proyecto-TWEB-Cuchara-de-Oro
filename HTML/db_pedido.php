<?php

include("conexionBD.php");
$con = getConnection();



    if(isset($_POST["${product.quantity}"])){
    $query = 'INSERT INTO pedido_detalles(COM_ID, DET_Cantidad) VALUES (\''.$_POST["${product.quantity}"].'\',\''.$_POST["${product.title}"].'\')';
    $result = mysqli_query($con,$query) or die (mysqli_error());       
}


if ($query){
                        echo 'Los datos se han insertado correctamente!';
                    }else{
                        echo 'Hubo un inconveniente!!';
                    }
                    
                    ?>

$sql = "INSERT INTO carrito (producto_id, nombre_producto, cantidad, precio) VALUES ('$producto_id', '$nombre_producto', '$cantidad', '$precio')";

if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente en el carrito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();
if ($conn->query($sql) === TRUE) {
    echo "Datos insertados correctamente en el carrito.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cierra la conexión a la base de datos
$conn->close();