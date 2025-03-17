create table tb_usuarios(
	id int not null primary key auto_increment,
	nome varchar(50) not null,
	email varchar(100) not null,
	senha varchar(32) not null
);