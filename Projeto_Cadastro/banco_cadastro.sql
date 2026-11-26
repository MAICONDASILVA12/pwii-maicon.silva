CREATE DATABASE IF NOT EXISTS cadastro;
USE cadastro;

CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    telefone VARCHAR(20),
    cidade VARCHAR(50),
    estado VARCHAR(2)
);

INSERT INTO clientes (nome, email, telefone, cidade, estado) VALUES
('Gabriel Cleto', 'gabriel@etec.sp.gov.br', '11 99999-0001', 'São Paulo', 'SP'),
('Aluno ETEC', 'aluno@etec.sp.gov.br', '11 98888-0002', 'São Paulo', 'SP')
ON DUPLICATE KEY UPDATE nome = VALUES(nome);
