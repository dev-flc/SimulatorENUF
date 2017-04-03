$f = new  SimulatorENUF\User;
$f->name="admin";
$f->email="admin@gmail.com";
$f->password=bcrypt("123");
$f->foto="foto.png";
$f->type="administrador";
$f->save();
-- MySQL Script generated by MySQL Workbench
-- Mon Mar  6 16:06:49 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema simulador
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema simulador
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `simulador` DEFAULT CHARACTER SET utf8 ;
USE `simulador` ;

-- -----------------------------------------------------
-- Table `simulador`.`Rol`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Rol` (
  `ROL_id` INT NOT NULL,
  `ROL_nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`ROL_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`User` (
  `USE_id` INT NOT NULL,
  `USE_nombre` VARCHAR(45) NULL,
  `USE_email` VARCHAR(45) NULL,
  `USE_contrasena` VARCHAR(45) NULL,
  `Rol_ROL_id` INT NOT NULL,
  PRIMARY KEY (`USE_id`),
  INDEX `fk_User_Rol1_idx` (`Rol_ROL_id` ASC),
  CONSTRAINT `fk_User_Rol1`
    FOREIGN KEY (`Rol_ROL_id`)
    REFERENCES `simulador`.`Rol` (`ROL_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Direccion`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Direccion` (
  `DIR_id` INT NOT NULL,
  `DIR_calle` VARCHAR(45) NULL,
  `DIR_colonia` VARCHAR(45) NULL,
  `DIR_ciudad` VARCHAR(45) NULL,
  `DIR_estado` VARCHAR(45) NULL,
  `DIR_pais` VARCHAR(45) NULL,
  `DIR_cp` VARCHAR(45) NULL,
  PRIMARY KEY (`DIR_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Profesor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Profesor` (
  `PRO_id` INT NOT NULL,
  `PRO_nombre` VARCHAR(45) NULL,
  `PRO_apellido_p` VARCHAR(45) NULL,
  `PRO_apellido_m` VARCHAR(45) NULL,
  `PRO_sexo` VARCHAR(45) NULL,
  `User_USE_id` INT NOT NULL,
  `Direccion_DIR_id` INT NOT NULL,
  PRIMARY KEY (`PRO_id`),
  INDEX `fk_Profesor_User1_idx` (`User_USE_id` ASC),
  INDEX `fk_Profesor_Direccion1_idx` (`Direccion_DIR_id` ASC),
  CONSTRAINT `fk_Profesor_User1`
    FOREIGN KEY (`User_USE_id`)
    REFERENCES `simulador`.`User` (`USE_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Profesor_Direccion1`
    FOREIGN KEY (`Direccion_DIR_id`)
    REFERENCES `simulador`.`Direccion` (`DIR_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Curso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Curso` (
  `CUR_id` INT NOT NULL,
  `CUR_nombre` VARCHAR(45) NULL,
  `Profesor_PRO_id` INT NOT NULL,
  PRIMARY KEY (`CUR_id`),
  INDEX `fk_Curso_Profesor1_idx` (`Profesor_PRO_id` ASC),
  CONSTRAINT `fk_Curso_Profesor1`
    FOREIGN KEY (`Profesor_PRO_id`)
    REFERENCES `simulador`.`Profesor` (`PRO_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Unidad`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Unidad` (
  `UNI_id` INT NOT NULL,
  `UNI_nombre` VARCHAR(45) NULL,
  `Curso_CUR_id` INT NOT NULL,
  `UNI_fecha_exmanel_final` VARCHAR(45) NULL,
  PRIMARY KEY (`UNI_id`),
  INDEX `fk_Unidad_Curso1_idx` (`Curso_CUR_id` ASC),
  CONSTRAINT `fk_Unidad_Curso1`
    FOREIGN KEY (`Curso_CUR_id`)
    REFERENCES `simulador`.`Curso` (`CUR_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Tipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Tipo` (
  `TIP_id` INT NOT NULL,
  `TIP_nombre` VARCHAR(45) NULL,
  PRIMARY KEY (`TIP_id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Examen`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Examen` (
  `EXA_id` INT NOT NULL,
  `EXA_nombre` VARCHAR(45) NULL,
  `EXA_fecha` VARCHAR(45) NULL,
  `EXA_hora` VARCHAR(45) NULL,
  `Unidad_UNI_id` INT NOT NULL,
  `Tipo_TIP_id` INT NOT NULL,
  `EXA_calificacion` VARCHAR(45) NULL,
  `EXA_tiempo` VARCHAR(45) NULL,
  `EXA_intentos` VARCHAR(45) NULL,
  PRIMARY KEY (`EXA_id`),
  INDEX `fk_Examen_Unidad1_idx` (`Unidad_UNI_id` ASC),
  INDEX `fk_Examen_Tipo1_idx` (`Tipo_TIP_id` ASC),
  CONSTRAINT `fk_Examen_Unidad1`
    FOREIGN KEY (`Unidad_UNI_id`)
    REFERENCES `simulador`.`Unidad` (`UNI_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Examen_Tipo1`
    FOREIGN KEY (`Tipo_TIP_id`)
    REFERENCES `simulador`.`Tipo` (`TIP_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Pregunta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Pregunta` (
  `PRE_id` INT NOT NULL,
  `PRE_pregunta` VARCHAR(45) NULL,
  `Examen_EXA_id` INT NOT NULL,
  PRIMARY KEY (`PRE_id`),
  INDEX `fk_Pregunta_Examen1_idx` (`Examen_EXA_id` ASC),
  CONSTRAINT `fk_Pregunta_Examen1`
    FOREIGN KEY (`Examen_EXA_id`)
    REFERENCES `simulador`.`Examen` (`EXA_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Respuesta`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Respuesta` (
  `RES_id` INT NOT NULL,
  `RES_respuesta` VARCHAR(45) NULL,
  `Pregunta_PRE_id` INT NOT NULL,
  `Tipo_TIP_id` INT NOT NULL,
  PRIMARY KEY (`RES_id`),
  INDEX `fk_Respuesta_Pregunta_idx` (`Pregunta_PRE_id` ASC),
  INDEX `fk_Respuesta_Tipo1_idx` (`Tipo_TIP_id` ASC),
  CONSTRAINT `fk_Respuesta_Pregunta`
    FOREIGN KEY (`Pregunta_PRE_id`)
    REFERENCES `simulador`.`Pregunta` (`PRE_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Respuesta_Tipo1`
    FOREIGN KEY (`Tipo_TIP_id`)
    REFERENCES `simulador`.`Tipo` (`TIP_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Administrador`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Administrador` (
  `ADM_id` INT NOT NULL,
  `ADM_nombre` VARCHAR(45) NULL,
  `ADM_apellido_p` VARCHAR(45) NULL,
  `ADM_apellido_m` VARCHAR(45) NULL,
  `ADM_edad` VARCHAR(45) NULL,
  `ADM_sexo` VARCHAR(45) NULL,
  `User_USE_id` INT NOT NULL,
  `Direccion_DIR_id` INT NOT NULL,
  PRIMARY KEY (`ADM_id`),
  INDEX `fk_Administrador_User1_idx` (`User_USE_id` ASC),
  INDEX `fk_Administrador_Direccion1_idx` (`Direccion_DIR_id` ASC),
  CONSTRAINT `fk_Administrador_User1`
    FOREIGN KEY (`User_USE_id`)
    REFERENCES `simulador`.`User` (`USE_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Administrador_Direccion1`
    FOREIGN KEY (`Direccion_DIR_id`)
    REFERENCES `simulador`.`Direccion` (`DIR_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `simulador`.`Alumno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `simulador`.`Alumno` (
  `ALU_id` INT NOT NULL,
  `ALU_nombre` VARCHAR(45) NULL,
  `ALU_apellido_p` VARCHAR(45) NULL,
  `ALU_apellido_m` VARCHAR(45) NULL,
  `ALU_edad` VARCHAR(45) NULL,
  `ALU_sexo` VARCHAR(45) NULL,
  `ALU_matricula` VARCHAR(45) NULL,
  `User_USE_id` INT NOT NULL,
  `Direccion_DIR_id` INT NOT NULL,
  `Curso_CUR_id` INT NOT NULL,
  PRIMARY KEY (`ALU_id`),
  INDEX `fk_Alumno_User1_idx` (`User_USE_id` ASC),
  INDEX `fk_Alumno_Direccion1_idx` (`Direccion_DIR_id` ASC),
  INDEX `fk_Alumno_Curso1_idx` (`Curso_CUR_id` ASC),
  CONSTRAINT `fk_Alumno_User1`
    FOREIGN KEY (`User_USE_id`)
    REFERENCES `simulador`.`User` (`USE_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumno_Direccion1`
    FOREIGN KEY (`Direccion_DIR_id`)
    REFERENCES `simulador`.`Direccion` (`DIR_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Alumno_Curso1`
    FOREIGN KEY (`Curso_CUR_id`)
    REFERENCES `simulador`.`Curso` (`CUR_id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
