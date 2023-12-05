<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Productos</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Formulario de Productos</h2>

    <form action="productos_ingreso.php" method="post">
        <div class="form-group">
            <label for="codigo">Código del Producto:</label>
            <input type="number" class="form-control" id="codigo" name="codigo" readonly>
        </div>        

        <div class="form-group">
            <label for="NombreProducto">NombreProducto:</label>
            <input type="text" class="form-control" id="NombreProducto" name="NombreProducto" required>
        </div>
            
        <div class="form-group">
            <label for="UbicacionBodega">UbicacionBodega:</label>
            <input type="text" class="form-control" id="UbicacionBodega" name="UbicacionBodega" required>          
        </div>

        <div class="form-group">
            <label for="CantidadExistencia">Cantidad en Existencia:</label>
            <input type="number" class="form-control" id="CantidadExistencia" name="CantidadExistencia" required>
        </div>

        <div class="form-group">
            <label for="PrecioCosto">PrecioCosto:</label>
            <input type="number" step="0.01" class="form-control" id="PrecioCosto" name="PrecioCosto" required>
        </div>
        <div class="form-group">
            <label for="PrecioVenta">PrecioVenta:</label>
            <input type="number" step="0.01" class="form-control" id="PrecioVenta" name="PrecioVenta" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
