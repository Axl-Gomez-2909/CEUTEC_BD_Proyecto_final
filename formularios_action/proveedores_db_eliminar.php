<?php

    try{
        include("db.php");    

        $ID = $_GET['ID'];               
        
        $sql="DELETE FROM proveedores WHERE ID = $ID";
        echo $sql;
        if ($conexion->query($sql)){
            $message = "proveedor eliminado con exito";            
            echo $message;
        }else{
            echo "proveedor no eliminado";
        }

        $conexion->close();

        header("Location: proveedores_listado.php");
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;   
    }
?>