


create database cadastro;

create database usuarios;

drop database cadastro;


create database cadastro
default character set utf8
default collate utf8_general_ci;

create table pessoas(
	cpf int not null,
    nome varchar (200),
    peso decimal (3,2),
    nascimento date,
    altura decimal (3,2),
    nacionalidade varchar (30) default 'Indigente',
    primary key (cpf)
) default charset = utf8;