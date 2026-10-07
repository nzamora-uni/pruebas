
## Confirmar
php -v
mysql --version
php -m | grep mysqli

## correr
sudo systemctl status mysql

### BD
SHOW DATABASES;

CREATE DATABASE escuela;

USE escuela;

CREATE TABLE calificaciones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100),
    materia VARCHAR(100),
    calificacion DECIMAL(5,2)
);
