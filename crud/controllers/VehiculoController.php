

<?php

include('../models/Conexion.php');

class VehiculoController extends Conexion {

    public function mostrarVehiculos() {
        $query = "SELECT * FROM vehiculos";
        $resultado = $this->conexion->query($query);

        include('../views/mostrar_vehiculos.php');
    }

    public function mostrarFormularioAgregar() {
        include('../views/formulario_agregar.php');
    }

    public function agregarVehiculo($marca, $tipo, $placa, $color) {
        $query = "INSERT INTO vehiculos (marca, tipo, placa, color) VALUES ('$marca', '$tipo', '$placa', '$color')";
        $this->conexion->query($query);
        header("Location: index.php");
    }

    
}

?>
