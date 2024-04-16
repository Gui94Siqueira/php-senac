-- Criando o banco de dados "contatos"
CREATE DATABASE IF NOT EXISTS contatos;

-- Usando o banco de dados "contatos"
USE contatos;

-- Criando a tabela "contatos_info"
CREATE TABLE IF NOT EXISTS contatos_info (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    email VARCHAR(100) NOT NULL
);

-- Criando um usuário para acessar o banco de dados
CREATE USER 'usuario_contatos'@'localhost' IDENTIFIED BY 'Senha@123';

-- Concedendo permissões para o usuário no banco de dados "contatos"
GRANT ALL PRIVILEGES ON contatos.* TO 'usuario_contatos'@'localhost';

-- Atualizando as permissões
FLUSH PRIVILEGES;

-- Inserindo dados na tabela "contatos_info"
INSERT INTO contatos_info (nome, telefone, email) VALUES 
('João', '123456789', 'joao@mail.com'),
('Maria', '987654321', 'maria@mail.com'),
('Carlos', '999999999', 'carlos@mail.com'),
('Ana', '888888888', 'ana@mail.com');