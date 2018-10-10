-- MySQL Script generated by MySQL Workbench
-- Mon Nov 27 12:25:23 2017
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema OSdb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema OSdb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `OSdb` DEFAULT CHARACTER SET utf8 ;
USE `OSdb` ;

-- -----------------------------------------------------
-- Table `OSdb`.`Departamento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OSdb`.`Departamento` (
  `id_Departamento` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`id_Departamento`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OSdb`.`Funcionario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OSdb`.`Funcionario` (
  `id_Funcionario` INT NOT NULL AUTO_INCREMENT,
  `cpf` VARCHAR(45) NOT NULL,
  `rg` VARCHAR(45) NULL,
  `nome` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NULL,
  `permissao` VARCHAR(45) NULL,
  `id_Departamento` INT NULL,
  PRIMARY KEY (`id_Funcionario`),
  INDEX `fk_Funcionario_Departamento1_idx` (`id_Departamento` ASC),
  CONSTRAINT `fk_Funcionario_Departamento1`
    FOREIGN KEY (`id_Departamento`)
    REFERENCES `OSdb`.`Departamento` (`id_Departamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OSdb`.`Endereco`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OSdb`.`Endereco` (
  `id_Endereco` INT NOT NULL AUTO_INCREMENT,
  `rua` VARCHAR(45) NULL,
  `numero` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `id_Funcionario` INT NULL,
  PRIMARY KEY (`id_Endereco`),
  INDEX `fk_Endereco_Funcionario_idx` (`id_Funcionario` ASC),
  CONSTRAINT `fk_Endereco_Funcionario`
    FOREIGN KEY (`id_Funcionario`)
    REFERENCES `OSdb`.`Funcionario` (`id_Funcionario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OSdb`.`OrdemServico`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OSdb`.`OrdemServico` (
  `id_OrdemServico` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `situacao` VARCHAR(45) NULL,
  `data_inicio` DATE NULL,
  `data_fim` DATE NULL,
  PRIMARY KEY (`id_OrdemServico`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `OSdb`.`Tarefas`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `OSdb`.`Tarefas` (
  `id_Tarefas` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `descricao` VARCHAR(45) NULL,
  `situacao` VARCHAR(45) NULL,
  `id_Departamento` INT NULL,
  `id_OrdemServico` INT NULL,
  PRIMARY KEY (`id_Tarefas`),
  INDEX `fk_Tarefas_Departamento1_idx` (`id_Departamento` ASC),
  INDEX `fk_Tarefas_OrdemServico1_idx` (`id_OrdemServico` ASC),
  CONSTRAINT `fk_Tarefas_Departamento1`
    FOREIGN KEY (`id_Departamento`)
    REFERENCES `OSdb`.`Departamento` (`id_Departamento`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Tarefas_OrdemServico1`
    FOREIGN KEY (`id_OrdemServico`)
    REFERENCES `OSdb`.`OrdemServico` (`id_OrdemServico`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
