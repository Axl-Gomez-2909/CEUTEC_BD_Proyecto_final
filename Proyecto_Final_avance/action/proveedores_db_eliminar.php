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

    $sql = "DELETE FROM proveedores WHERE ID = $codigo AND Nombre = '$nombre'";

    if ($conexion->query($sql)) {
        echo "Proveedor eliminado con éxito";
        echo "<a href='../index.php'>Regresa al menú principal.</a>";
    } else {
        echo "Error al eliminar proveedor: " . $conexion->error;
    }

    $conexion->close();

} catch (Exception $error) {
    echo "Ha sucedido un error, el cual es: " . $error->getMessage();
}
?>
