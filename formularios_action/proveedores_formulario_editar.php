<?php  
    include("db.php");

    if(isset($_GET['ID'])){
        
        $ID = $_GET['ID'];
        $resultado = $conexion->query("SELECT * FROM `Proveedores` WHERE ID=$ID");  
        $fila = $resultado->fetch_assoc();
        $registros = $resultado->num_rows;
        if($registros == 1){
            $Nombre = $fila['Nombre'];
            $Direccion = $fila['Direccion'];
            $RTN = $fila['RTN'];
            $Ciudad = $fila['Ciudad'];
            $PrecioVenta = $fila['PrecioVenta'];
        } 	 	 	
    }
?>

<?php include("includes/header.php")?>

<div class="container">
    <div class="row">
    <a class="nav-link" href="/formularios_action/proveedores_listado.php">Regresar</a>
    </div>


    <form action="proveedores_db_editar.php" method="post">
    <div class="row"> 
        <h2 class="mb-4">Formulario de Edicion de Productos</h2>
    </div>
    
        <div class="form-group">
            <label for="ID">Código del Producto:</label>
            <input type="number" class="form-control" id="ID" name="ID" value="<?php echo $ID  ?>" readonly>
        </div>        
         	 	 	 	
        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" value="<?php echo $Nombre  ?>" required>
        </div>
            
        <div class="form-group">
            <label for="Direccion">Direccion:</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" value="<?php echo $Direccion  ?>" required>          
        </div>

        <div class="form-group">
            <label for="RTN">RTN:</label>
            <input type="text" class="form-control" id="RTN" name="RTN" value="<?php echo $RTN  ?>" required>          
        </div>
        <div class="form-group">
            <label for="Ciudad">Ciudad:</label>
            <input type="text" class="form-control" id="Ciudad" name="Ciudad" value="<?php echo $Ciudad  ?>" required>          
        </div>   

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<?php include("includes/footer.php")?>