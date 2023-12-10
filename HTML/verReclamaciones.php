<?php
include_once '../PHP/Header.php';
include_once '../PHP/ReclamacionesDAO.php';

$conexion = Conexion();
?>

<body>
    <main>
        <h1>Reclamaciones Pendientes</h1>
        <table id="tbl_reclamaciones">
            <tr>
                <th>ID</th>
                <th>Cliente</th>
                <th>Dirección</th>
                <th>Documento</th>
                <th>Teléfono</th>
                <th>Correo</th>
                <th>Bien Adquirido</th>
                <th>Importe</th>
                <th>Evidencia</th>
                <th>Comentario</th>
                <th>Estado</th>
                <th>Solucionar</th>
                <div class="content-table">
                    <?php
                    $datos = obtenerDatos($conexion);
                    foreach ($datos as $dato) {
                        $id = $dato["REC_ID"];
                        $nombres = $dato["REC_Nombres"];
                        $apellidoPaterno = $dato["REC_Apellido_Paterno"];
                        $apellidoMaterno = $dato["REC__Apellido_Materno"];
                        $direccion = $dato["REC_Direccion"];
                        $tipoDoc = $dato["REC_TipoDoc"];
                        $doc = $dato["REC_Doc"];
                        $telefono = $dato["REC_Telefono"];
                        $correo = $dato["REC_Correo"];
                        $bienAdq = $dato["CAT_Nombre"];
                        $importe = $dato["REC_Importe"];
                        $evidencia = $dato["REC_Evidencia"];
                        $comentario = $dato["REC_Comentario"];
                        $estado = $dato["REC_Estado"];
                
                        $tr_resuelto = ($estado == 'Resuelto') ? "<tr style='background-color: #f4f474; opacity: 0.8;'>" : "<tr>";
                
                        echo $tr_resuelto . "
                                <td data-id='$id'>$id</td>
                                <td>$nombres $apellidoPaterno $apellidoMaterno</td>
                                <td>$direccion</td>
                                <td>$doc</td>
                                <td>$telefono</td>
                                <td>$correo</td>
                                <td>$bienAdq</td>
                                <td>$importe</td>
                                <td><button class='button-download'><i class='fa-solid fa-file-arrow-down'></i></i></button></td>
                                <td>$comentario</td>
                                <td>$estado</td>
                                <td><button class='button-check'><i class='fa-solid fa-circle-check'></i></button></td>
                            </tr>";
                    }
                    ?>
                </div>
        </table>
    </main>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</body>

<script>
    const viewButton = document.getElementsByClassName('button-download');
    const checkButton = document.getElementsByClassName('button-check');

    for (let i = 0; i < checkButton.length; i++) {
        checkButton[i].addEventListener('click', function() {
            let id = $(this).closest('tr').find('td[data-id]').data('id');

            $.ajax({
                url: '../PHP/ProcesoReclamaciones.php',
                type: 'post',
                data: {
                    'id': id,
                    'action': 'actualizarEstado'
                },
                success: function(response) {
                    alert('Se ha actualizado el estado correctamente.');
                }
            });
        });
    }

    for (let i = 0; i < viewButton.length; i++) {
        viewButton[i].addEventListener('click', function() {
            let id = $(this).closest('tr').find('td[data-id]').data('id');

            $.ajax({
                url: '../PHP/ProcesoReclamaciones.php',
                type: 'post',
                data: {
                    'id': id,
                    'action': 'obtenerEvidencia'
                },
                success: function(evidencia_img) {
                    alert('Imagen obtenida con éxito.');
                    var downloadLink = document.createElement('a');
                    downloadLink.href = evidencia_img;
                    downloadLink.download = '';
                    document.body.appendChild(downloadLink);
                    downloadLink.click();
                    document.body.removeChild(downloadLink);
                }
            });
        });
    }
</script>

<?php
include_once '../PHP/Footer.php';
?>