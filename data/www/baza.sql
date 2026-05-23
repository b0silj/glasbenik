-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`stranka`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`stranka` (
  `id_stranka` INT NOT NULL AUTO_INCREMENT,
  `ime_priimek` VARCHAR(150) NOT NULL,
  `email` VARCHAR(100) NOT NULL,
  `telefon` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_stranka`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`status_rezervacije`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`status_rezervacije` (
  `id_status` INT NOT NULL AUTO_INCREMENT,
  `naziv_statusa` VARCHAR(50) NULL,
  PRIMARY KEY (`id_status`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`rezervacija`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`rezervacija` (
  `id_rezervacija` INT NOT NULL AUTO_INCREMENT,
  `datum_dogodka` DATE NOT NULL,
  `sporocilo` TEXT(500) NOT NULL,
  `stranka_id_stranka` INT NOT NULL,
  `status_rezervacije_id_status` INT NOT NULL,
  PRIMARY KEY (`id_rezervacija`),
  INDEX `fk_rezervacija_stranka_idx` (`stranka_id_stranka` ASC) VISIBLE,
  INDEX `fk_rezervacija_status_rezervacije1_idx` (`status_rezervacije_id_status` ASC) VISIBLE,
  CONSTRAINT `fk_rezervacija_stranka`
    FOREIGN KEY (`stranka_id_stranka`)
    REFERENCES `mydb`.`stranka` (`id_stranka`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_rezervacija_status_rezervacije1`
    FOREIGN KEY (`status_rezervacije_id_status`)
    REFERENCES `mydb`.`status_rezervacije` (`id_status`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
