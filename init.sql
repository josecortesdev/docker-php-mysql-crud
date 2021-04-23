-- CREATE DATABASE IF NOT EXISTS dbname;
USE dbname;
CREATE TABLE IF NOT EXISTS `monedas` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `Nombre` VARCHAR(20) NULL,
  `Precio` INT NULL,
  PRIMARY KEY (`id`));

INSERT INTO monedas (`Nombre`, `Precio`) VALUES ('ADA', 2686), ('VET', 725), ('BNB', 537);

-- Crear la tabla sería así
-- CREATE TABLE `dbname`.`monedas` (
--   `id` INT NOT NULL AUTO_INCREMENT,
--   `Nombre` VARCHAR(45) NULL,
--   `Precio` INT NULL,
--   PRIMARY KEY (`id`));


-- Insertar uno en la tabla sería así
-- INSERT INTO mitabla (`Nombre`, `Precio`) VALUES ('Vechain', 700);