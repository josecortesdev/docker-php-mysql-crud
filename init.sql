-- CREATE DATABASE IF NOT EXISTS dbname;
USE dbname;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NULL,
  `Precio` DECIMAL(10,2) NULL,
  PRIMARY KEY (`id`));

INSERT INTO productos (`Nombre`, `Precio`) VALUES ('iPhone', 809), ('iPad', 379), ('MacBook Pro de 13', 1449), ('MacBook Air M1', 1129), ('Xiaomi Mi 11 Lite', 299.99);

-- Crear la tabla sería así
-- CREATE TABLE `dbname`.`productos` (
--   `id` INT NOT NULL AUTO_INCREMENT,
--   `Nombre` VARCHAR(45) NULL,
--   `Precio` INT NULL,
--   PRIMARY KEY (`id`));


-- Insertar uno en la tabla sería así
-- INSERT INTO mitabla (`Nombre`, `Precio`) VALUES ('Vechain', 700);