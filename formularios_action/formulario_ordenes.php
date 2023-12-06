<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Formulario de Orden</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-5">
    <h2 class="mb-4">Formulario de Ordenes</h2>

    <form action="procesar_orden.php" method="post">
        <div class="form-group">
            <label for="codigo">Código de la Orden:</label>
            <input type="number" class="form-control" id="codigo" name="codigo" required>
        </div>

        <div class="form-group">
            <label for="fecha_hora">Fecha y Hora:</label>
            <input type="datetime-local" class="form-control" id="fecha_hora" name="fecha_hora" required>
        </div>

        <div class="form-group">
            <label for="fecha_hora_envio">Fecha y Hora de Envío:</label>
            <input type="datetime-local" class="form-control" id="fecha_hora_envio" name="fecha_hora_envio" required>
        </div>

        <div class="form-group">
            <label for="fecha_hora_entrega">Fecha y Hora de Entrega:</label>
            <input type="datetime-local" class="form-control" id="fecha_hora_entrega" name="fecha_hora_entrega" required>
        </div>

        <div class="form-group">
            <label for="total">Total:</label>
            <input type="number" step="0.01" class="form-control" id="total" name="total" required>
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
