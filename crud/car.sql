
CREATE TABLE IF NOT EXISTS vehiculos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(255) NOT NULL,
    tipo VARCHAR(255) NOT NULL,
    placa VARCHAR(20) NOT NULL,
    color VARCHAR(255) NOT NULL
);


INSERT INTO vehiculos (marca, tipo, placa, color) VALUES
('Toyota', 'Sedán', 'ABC123', 'Rojo'),
('Honda', 'SUV', 'XYZ789', 'Azul'),
('Ford', 'Pickup', 'DEF456', 'Negro');
