<?php


    try{

        include("db.php");    

        echo "Conexion exitosa, ";

        if (empty($_POST['NombreProducto'])){
            echo "El nombre del producto no se ingreso";
        }else{
            $NombreProducto=$_POST['NombreProducto'];
        }

        if (empty($_POST['UbicacionBodega'])){
            echo "La UbicacionBodega del producto no se ingreso";
        }else{
            $UbicacionBodega=$_POST['UbicacionBodega'];
        }

        if (empty($_POST['PrecioCosto'])){
            echo "El PrecioCosto del producto no se ingreso";
        }else{
            $PrecioCosto=$_POST['PrecioCosto'];
        }

        if (empty($_POST['PrecioVenta'])){
            echo "El PrecioVenta del producto no se ingreso";
        }else{
            $PrecioVenta=$_POST['PrecioVenta'];
        }
        
        if (empty($_POST['CantidadExistencia'])){
            echo "La cantidad del producto no se ingreso";
        }else{
            $CantidadExistencia=$_POST['CantidadExistencia'];
        }

        $sql="INSERT INTO productos (NombreProducto,UbicacionBodega,PrecioCosto,PrecioVenta,CantidadExistencia) 
        VALUES ($NombreProducto, '$UbicacionBodega', '$PrecioCosto', $PrecioVenta, $CantidadExistencia)";

        if ($conexion->query($sql)){
            echo "Producto almacenado con exito";
        }else{
            echo "OrdProductoen no almacenado";
        }
        $conexion->close();

        header("Location: productos_listado.php");
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;   
    }
?>