USE banco_contas;

-- Insert para clientes
INSERT INTO cliente (nome, cpf) VALUES
	('João', '12345678900'),
    ('Maria', '98765432100');
    
-- Insert para contas
INSERT INTO conta (cliente_id, numero, saldo, tipo, limite_cheque_especial,	taxa_rendimento) VALUES
    (1, 1001, 1500.00, 'corrente', 500.00, NULL),
    (1, 2001, 3000.00, 'poupanca', NULL, 0.05),
    (2, 1002, 2000.00, 'corrente', 1000.00, NULL);
    
-- Consulta para exibir todas as contas com seus clientes
SELECT
	conta.id AS conta_id,
    conta.numero AS conta_numero,
    conta.saldo AS conta_saldo,
    conta.tipo AS conta_tipo,
    conta.limite_cheque_especial AS conta_limite_cheque_especial,
    conta.taxa_rendimento AS conta_taxa_rendimento,◄
    cliente.id AS cliente_id,
    cliente.nome AS cliente_nome,
    cliente.cpf AS cliente_cpf
FROM conta
JOIN cliente ON conta.cliente_id = cliente.id;