<?php
   $usuario="root";
   $pass="Arge2909";
   $baseDatos="PRODUCTOS_ORDENES";
   $servidor="127.0.0.1";

    try{
        $conexion=new mysqli($servidor, $usuario, $pass, $baseDatos);
        echo "Conexion exitosa, ";

        if (empty($_POST['codigo'])){
            echo "El codigo del producto no se ingreso";
        }else{
            $codigo=$_POST['codigo'];
        }

        if (empty($_POST['nombre'])){
            echo "El nombre del producto no se ingreso";
        }else{
            $nombre=$_POST['nombre'];
        }

        if (empty($_POST['descripcion'])){
            echo "La descripcion del producto no se ingreso";
        }else{
            $descripcion=$_POST['descripcion'];
        }
        
        if (empty($_POST['precio'])){
            echo "El precio del producto no se ingreso";
        }else{
            $precio=$_POST['precio'];
        }
        
        if (empty($_POST['cantidad'])){
            echo "La cantidad del producto no se ingreso";
        }else{
            $cantidad=$_POST['cantidad'];
        }
        if (empty($_POST['categoria'])){
            echo "La categoria del producto no se ingreso";
        }else{
            $categoria=$_POST['categoria'];
        }

        $sql="INSERT INTO tbl_productos (codigo_producto,nombre,descripcion,precio_costo,cantidad_existencia,codigo_categoria) 
        VALUES ($codigo, '$nombre', '$descripcion', $precio, $cantidad,$categoria)";

        if ($conexion->query($sql)){
            echo "Producto almacenado con exito";
        }else{
            echo "OrdProductoen no almacenado";
        }

        $conexion->close();
        
    }catch(Exception $error){
        echo "Ha sucedido un error, el cual es: ".$error->getMessage();
    }
?>