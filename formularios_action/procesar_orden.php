<?php
   $usuario="root";
   $pass="Arge2909";
   $baseDatos="PRODUCTOS_ORDENES";
   $servidor="127.0.0.1";

    try{
        $conexion=new mysqli($servidor, $usuario, $pass, $baseDatos);
        echo "Conexion exitosa, ";

        if (empty($_POST['codigo'])){
            echo "El codigo de la orden no se ingreso";
        }else{
            $codigo=$_POST['codigo'];
        }

        if (empty($_POST['fecha_hora'])){
            echo "La Fecha y hora no se ingreso";
        }else{
            $fecha_hora=$_POST['fecha_hora'];
        }

        if (empty($_POST['fecha_hora_envio'])){
            echo "La Fecha y hora del envio no se ingreso";
        }else{
            $fecha_hora_envio=$_POST['fecha_hora_envio'];
        }
        
        if (empty($_POST['fecha_hora_entrega'])){
            echo "La Fecha y hora de la entrega no se ingreso";
        }else{
            $fecha_hora_entrega=$_POST['fecha_hora_entrega'];
        }
        
        if (empty($_POST['total'])){
            echo "El total de la orden no se ingreso";
        }else{
            $total=$_POST['total'];
        }

        $sql="INSERT INTO tbl_orden (codigo_orden,fecha_hora,fecha_hora_envio,fecha_hora_entrega,total) VALUES ($codigo, '$fecha_hora', '$fecha_hora_envio', '$fecha_hora_entrega', $total)";

        if ($conexion->query($sql)){
            echo "Orden almacenado con exito";
        }else{
            echo "Orden no almacenado";
        }

        $conexion->close();
        
    }catch(Exception $error){
        echo "Ha sucedido un error, el cual es: ".$error->getMessage();
    }
?>