-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema pasteleria
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `pasteleria` ;

-- -----------------------------------------------------
-- Schema pasteleria
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pasteleria` ;
USE `pasteleria` ;

-- -----------------------------------------------------
-- Table `pasteleria`.`usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pasteleria`.`usuario` ;

CREATE TABLE IF NOT EXISTS `pasteleria`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nombreUsuario` VARCHAR(45) NOT NULL,
  `apellidoUsuario` VARCHAR(45) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `clave` VARCHAR(45) NOT NULL,
  `nivel` VARCHAR(45) NULL,
  `fechaAlta` DATETIME NULL,
  `estado` ENUM('activo', 'baneado') NOT NULL DEFAULT 'activo',
  PRIMARY KEY (`idUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pasteleria`.`receta`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pasteleria`.`receta` ;

CREATE TABLE IF NOT EXISTS `pasteleria`.`receta` (
  `idReceta` INT NOT NULL AUTO_INCREMENT,
  `nombreReceta` VARCHAR(45) NOT NULL,
  `descripcionReceta` VARCHAR(250) NULL,
  `foto` VARCHAR(45) NULL,
  PRIMARY KEY (`idReceta`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pasteleria`.`ingrendientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pasteleria`.`ingrendientes` ;

CREATE TABLE IF NOT EXISTS `pasteleria`.`ingrendientes` (
  `idIngrendientes` INT NOT NULL AUTO_INCREMENT,
  `descripcionIngrediente` VARCHAR(80) NULL,
  `receta_idReceta` INT NOT NULL,
  PRIMARY KEY (`idIngrendientes`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pasteleria`.`paso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `pasteleria`.`paso` ;

CREATE TABLE IF NOT EXISTS `pasteleria`.`paso` (
  `idPaso` INT NOT NULL AUTO_INCREMENT,
  `descripcionPaso` VARCHAR(250) NULL,
  `receta_idReceta` INT NOT NULL,
  PRIMARY KEY (`idPaso`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `pasteleria`.`usuario`
-- -----------------------------------------------------
START TRANSACTION;
USE `pasteleria`;
INSERT INTO `pasteleria`.`usuario` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `email`, `clave`, `nivel`, `fechaAlta`, `estado`) VALUES (1, 'tatiana', 'andonegui', 'tati@gmail.com', '123', 'admin', '2022-12-18 17:35:46', 'activo');
INSERT INTO `pasteleria`.`usuario` (`idUsuario`, `nombreUsuario`, `apellidoUsuario`, `email`, `clave`, `nivel`, `fechaAlta`, `estado`) VALUES (2, 'rosa', 'gomez', 'gomez1@yahoo.com.ar', '456', 'usuario', '2022-12-18 17:36:46', 'activo');

COMMIT;


-- -----------------------------------------------------
-- Data for table `pasteleria`.`receta`
-- -----------------------------------------------------
START TRANSACTION;
USE `pasteleria`;
INSERT INTO `pasteleria`.`receta` (`idReceta`, `nombreReceta`, `descripcionReceta`, `foto`) VALUES (1, 'Galletitas Navideñas', 'Galletitas de manteca con glaseado real.', NULL);

COMMIT;


-- -----------------------------------------------------
-- Data for table `pasteleria`.`ingrendientes`
-- -----------------------------------------------------
START TRANSACTION;
USE `pasteleria`;
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (1, '225 g manteca', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (2, '100 g azúcar', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (3, '200 g harina', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (4, '100 g maizena', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (5, '360 g azúcar impalpable', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (6, '2 cucharas soperas merengue en polvo', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (7, '1 cucharita esencia de vainilla', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (8, '6 a 10 cucharadas agua', 1);
INSERT INTO `pasteleria`.`ingrendientes` (`idIngrendientes`, `descripcionIngrediente`, `receta_idReceta`) VALUES (9, 'Colorante vegetal blanco', 1);

COMMIT;


-- -----------------------------------------------------
-- Data for table `pasteleria`.`paso`
-- -----------------------------------------------------
START TRANSACTION;
USE `pasteleria`;
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (1, 'Precalentamos el horno a 180 grados', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (2, 'Tamizar la harina y la maicena en un bowl. En la procesadora molemos el azúcar para que quede más fina y separamos en otro bowl. A el azúcar le agregamos la manteca a temperatura ambiente y amasamos integrando todo.', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (3, 'De a poco incorporamos la harina y amasamos solo un poco. Llevar a la heladera por 5 minutos con un papel film o un trapo.', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (4, 'Con ayuda de un palo de amasar y harina sobre una superficie plana estiramos nuestra masa y con nuestros cortadores de galletas marcamos las fórmulas deseadas. Con una espátula las sacamos y las colocamos sobre una asadera para horno previamente aceitada.', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (5, 'Llevar al horno 10 minutos (ir chequeando cada 3 minutos) hasta que estén doradas. Dejar enfriar por completo para agregar el glaseado.', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (6, 'Para el glaseado poner el azúcar impalpable y en merengue en polvo en un bowl y mezclar. Agregar la esencia de vainilla y el agua e ir mezclando hasta que quede consistencia merengue.', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (7, 'Separar en bowls y teñir con los colorantes y cubrir con papel film. Rellenar mangas y colocar una gomita al final de la manga para que el merengue no se seque. Preparar los confites para agregarlo cuando el merengue aún este húmedo.', 1);
INSERT INTO `pasteleria`.`paso` (`idPaso`, `descripcionPaso`, `receta_idReceta`) VALUES (8, 'Decorar las galletas y dejarlas separadas para que se sequen. Una vez secas, Disfrutar', 1);

COMMIT;

