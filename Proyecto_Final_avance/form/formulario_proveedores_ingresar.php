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
                    <li >
                        <a href="../index.php"><i class="fa fa-th-large"></i> <span class="nav-label">Productos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="formulario_productos_ingresar.php">Formulario/Ingresar</a></li>
                            <li ><a href="formulario_productos_modificar.php">Formulario/Modificar</a></li>
                            <li ><a href="formulario_productos_eliminar.php">Formulario/Eliminar</a></li>
                        </ul>
                    </li>
                    <li class="active">
                        <a href="../index.php"><i class="fa fa-truck"></i> <span class="nav-label">Proveedores</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li class="active"><a href="formulario_proveedores_ingresar.php">Formulario/Ingresar</a></li>
                            <li ><a href="formulario_proveedores_modificar.php">Formulario/Modificar</a></li>
                            <li ><a href="formulario_proveedores_eliminar.php">Formulario/Eliminar</a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="../index.php"><i class="fa fa-th"></i> <span class="nav-label">Acompañantes</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="formulario_acompanates_ingresar.php">Formulario/Ingresar</a></li>
                            <li ><a href="formulario_acompanates_modificar.php">Formulario/Modificar</a></li>
                            <li ><a href="formulario_acompanates_eliminar.php">Formulario/Eliminar</a></li>
                        </ul>
                    </li>
                    <li >
                        <a href="../index.php"><i class="fa fa-spinner"></i> <span class="nav-label">Productos/Acomp</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li ><a href="formulario_proacomp_ingresar.php">Formulario/Ingresar</a></li>
                            <li class="active"><a href="formulario_proacomp_modificar.php">Formulario/Modificar</a></li>
                            <li ><a href="formulario_proacomp_eliminar.php">Formulario/Eliminar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-cutlery"></i> <span class="nav-label">Platos</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                        <li class="active"><a href="formulario_platos_ingresar.php">Formulario/Ingresar</a></li>
                            <li ><a href="formulario_platos_modificar.php">Formulario/Modificar</a></li>
                            <li ><a href="formulario_platos_eliminar.php">Formulario/Eliminar</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="../index.php"><i class="fa fa-puzzle-piece"></i> <span class="nav-label">Platos/Acompañantes</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="formulario_platoscomp_ingresar.php">Formulario/Ingresar</a></li>
                            <li ><a href="formulario_platoscomp_modificar.php">Formulario/Modificar</a></li>
                            <li ><a href="formulario_platoscomp_eliminar.php">Formulario/Eliminar</a></li>
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
                            <h2>Ingreso Proveedores</h2>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="../index.php">Inicio</a>
                                </li>
                                <li class="breadcrumb-item active">
                                    <strong>Proveedores</strong>
                                </li>
                            </ol>
                        </div>
                        <div class="col-lg-2">

                        </div>
                    </div>
                    <h3>Formulario de ingreso de datos.</h3>
                   
                    <br>
                    <form action="../action/proveedores_db_ingreso.php" method="post">              

                        <div class="form-group">
                            <label for="Nombre">Nombre:</label>
                            <input type="text" class="form-control" id="Nombre" name="Nombre" required>
                        </div>

                        <div class="form-group">
                            <label for="Direccion">Direccion:</label>
                            <input type="text" class="form-control" id="Direccion" name="Direccion" required>          
                        </div>

                        <div class="form-group">
                            <label for="RTN">RTN:</label>
                            <input type="text" class="form-control" id="RTN" name="RTN" required>          
                        </div>

                        <div class="form-group">
                            <label for="Ciudad">Ciudad:</label>
                            <input type="text" class="form-control" id="Ciudad" name="Ciudad" required>          
                        </div>

                        <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>
                </div>
                <div class="col-lg-2"></div>
        
            </div>
        </div>
    </div>

    <!-- Mainly scripts -->
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.js"></script>
    <script src="../js/plugins/metisMenu/jquery.metisMenu.js"></script>

    <!-- Peity -->
    <script src="../js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="../js/inspinia.js"></script>
    <script src="../js/plugins/pace/pace.min.js"></script>
    <!-- GITTER -->
    <script src="../js/plugins/gritter/jquery.gritter.min.js"></script>
    <!-- Toastr -->
    <script src="../js/plugins/toastr/toastr.min.js"></script>

</body>
</html>