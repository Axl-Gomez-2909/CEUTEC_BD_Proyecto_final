<?php
    $usuario="root";
    $pass="ServerAcceso.1";
    $baseDatos="manjares";
    $servidor="127.0.0.1";

    try{
        $conexion=new mysqli($servidor, $usuario, $pass, $baseDatos);        

        echo "Conexion exitosa, ";

        if (empty($_POST['codigo'])){
            echo "El codigo no se ingreso";
        }else{
            $Codigo=$_POST['codigo'];
        }

        if (empty($_POST['codigo_plato'])){
            echo "El codigo del platillo no se ingreso";
        }else{
            $Codigo_plato=$_POST['codigo_plato'];
        }

        if (empty($_POST['codigo_acom'])){
            echo "El codigo del acompañante no se ingreso";
        }else{
            $Codigo_acomp=$_POST['codigo_acom'];
        }

        if (empty($_POST['Cantidad'])){
            echo "La Cantidad  de acompañantes no se ingreso";
        }else{
            $Cantidad=$_POST['Cantidad'];
        }
        
       

        $sql="INSERT INTO acompanantesplatos (ID,PlatoID,AcompananteID,cantidadUtilizada) 
        VALUES ($Codigo,$Codigo_plato, $Codigo_acomp, $Cantidad)";

        if ($conexion->query($sql)){
            echo "Acompañante de Platillo almacenado con exito";
            echo "<a href='../index.php'>Regresa al menu principal.</a>";
        }else{
            echo "Acompañante de Platillo no almacenado";
        }

        $conexion->close();
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       echo "<h3 style='color:red;'>Sucedio un error.".$error->getMessage()."</h3>";   
    }
?>