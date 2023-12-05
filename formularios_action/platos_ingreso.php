<?php
    $usuario="root";
    $pass="ServerAcceso.1";
    $baseDatos="manjares";
    $servidor="127.0.0.1";

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
        
        if (empty($_POST['FechaCreacion'])){
            echo "La Fecha de creacion no se ingreso";
        }else{
            $fecha_creacion=$_POST['FechaCreacion'];
        }

        if (empty($_POST['FechaModificacion'])){
            echo "La Fecha de modificacion no se ingreso";
        }else{
            $fecha_modificacion=$_POST['FechaModificacion'];
        }

        $sql="INSERT INTO platos (ID,Nombre,precio,FechaModificacion, FechaCreacion) 
        VALUES ($Codigo,'$NombrePlato', $PrecioVenta, '$fecha_modificacion', '$fecha_creacion')";

        if ($conexion->query($sql)){
            echo "Platillo almacenado con exito";
            echo "<a href='../index.php'>Regresa al menu principal.</a>";
        }else{
            echo "Platillo no almacenado";
        }

        $conexion->close();
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       echo "<h3 style='color:red;'>Sucedio un error.".$error->getMessage()."</h3>";   
    }
?>