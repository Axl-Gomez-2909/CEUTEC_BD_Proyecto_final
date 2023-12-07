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
     
        $sql="DELETE FROM acompanantesplatos WHERE ID = $Codigo"; 
       
        if ($conexion->query($sql)){
            echo "Acompañante de Platillo Eliminado con exito";
            echo "<a href='../index.php'>Regresa al menu principal.</a>";
        }else{
            echo "Acompañante de Platillo no eliminado";
        }

        $conexion->close();
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       echo "<h3 style='color:red;'>Sucedio un error.".$error->getMessage()."</h3>";   
    }
?>