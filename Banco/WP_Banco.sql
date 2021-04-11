CREATE DATABASE wp_php CHARACTER SET utf8 COLLATE utf8_general_ci;

create table usuario(
	ID_Usuario int(11) primary key auto_increment,
    Nome_usuario varchar(70),
    Email_usuario varchar(60),
    Senha_usuario varchar(50),
    status_usuario boolean,
    Endereco_usuario varchar(50),
    Complem_usuario varchar(50),
    Estado_usuario varchar(50),
    CEP_usuario varchar(10)
)default character set = utf8;

create table clientes (
	id_cliente int(11) primary key auto_increment,
	nome_cliente varchar(50),
    tel_cliente varchar(20),
    estado_cliente varchar(30)
)default character set = utf8;


INSERT INTO usuario values
(default, 'Admin','admin@admin.com','admin',1,'Default','Default', 'Default', '00000-000');


