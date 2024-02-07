CREATE DATABASE users_crud_php;
use users_crud_php;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nombre VARCHAR(50) NOT NULL,
  apellido VARCHAR(50) NOT NULL,
  username VARCHAR(50) NOT NULL UNIQUE,
  password VARCHAR(50) NOT NULL,
  email VARCHAR(50) NOT NULL UNIQUE
);

INSERT INTO users (nombre, apellido, username, password, email) VALUES
('Juan', 'Pérez', 'juanperez', 'contraseñaSegura123', 'juan.perez@email.com'),
('Laura', 'García', 'lauragarcia', 'miContraseña456', 'laura.garcia@email.com');