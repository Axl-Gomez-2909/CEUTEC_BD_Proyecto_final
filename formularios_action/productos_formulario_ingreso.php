<?php include("includes/header.php")?>

<div class="container">
    <div class="row">
        <a class="nav-link" href="/formularios_action/productos_listado.php">Regresar</a>
    </div>  

    <form action="productos_db_ingreso.php" method="post">
        <div class="row">
           <h2 class="mb-4">Formulario de Ingreso de Productos</h2>
        </div>        

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

<?php include("includes/footer.php")?>