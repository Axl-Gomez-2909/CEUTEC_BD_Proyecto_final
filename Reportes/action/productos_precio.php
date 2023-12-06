<?php
 $usuario="root";
 $pass="Arge2909";
 $baseDatos="PRODUCTOS_ORDENES";
 $servidor="127.0.0.1";

try {
    $conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);

    $consultaSql = "SELECT `codigo_producto`, `nombre`, `descripcion`, `precio_costo`, `cantidad_existencia`, `codigo_categoria`
                FROM `tbl_productos`
                WHERE `precio_costo` > 100";


    $resultado = $conexion->query($consultaSql);

    if ($resultado->num_rows > 0) {
        ?>
        <!DOCTYPE html>
        <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            <title>Tabla de Productos</title>
        </head>
        <body>

        <div class="container mt-5">
            <h2 class="mb-4">Tabla de Productos</h2>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Código del producto</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Precio</th>
                    <th>Cantidad existente</th>
                    <th>Categoria</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $fila['codigo_producto'] ?></td>
                        <td><?= $fila['nombre'] ?></td>
                        <td><?= $fila['descripcion'] ?></td>
                        <td><?= $fila['precio_costo'] ?></td>
                        <td><?= $fila['cantidad_existencia'] ?></td>
                        <td><?= $fila['codigo_categoria'] ?></td>
                        
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
        <div class="container mt-5">
        <a href="http://localhost/Reportes/index.php" class="list-group-item list-group-item-action" onclick="volverAlMenu()">
            Volver al Menú
        </a>
    </div>
</div>

        <script>
            function volverAlMenu() {
                alert("Redirigiendo al Menú...");
            }
        </script>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        </body>
        </html>
        <?php
    } else {
        echo "<h2 style='color:blue;'>La consulta no obtuvo registros.</h2>";
    }

    $conexion->close();
} catch (Exception $error) {
    echo "<h3 style='color:red;'>Sucedio un error." . $error->getMessage() . "</h3>";
}
?>
