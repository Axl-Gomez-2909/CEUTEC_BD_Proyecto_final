<?php
$usuario = "root";
$pass = "Arge2909";
$baseDatos = "manjares";
$servidor = "127.0.0.1";

try {
    $conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);
    echo "Conexion exitosa, ";
    
    if (empty($_POST['codigo'])) {
        echo "El código del acompañante no se ingresó";
    } else {
        $codigo = $_POST['codigo'];
    }
    
    if (empty($_POST['productoId'])) {
        echo "El productoId del producto no se ingresó";
    } else {
        $productoId = $_POST['productoId'];
    }
    if (empty($_POST['acompananteId'])) {
        echo "El acompananteId del producto no se ingresó";
    } else {
        $acompananteId = $_POST['acompananteId'];
    }
    if (empty($_POST['cantidad'])) {
        echo "El cantidad del acompañante no se ingresó";
    } else {
        $cantidad = $_POST['cantidad'];
    }

    if ((!empty($_POST['codigo'])) && (!empty($_POST['productoId'])) && (!empty($_POST['acompananteId'])) &&(!empty($_POST['cantidad']))) {
        $consultaSql = "UPDATE ProductosAcompanantes SET ProductoID=$productoId, AcompananteID=$acompananteId , CantidadUtilizada=$cantidad 
        WHERE ID=$codigo";

        if ($conexion->query($consultaSql)) {
            echo "Producto Acompañante modificado con éxito";
        } else {
            echo "Producto Acompañante no modificado";
        }
    } else {
        echo "Olvidó ingresar un valor para los datos a modificar.";
    }

    $conexion->close();
} catch (Exception $error) {
    echo "Ha sucedido un error, el cual es: " . $error->getMessage();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Resultado</title>
</head>
<body>
    <div class="container mt-3">
        <a href="../index.php" class="btn btn-primary">Regresar</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
