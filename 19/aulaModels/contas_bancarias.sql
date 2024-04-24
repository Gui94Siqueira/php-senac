CREATE DATABASE IF NOT EXISTS banco_contas;
USE banco_contas;

-- Tabela de Clientes
CREATE TABLE IF NOT EXISTS cliente (
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    cpf VARCHAR(11) NOT NULL
);

-- Tabela de Contas
CREATE TABLE IF NOT EXISTS conta (
	id INT AUTO_INCREMENT PRIMARY KEY,
    cliente_id INT,
    numero INT NOT NULL,
    saldo DECIMAL(10,2) DEFAULT 0.00,
    tipo ENUM('corrente', 'poupanca') NOT NULL,
    limite_cheque_especial DECIMAL(10,2),
    taxa_rendimento DECIMAL (5,4),
    FOREIGN KEY (cliente_id) REFERENCES cliente(id)
);