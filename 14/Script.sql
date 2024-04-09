-- Criando um novo banco de Dados "Contatos"
CREATE DATABASE IF NOT EXISTS contatos;

-- usando banco de dados "contatos"
USE contatos;

-- Criando a tabela contatos info
CREATE TABLE IF NOT EXISTS contatos_info (
	Id INT AUTO_INCREMENT PRIMARY KEY,
	nome varchar(100) NOT NULL,
	telefone VARCHAR(20),
	email VARCHAR(100) NOT NULL
);

-- CRIANDO UM USUÁRIO PARA ACESSAR O BANCO DE DADOS
CREATE USER 'usuario_contatos'@'localhost' IDENTIFIED BY 'senha123';

-- Concedendo permissões para o usuário no banco contatos
GRANT ALL PRIVILEGES ON contatos.* to 'usuario_contatos'@'localhost';
FLUSH PRIVILEGES;

-- iNSERINDO DADOS NO BANCO 
INSERT INTO contatos_info (nome, telefone, email) VALUES
	('João', '123456789', 'joao@mail.com');