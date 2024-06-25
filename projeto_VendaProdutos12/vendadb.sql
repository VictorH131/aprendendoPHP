CREATE DATABASE vendadb;

create table `vendadb`.`clientes`(
    `cliid` int not null auto_increment primary key,
    `name` varchar(60) not null
);