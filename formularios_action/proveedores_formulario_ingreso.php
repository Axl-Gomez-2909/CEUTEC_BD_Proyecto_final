<?php include("includes/header.php")?>

<div class="container">
    <div class="row">
        <a class="nav-link" href="/formularios_action/proveedores_listado.php">Regresar</a>
    </div>  
 	 	
    <form action="proveedores_db_ingreso.php" method="post">
        <div class="row">
           <h2 class="mb-4">Formulario de Ingreso de Proveedores</h2>
        </div>        

        <div class="form-group">
            <label for="codigo">Código del Producto:</label>
            <input type="number" class="form-control" id="codigo" name="codigo" readonly>
        </div>        

        <div class="form-group">
            <label for="Nombre">Nombre:</label>
            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
        </div>
            
        <div class="form-group">
            <label for="Direccion">Direccion:</label>
            <input type="text" class="form-control" id="Direccion" name="Direccion" required>          
        </div>

        <div class="form-group">
            <label for="RTN">RTN:</label>
            <input type="text" class="form-control" id="RTN" name="RTN" required>          
        </div>

        <div class="form-group">
            <label for="Ciudad">Ciudad:</label>
            <input type="text" class="form-control" id="Ciudad" name="Ciudad" required>          
        </div>

     

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>

<?php include("includes/footer.php")?>