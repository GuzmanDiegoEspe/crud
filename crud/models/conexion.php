

<?php

class Conexion {
    private $host = 'localhost';
    private $usuario = 'root';
    private $clave = 'root';
    private $db = 'car.sql';

    protected $conexion;

    public function __construct() {
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave, $this->db);

        if ($this->conexion->connect_error) {
            die("Error de conexión: " . $this->conexion->connect_error);
        }
    }
}

?>
