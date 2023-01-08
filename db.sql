create database imagens_php;

-- drop database imagens_php;
use imagens_php;

create table imagens(
    id int primary key auto_increment,
    imagem varchar(255),
    descricao varchar(255)
);

