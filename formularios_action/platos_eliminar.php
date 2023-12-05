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
      
        $sql="DELETE FROM platos WHERE ID = $Codigo";
        if ($conexion->query($sql)){
            echo "Platillo eliminado con exito. <br>";
            echo "<a href='../index.php'>Regresa al menu principal.</a>";
        }
        $conexion->close();
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       echo "<h3 style='color:red;'>Sucedio un error.".$error->getMessage()."</h3>";   
    }
?>