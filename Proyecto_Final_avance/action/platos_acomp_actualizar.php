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
             
        
        if ((!empty($_POST['codigo'])) && (!empty($_POST['codigo_plato'])) 
        && (!empty($_POST['codigo_acom'])) && (!empty($_POST['Cantidad'])) ){
            $consultaSql="UPDATE acompanantesplatos SET PlatoID='$Codigo_plato', AcompananteID=$Codigo_acomp, 
            cantidadUtilizada='$Cantidad' WHERE ID=$Codigo";

            if ($conexion->query($consultaSql)){
                echo "Acompañante de Platillo modificado.";
                echo "<a href='../index.php'>Regresa al menu principal.</a>";
            }else{
                echo "Acompañante de Platillo no ingresado";
            }  
        }else{
            echo "Olvido ingresar un valor para los datos a modificar.";
        } 

        $conexion->close();
        
    }catch(Exception $error){
       echo "Fallo al conectar a MySQL: (" . $conexion->connect_errno . ") " . $conexion->connect_error;
       echo "<h3 style='color:red;'>Sucedio un error.".$error->getMessage()."</h3>";   
    }
?>