

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>CRUD de Vehículos</title>
</head>
<body>

<h2>Registros de Vehículos</h2>

<?php

if ($resultado->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Marca</th>
                <th>Tipo</th>
                <th>Placa</th>
                <th>Color</th>
            </tr>";

    while ($fila = $resultado->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['marca']}</td>
                <td>{$fila['tipo']}</td>
                <td>{$fila['placa']}</td>
                <td>{$fila['color']}</td>
            </tr>";
    }

    echo "</table>";
} else {
    echo "No hay registros de vehículos.";
}

?>

<hr>

<a href="formulario_agregar.php">Agregar Vehículo</a>

</body>
</html>
