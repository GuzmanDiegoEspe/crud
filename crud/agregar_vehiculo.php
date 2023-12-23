

<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('../controllers/VehiculoController.php');

    $marca = $_POST['marca'];
    $tipo = $_POST['tipo'];
    $placa = $_POST['placa'];
    $color = $_POST['color'];

    $vehiculoController = new VehiculoController();
    $vehiculoController->agregarVehiculo($marca, $tipo, $placa, $color);
}

?>
