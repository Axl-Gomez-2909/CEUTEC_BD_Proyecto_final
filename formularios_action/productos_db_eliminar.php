<?php

    try{
        include("db.php");    

        $ID = $_GET['ID'];

        $sql="DELETE FROM productos  WHERE ID = $ID";

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