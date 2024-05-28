/*comandos*/
CREATE DATABASE secure_login; 

Create user 'sec_user'@'localhost' identified by 'eKcGZr59zAa2BEWU'; /*cria um usuario*/
grant select, insert, update on `secure_login`.*to 'sec_user'@'localhost';/*adiciona os privilegio (ao adicionar o DELETAR ele exclue o usuario)*/

create table `secure_login` .`members` (
    `id` int not null auto_increment primary key,
    `username` varchar(30) not null,
    `email` varchar(50) not null,
    `password` char(128) not null,
    `salt` char(128) not null
) engine = innoDB;
 
create table `secure_login`. `login_attempts`( /*tabela de numero de tentativas*/
    `user_id` int(11) not null,
    `time`varchar(30) not null
) engine = innoDB;

insert into `secure_login`.`members` values(1,'test_user', 'test@example.com', /* inserindo um usuario na tabela*/
'00807432eae173f652f2064bdca1b61b290b52d40e429a7d295d76a71084aa96c0233b82f1feac45529e0726559645acaed6f3ae58a286b9f075916ebf66cacc',/*senha longa pra krl*/
'f9aab579fc1b41ed0c44fe4ecdbfcdb4cb99b9023abb241a6db833288f4eea3c02f76e0d35204a8695077dcf81932aa59006423976224be0390395bae152d4ef');




