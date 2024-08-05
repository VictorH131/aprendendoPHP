create database samueldb;

create table samueldb.`users` (
    `user_id` int(12) not null auto_increment primary key,
    `firstname` varchar(30) NOT NULL,
    `lastname` varchar(30) NOT NULL,
    `address` varchar(150) NOT NULL,
    `contact` varchar(20) NOT NULl
);