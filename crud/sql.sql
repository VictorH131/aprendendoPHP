create DATABASE crudphp;

Create table crudphp.cliente (
    Id int primary key auto_increment,
    Nome varchar(60) not null,
    Email varchar(150) not null, 
    Cidade varchar(100),
    UF varchar(2)
)

CREATE TABLE crudphp.produto(
    Id INT PRIMARY KEY AUTO_INCREMENT,
    Nome VARCHAR(60) NOT NULL,
    Descricao VARCHAR(255) NOT NULL,
    Unid VARCHAR(3) NOT NULL,
    Marca VARCHAR(60) NOT NULL
)
 
CREATE TABLE usuario (
    Id int not null primary key auto_increment,
    Nome varchar(100),
    Usuario varchar (100),
    Senha varchar(100)
)