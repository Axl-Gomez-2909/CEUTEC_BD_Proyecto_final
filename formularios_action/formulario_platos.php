<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Platillos</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Formulario Platillos</h2>

    <form action="platos_ingreso.php" method="post">
        <div class="form-group">
            <label for="codigo">Código de plato:</label>
            <input type="number" class="form-control" id="codigo" name="codigo" required>
        </div>        

        <div class="form-group">
            <label for="NombrePlato">NombrePlato:</label>
            <input type="text" class="form-control" id="NombrePlato" name="NombrePlato" required>
        </div>
            
        <div class="form-group">
            <label for="PrecioVenta">PrecioVenta:</label>
            <input type="number" step="0.01" class="form-control" id="PrecioVenta" name="PrecioVenta" required>
        </div>

        <div class="form-group">
            <label for="FechaCreacion">Fecha Creacion:</label>
            <input type="datetime-local" class="form-control" id="FechaCreacion" name="FechaCreacion" required>
        </div>

        <div class="form-group">
            <label for="FechaModificacion">Fecha Modificacion:</label>
            <input type="datetime-local" class="form-control" id="FechaModificacion" name="FechaModificacion" required>
        </div>
        

        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
