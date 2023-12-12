<?php
$usuario = "root";
$pass = "Arge2909";
$baseDatos = "manjares";
$servidor = "127.0.0.1";

try {
    $conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);

    if ($conexion->connect_error) {
        die("La conexión falló: " . $conexion->connect_error);
    }

    $codigo = $_POST['codigo'];
    $nombre = $_POST['Nombre'];
    $direccion = $_POST['Direccion'];
    $rtn = $_POST['RTN'];
    $ciudad = $_POST['Ciudad'];

    $sql = "UPDATE proveedores SET Nombre='$nombre', Direccion='$direccion', RTN='$rtn', Ciudad='$ciudad' WHERE ID = $codigo";

    if ($conexion->query($sql)) {
        echo "Proveedor actualizado con éxito ";
        echo "<a href='../index.php'>Regresa al menú principal.</a>";
    } else {
        echo "Error al actualizar proveedor: " . $conexion->error;
    }

    $conexion->close();

} catch (Exception $error) {
    echo "Ha sucedido un error, el cual es: " . $error->getMessage();
}
?>
