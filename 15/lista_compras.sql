-- Criando o banco de dados "lista_compras"
CREATE DATABASE IF NOT EXISTS lista_compras;

-- Usando o banco de dados "lista_compras"
USE lista_compras;

-- Criando a tabela "itens_compra"
CREATE TABLE IF NOT EXISTS itens_compra (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome_produto VARCHAR(100) NOT NULL,
    quantidade INT NOT NULL,
    comprado BOOLEAN DEFAULT FALSE
);

-- Criando um usuário para acessar o banco de dados
CREATE USER 'usuario_lista_compras'@'localhost' IDENTIFIED BY 'Senha@123';

-- Concedendo permissões para o usuário no banco de dados "lista_compras"
GRANT ALL PRIVILEGES ON lista_compras.* TO 'usuario_lista_compras'@'localhost';

-- Atualizando as permissões
FLUSH PRIVILEGES;

-- Inserindo dados na tabela "itens_compra"
INSERT INTO itens_compra (nome_produto, quantidade) VALUES 
('Leite', 2),
('Pão', 3),
('Ovos', 12),
('Arroz', 1),
('Feijão', 1);