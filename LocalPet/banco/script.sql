-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema db_localpet
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_localpet
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_localpet` DEFAULT CHARACTER SET utf8mb4 ;
USE `db_localpet` ;

-- -----------------------------------------------------
-- Table `db_localpet`.`raca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`raca` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 12
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`animais`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`animais` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NULL DEFAULT NULL,
  `especie` VARCHAR(100) NOT NULL,
  `raca_id` INT(11) NOT NULL,
  `sexo` VARCHAR(25) NULL DEFAULT NULL,
  `porte` VARCHAR(45) NOT NULL,
  `idade` VARCHAR(45) NOT NULL,
  `descricao` VARCHAR(300) NOT NULL,
  `enfermidades` VARCHAR(100) NULL DEFAULT NULL,
  `medicamentos` VARCHAR(100) NULL DEFAULT NULL,
  `vacinas` VARCHAR(45) NULL DEFAULT NULL,
  `comportamento` VARCHAR(200) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NOT NULL,
  `imagem_animal` VARCHAR(45) NOT NULL,
  `ativo` BIT(1) NOT NULL DEFAULT b'1',
  PRIMARY KEY (`id`),
  INDEX `fk_animais_raca1_idx` (`raca_id` ASC) ,
  CONSTRAINT `fk_animais_raca1`
    FOREIGN KEY (`raca_id`)
    REFERENCES `db_localpet`.`raca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 10
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`nivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`nivel` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `sigla` VARCHAR(5) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`usuarios` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `data_registro` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP(),
  `email` VARCHAR(100) NOT NULL,
  `senha` VARCHAR(32) NOT NULL,
  `nivel_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE INDEX `nome_UNIQUE` (`nome` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  INDEX `fk_usuarios_niveis1_idx` (`nivel_id` ASC) ,
  CONSTRAINT `fk_usuarios_niveis1`
    FOREIGN KEY (`nivel_id`)
    REFERENCES `db_localpet`.`nivel` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 16
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`clientes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`clientes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(60) NOT NULL,
  `cpf` VARCHAR(11) NOT NULL,
  `data_nasc` DATETIME NOT NULL,
  `email` VARCHAR(45) NULL DEFAULT NULL,
  `usuarios_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_clientes_usuarios1_idx` (`usuarios_id` ASC) ,
  CONSTRAINT `fk_clientes_usuarios1`
    FOREIGN KEY (`usuarios_id`)
    REFERENCES `db_localpet`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 5
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`adocoes`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`adocoes` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `animais_id` INT(11) NOT NULL,
  `clientes_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_Adocoes_animais1_idx` (`animais_id` ASC) ,
  INDEX `fk_Adocoes_clientes1_idx` (`clientes_id` ASC) ,
  CONSTRAINT `fk_Adocoes_animais1`
    FOREIGN KEY (`animais_id`)
    REFERENCES `db_localpet`.`animais` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Adocoes_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `db_localpet`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`animais_ap`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`animais_ap` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NOT NULL,
  `especie` VARCHAR(100) NOT NULL,
  `raca_id` INT(11) NOT NULL,
  `sexo` VARCHAR(45) NOT NULL,
  `porte` VARCHAR(45) NOT NULL,
  `idade` VARCHAR(45) NULL DEFAULT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  `enfermidades` VARCHAR(45) NULL DEFAULT NULL,
  `medicamentos` VARCHAR(45) NULL DEFAULT NULL,
  `localizacao` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(11) NOT NULL,
  `imagem_animal` VARCHAR(200) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_animais_ap_raca1_idx` (`raca_id` ASC) ,
  CONSTRAINT `fk_animais_ap_raca1`
    FOREIGN KEY (`raca_id`)
    REFERENCES `db_localpet`.`raca` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`animais_cli`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`animais_cli` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `clientes_id` INT(11) NOT NULL,
  `animais_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_animais_cli_animais1_idx` (`animais_id` ASC) ,
  INDEX `fk_animais_cli_clientes1_idx` (`clientes_id` ASC) ,
  CONSTRAINT `fk_animais_cli_animais1`
    FOREIGN KEY (`animais_id`)
    REFERENCES `db_localpet`.`animais` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animais_cli_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `db_localpet`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`ongs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`ongs` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(100) NOT NULL,
  `cnpj` INT(14) NULL DEFAULT NULL,
  `cpf` INT(11) NULL DEFAULT NULL,
  `descricao` VARCHAR(255) NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `num` VARCHAR(45) NULL DEFAULT NULL,
  `bairro` VARCHAR(45) NULL DEFAULT NULL,
  `telefone` VARCHAR(45) NULL DEFAULT NULL,
  `imagem_ong` VARCHAR(45) NOT NULL,
  `usuario_id` INT(11) NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_ongs_usuario1_idx` (`usuario_id` ASC) ,
  CONSTRAINT `fk_ongs_usuario1`
    FOREIGN KEY (`usuario_id`)
    REFERENCES `db_localpet`.`usuarios` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 8
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`animais_ong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`animais_ong` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `ongs_id` INT(11) NOT NULL,
  `animais_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_animais_ong_ongs1_idx` (`ongs_id` ASC) ,
  INDEX `fk_animais_ong_animais1_idx` (`animais_id` ASC) ,
  CONSTRAINT `fk_animais_ong_animais1`
    FOREIGN KEY (`animais_id`)
    REFERENCES `db_localpet`.`animais` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_animais_ong_ongs1`
    FOREIGN KEY (`ongs_id`)
    REFERENCES `db_localpet`.`ongs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`endereco_cli`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`endereco_cli` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cep` VARCHAR(8) NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `num` VARCHAR(30) NOT NULL,
  `complemento` VARCHAR(100) NULL DEFAULT NULL,
  `bairro` VARCHAR(60) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(100) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `tipo` VARCHAR(30) NOT NULL,
  `clientes_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_endereco_cli_clientes1_idx` (`clientes_id` ASC) ,
  CONSTRAINT `fk_endereco_cli_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `db_localpet`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`endereco_ong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`endereco_ong` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `cep` VARCHAR(8) NOT NULL,
  `logradouro` VARCHAR(100) NOT NULL,
  `num` VARCHAR(30) NOT NULL,
  `complemento` VARCHAR(100) NULL DEFAULT NULL,
  `bairro` VARCHAR(60) NOT NULL,
  `estado` VARCHAR(45) NOT NULL,
  `cidade` VARCHAR(100) NOT NULL,
  `uf` CHAR(2) NOT NULL,
  `tipo` VARCHAR(30) NOT NULL,
  `ongs_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_endereco_ong_ongs1_idx` (`ongs_id` ASC) ,
  CONSTRAINT `fk_endereco_ong_ongs1`
    FOREIGN KEY (`ongs_id`)
    REFERENCES `db_localpet`.`ongs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`telefone_cli`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`telefone_cli` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `numero` VARCHAR(20) NOT NULL,
  `tipo` VARCHAR(10) NOT NULL,
  `clientes_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_telefone_clientes1_idx` (`clientes_id` ASC) ,
  CONSTRAINT `fk_telefone_clientes1`
    FOREIGN KEY (`clientes_id`)
    REFERENCES `db_localpet`.`clientes` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8mb4;


-- -----------------------------------------------------
-- Table `db_localpet`.`telefone_ong`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_localpet`.`telefone_ong` (
  `id` INT(11) NOT NULL AUTO_INCREMENT,
  `numero` VARCHAR(20) NOT NULL,
  `tipo` VARCHAR(10) NOT NULL,
  `ongs_id` INT(11) NOT NULL,
  PRIMARY KEY (`id`),
  INDEX `fk_telefone_ong_ongs1_idx` (`ongs_id` ASC) ,
  CONSTRAINT `fk_telefone_ong_ongs1`
    FOREIGN KEY (`ongs_id`)
    REFERENCES `db_localpet`.`ongs` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8mb4;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;