<?php
    $usuario = "root";
    $pass = "Arge2909";
    $baseDatos = "manjares";
    $servidor = "127.0.0.1";

    try{
        $conexion=new mysqli($servidor, $usuario, $pass, $baseDatos);        

        echo "Conexion exitosa, ";

        if (empty($_POST['codigo'])){
            echo "El codigo del platillo no se ingreso";
        }else{
            $Codigo=$_POST['codigo'];
        }

        if (empty($_POST['NombrePlato'])){
            echo "El nombre del platillo no se ingreso";
        }else{
            $NombrePlato=$_POST['NombrePlato'];
        }
        
        if (empty($_POST['PrecioVenta'])){
            echo "El PrecioVenta  del Platillo no se ingreso";
        }else{
            $PrecioVenta=$_POST['PrecioVenta'];
        }        
        

        if (empty($_POST['FechaModificacion'])){
            echo "La Fecha de modificacion no se ingreso";
        }else{
            $fecha_modificacion=$_POST['FechaModificacion'];
        }

        if ((!empty($_POST['codigo'])) && (!empty($_POST['NombrePlato'])) 
        && (!empty($_POST['PrecioVenta'])) && (!empty($_POST['FechaModificacion'])) ){
            $consultaSql="UPDATE platos SET nombre='$NombrePlato', precio=$PrecioVenta, 
            fechamodificacion='$fecha_modificacion' WHERE ID=$Codigo";

            if ($conexion->query($consultaSql)){
                echo "Platillo modificado.";
                echo "<a href='../index.php'>Regresa al menu principal.</a>";
            }else{
                echo "Platillo no ingresado";
            }  
        }else{
            echo "Olvido ingresar un valor para los datos a modificar.";
        }      

        $conexion->close();
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       echo "<h3 style='color:red;'>Sucedio un error.".$error->getMessage()."</h3>";   
    }
?>
