
USE dbname;
CREATE TABLE IF NOT EXISTS `productos` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NULL,
  `Precio` DECIMAL(10,2) NULL,
  PRIMARY KEY (`id`));

INSERT INTO productos (`Nombre`, `Precio`) VALUES ('iPhone', 809), ('iPad', 379), ('MacBook Pro de 13', 1449), ('MacBook Air M1', 1129), ('Xiaomi Mi 11 Lite', 299.99);

