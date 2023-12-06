<?php
   $usuario="root";
   $pass="Arge2909";
   $baseDatos="PRODUCTOS_ORDENES";
   $servidor="127.0.0.1";

    try{
        $conexion=new mysqli($servidor, $usuario, $pass, $baseDatos);
        echo "Conexion exitosa, ";

        if (empty($_POST['codigo'])){
            echo "El codigo de la categoria no se ingreso";
        }else{
            $codigo=$_POST['codigo'];
        }

        if (empty($_POST['nombre'])){
            echo "El  nombre de la catergoria no se ingreso";
        }else{
            $nombre=$_POST['nombre'];
        }

        

        $sql="INSERT INTO tbl_categoria (codigo_categoria,nombre) VALUES ($codigo, '$nombre')";

        if ($conexion->query($sql)){
            echo "Categoria almacenado con exito";
        }else{
            echo "Categoria no almacenado";
        }

        $conexion->close();
        
    }catch(Exception $error){
        echo "Ha sucedido un error, el cual es: ".$error->getMessage();
    }
?>