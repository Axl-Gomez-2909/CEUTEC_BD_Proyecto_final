<?php include("db.php")?>

<?php include("includes/header.php")?>


<div class="container">
    <div class="row">
        <a class="nav-link" href="/formularios_action/proveedores_formulario_ingreso.php">Agregar Proveedoor</a>
    </div>
    <div class="row">
        <table class="table table-bordered">
            <thead>
                <tr>      
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Direccion</th>
                    <th>RTN</th>
                    <th>Ciudad</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    
                    $resultado = $conexion->query("SELECT * FROM `Proveedores`");  

                    while($fila = $resultado->fetch_assoc()){ ?>	 	 	 	
                     <tr>
                        <td> 
                            <?php  echo $fila['ID']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['Nombre']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['Direccion']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['RTN']; ?>
                        </td>

                        <td> 
                            <?php  echo $fila['Ciudad']; ?>
                        </td>

                        <td>
                            <a href="proveedores_formulario_editar.php?ID=<?php echo $fila['ID']; ?> ">Editar</a>                            
                            <a href="proveedores_db_eliminar.php?ID=<?php echo $fila['ID']; ?> ">Eliminar</a>                            
                        </td>

                    </tr>

                    <?php };
                                        
                ?>

            </tbody>
          
        </table>
    </div>
</div>

  


<?php include("includes/footer.php")?>
