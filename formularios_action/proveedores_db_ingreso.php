<?php


    try{
        
        include("db.php");    

        echo "Conexion exitosa, ";

        if (empty($_POST['Nombre'])){
            echo "El nombre del producto no se ingreso";
        }else{
            $Nombre=$_POST['Nombre'];
        }

        if (empty($_POST['Direccion'])){
            echo "La UbicacionBodega del producto no se ingreso";
        }else{
            $Direccion=$_POST['Direccion'];
        }

        if (empty($_POST['RTN'])){
            echo "El PrecioCosto del producto no se ingreso";
        }else{
            $RTN=$_POST['RTN'];
        }

        if (empty($_POST['Ciudad'])){
            echo "El PrecioVenta del producto no se ingreso";
        }else{
            $Ciudad=$_POST['Ciudad'];
        }
        

        $sql="INSERT INTO proveedores(Nombre,Direccion,RTN,Ciudad) 
        VALUES ('$Nombre', '$Direccion', '$RTN', '$Ciudad')";

        echo $sql;

        if ($conexion->query($sql)){
            echo "Producto almacenado con exito";
        }else{
            echo "OrdProductoen no almacenado";
        }
        $conexion->close();

        header("Location: proveedores_listado.php");
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;   
    }
?>