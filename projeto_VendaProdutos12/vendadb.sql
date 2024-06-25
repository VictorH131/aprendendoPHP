CREATE DATABASE vendadb;

create table `vendadb`.`clientes`(
    `cliid` int not null auto_increment primary key,
    `name` varchar(60) not null,
    `telefone` VARCHAR(20) NOT NULL,
    `rua` VARCHAR(100) NOT NULL,
    `genero` VARCHAR(30) NOT NULL,
    `cidade` VARCHAR(50) NOT NULL,
    `cpf` VARCHAR(20) NOT NULL
); 