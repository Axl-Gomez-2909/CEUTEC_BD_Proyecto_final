<?php
 $usuario = "root";
 $pass = "Arge2909";
 $baseDatos = "manjares";
 $servidor = "127.0.0.1";

   try{
       $conexion=new mysqli($servidor, $usuario, $pass, $baseDatos);        

        $ID = $_POST['ID'];

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

        $sql="UPDATE productos SET NombreProducto='$NombreProducto',UbicacionBodega='$UbicacionBodega',PrecioCosto=$PrecioCosto,PrecioVenta=$PrecioVenta,CantidadExistencia=$CantidadExistencia WHERE ID = $ID";

        if ($conexion->query($sql)){
            echo "Producto almacenado con exito";
            echo "<a href='../index.php'>Regresa al menu principal.</a>";
        }else{
            echo "Producto no almacenado";
        }

        $conexion->close();
        
    }catch(Exception $error){
        echo "Ha sucedido un error, el cual es: " . $error->getMessage();
    }
?>