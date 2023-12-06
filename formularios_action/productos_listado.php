<?php include("db.php")?>

<?php include("includes/header.php")?>


<div class="container">
    <div class="row">
        <a class="nav-link" href="/formularios_action/productos_formulario_ingreso.php">Agregar Producto</a>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre Producto</th>
                    <th>Ubicacion</th>
                    <th>Existencia</th>
                    <th>Precio Costo</th>
                    <th>Precio Venta</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $resultado = $conexion->query("SELECT * FROM `Productos`");  

                    while($fila = $resultado->fetch_assoc()){ ?>

                     <tr>
                        <td> 
                            <?php  echo $fila['ID']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['NombreProducto']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['UbicacionBodega']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['CantidadExistencia']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['PrecioCosto']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['PrecioVenta']; ?>
                        </td>

                        <td>
                            <a href="productos_formulario_editar.php?ID=<?php echo $fila['ID']; ?> ">Editar</a>                            
                            <a href="productos_db_eliminar.php?ID=<?php echo $fila['ID']; ?> ">Eliminar</a>                                                        
                        </td>

                    </tr>

                    <?php };
                                        
                ?>

            </tbody>
          
        </table>
    </div>
</div>

  


<?php include("includes/footer.php")?>
