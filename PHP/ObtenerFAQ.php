<?php 
include_once '../PHP/conexionBD.php';

$conexion = Conexion();

$query = 'SELECT FAQ_ID, FAQ_Pregunta, FAQ_Respuesta FROM faq;';

$result = mysqli_query($conexion, $query);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $pregunta = $row["FAQ_Pregunta"];
        $respuesta = $row["FAQ_Respuesta"];
        echo "<div class='pregunta'>
                <div class='pregunta_encabezado'>
                    <h3>$pregunta</h3>
                </div>
                <div class='respuesta'>
                    $respuesta
                </div>
            </div>";
    }
}