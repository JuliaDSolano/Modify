


CREATE TABLE estado (
sigla_uf varchar(10),
nome varchar(50),
cod_estado int PRIMARY KEY NOT NULL AUTO_INCREMENT
);

CREATE TABLE cidade (
nome varchar(50),
cod_cidade int PRIMARY KEY,
cod_estado int,
FOREIGN KEY(cod_estado) REFERENCES estado (cod_estado)
);

CREATE TABLE juridico (
razao_social varchar(50),
cnpj varchar(80),
cod_juridico int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_usuario int
);

CREATE TABLE fisico (
descricao varchar(250),
especificacao varchar(250),
cpf varchar(50),
cod_fisico int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_usuario int
);

CREATE TABLE estabelecimento (
cep varchar(50),
bairro varchar(25),
rua varchar(80),
nome varchar(80),
complemento varchar(20),
posicao_geografica float,
id int PRIMARY KEY NOT NULL AUTO_INCREMENT,
cod_juridico int,
cod_cidade int,
FOREIGN KEY(cod_juridico) REFERENCES juridico (cod_juridico),
FOREIGN KEY(cod_cidade) REFERENCES cidade (cod_cidade)
);

CREATE TABLE usuario (
senha varchar(20),
email varchar(50),
nome varchar(80),
cod_usuario int PRIMARY KEY NOT NULL AUTO_INCREMENT
);

CREATE TABLE avaliacao (
id int NOT NULL AUTO_INCREMENT,
cod_fisico int,
nota int,
data_hrnota timestamp,
FOREIGN KEY(id) REFERENCES estabelecimento (id),
FOREIGN KEY(cod_fisico) REFERENCES fisico (cod_fisico)
);

CREATE TABLE comentario (
id int NOT NULL AUTO_INCREMENT,
cod_fisico int,
comentario varchar(250),
data_hora timestamp,
ativo boolean,
FOREIGN KEY(id) REFERENCES estabelecimento (id),
FOREIGN KEY(cod_fisico) REFERENCES fisico (cod_fisico)
);

ALTER TABLE juridico ADD FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario);
ALTER TABLE fisico ADD FOREIGN KEY(cod_usuario) REFERENCES usuario (cod_usuario);
