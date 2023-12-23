

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario para Agregar Vehículo</title>
</head>
<body>

<h2>Agregar Vehículo</h2>

<form method='post' action='agregar_vehiculo.php'>
    <label for='marca'>Marca:</label>
    <input type='text' name='marca' required>
    <label for='tipo'>Tipo:</label>
    <input type='text' name='tipo' required>
    <label for='placa'>Placa:</label>
    <input type='text' name='placa' required>
    <label for='color'>Color:</label>
    <input type='text' name='color' required>
    <button type='submit'>Agregar</button>
</form>

</body>
</html>
