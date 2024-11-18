create database AtividadeLogin;
use AtividadeLogin;

create table usuario(
    id_usuario int auto_increment not null primary key,
    nome varchar(100) not null,
    data_nasc date not null,
    email varchar(200) not null unique,
    senha varchar(60) not null,
    endereco varchar(200) not null
)