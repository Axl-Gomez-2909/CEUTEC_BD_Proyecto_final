<?php  
    include("db.php");

    if(isset($_GET['ID'])){
        
        $ID = $_GET['ID'];
        $resultado = $conexion->query("SELECT * FROM `Productos` WHERE ID=$ID");  
        $fila = $resultado->fetch_assoc();
        $registros = $resultado->num_rows;
        if($registros == 1){
            $NombreProducto = $fila['NombreProducto'];
            $UbicacionBodega = $fila['UbicacionBodega'];
            $CantidadExistencia = $fila['CantidadExistencia'];
            $PrecioCosto = $fila['PrecioCosto'];
            $PrecioVenta = $fila['PrecioVenta'];
        }
    }
?>

<?php include("includes/header.php")?>

<div class="container">
    <div class="row">
    <a class="nav-link" href="/formularios_action/productos_listado.php">Regresar</a>
    </div>


    <form action="productos_db_editar.php" method="post">
    <div class="row"> 
        <h2 class="mb-4">Formulario de Edicion de Productos</h2>
    </div>
    
        <div class="form-group">
            <label for="ID">Código del Producto:</label>
            <input type="number" class="form-control" id="ID" name="ID" value="<?php echo $ID  ?>" readonly>
        </div>        

        <div class="form-group">
            <label for="NombreProducto">NombreProducto:</label>
            <input type="text" class="form-control" id="NombreProducto" name="NombreProducto" value="<?php echo $NombreProducto  ?>" required>
        </div>
            
        <div class="form-group">
            <label for="UbicacionBodega">UbicacionBodega:</label>
            <input type="text" class="form-control" id="UbicacionBodega" name="UbicacionBodega" value="<?php echo $UbicacionBodega  ?>" required>          
        </div>

        <div class="form-group">
            <label for="CantidadExistencia">Cantidad en Existencia:</label>
            <input type="number" class="form-control" id="CantidadExistencia" name="CantidadExistencia" value="<?php echo $CantidadExistencia  ?>" required>
        </div>

        <div class="form-group">
            <label for="PrecioCosto">PrecioCosto:</label>
            <input type="number" step="0.01" class="form-control" id="PrecioCosto" name="PrecioCosto" value="<?php echo $PrecioCosto  ?>" required>
        </div>
        <div class="form-group">
            <label for="PrecioVenta">PrecioVenta:</label>
            <input type="number" step="0.01" class="form-control" id="PrecioVenta" name="PrecioVenta" value="<?php echo $PrecioVenta  ?>" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<?php include("includes/footer.php")?>