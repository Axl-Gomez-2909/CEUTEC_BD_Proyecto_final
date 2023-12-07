<?php
$usuario = "root";
$pass = "Arge2909";
$baseDatos = "manjares";
$servidor = "127.0.0.1";

try {
    $conexion = new mysqli($servidor, $usuario, $pass, $baseDatos);

    $consultaSql = "SELECT Usuario, MenuID, DescripcionOperacion, FechaHoraOperacion
    FROM BitacoraMenus
    ORDER BY FechaHoraOperacion DESC;
    ";
    $resultado = $conexion->query($consultaSql);

    if ($resultado->num_rows > 0) {
        ?>
        <!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Manjares | Proyecto</title>

    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="../css/animate.css" rel="stylesheet">
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>

<div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <!-- Navegacion -->
                    <li class="active">
                        <a href="../index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Reportes</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="platospure.php">Platos/Puré</li>
                            <li ><a href="platosmenu.php">Platos/Menú</a></li>
                            <li ><a href="platosmenuacom.php">Platos/Menú/Acomp</a></li>
                            <li ><a href="productos.php">Productos</a></li>
                            <li ><a href="proveedores.php">Proveedores</a></li>
                            <li class="active"><a href="bitacora.php">Bitácoras menú</a></li>
                        </ul>
                    </li>
                  
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                <div class="row wrapper border-bottom white-bg page-heading">
                        <div class="col-lg-10">
                            <h1>Bitácoras menú</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2"></div>
                <div class="container mt-5">
            <h4 class="mb-4">Mostrar toda la información de la tabla bitácoras menú y ordenada de forma descendente por la fecha y hora.</h4>
            <table class="table table-bordered">
                <thead class="thead-dark">
                <tr>
                    <th>Usuario</th>
                    <th>Codigo del menú</th>
                    <th>Descripcion de la operación</th>
                    <th>Fecha y Hora de la operación</th>
                </tr>
                </thead>
                <tbody>
                <?php
                while ($fila = $resultado->fetch_assoc()) {
                    ?>
                    <tr>
                        <td><?= $fila['Usuario'] ?></td>
                        <td><?= $fila['MenuID'] ?></td>
                        <td><?= $fila['DescripcionOperacion'] ?></td>
                        <td><?= $fila['FechaHoraOperacion'] ?></td>
                    </tr>
                    <?php
                }
                ?>
                </tbody>
            </table>
        </div>
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Peity -->
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>
    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>
    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>


</body>
</html>

        <?php
    } else {
        echo "<h2 style='color:blue;'>La consulta no obtuvo registros.</h2>";
    }

    $conexion->close();
} catch (Exception $error) {
    echo "<h3 style='color:red;'>Sucedio un error." . $error->getMessage() . "</h3>";
}
?>

