<?php
$usuario = "root";
$pass = "Arge2909";
$baseDatos = "manjares";
$servidor = "127.0.0.1";

try {
    $conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);

    $ID = $_POST['ID'];
    
    if (empty($_POST['NombreProducto'])){
        echo "El nombre del producto no se ingreso";
    }else{
        $NombreProducto=$_POST['NombreProducto'];
    }
    

    $sql = "DELETE FROM productos WHERE ID = $ID && NombreProducto='$NombreProducto'";

    if ($conexion->query($sql)) {
        echo "Producto eliminado con éxito";
        echo "<a href='../index.php'>Regresa al menú principal.</a>";
    } else {
        echo "Producto no eliminado: " . $conexion->error;
    }

    $conexion->close();

} catch (Exception $error) {
    echo "Ha sucedido un error, el cual es: " . $error->getMessage();
}
?>
