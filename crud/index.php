
<?php

spl_autoload_register(function ($nombreClase) {
    include 'controllers/' . $nombreClase . '.php';
    include 'models/' . $nombreClase . '.php';
});


if (isset($_GET['accion'])) {
    $accion = $_GET['accion'];
} else {
    $accion = 'mostrar'; 
}

$vehiculoController = new VehiculoController();

switch ($accion) {
    case 'mostrar':
        $vehiculoController->mostrarVehiculos();
        break;
    case 'formulario_agregar':
        $vehiculoController->mostrarFormularioAgregar();
        break;
    
    default:
        $vehiculoController->mostrarVehiculos();
}

?>
