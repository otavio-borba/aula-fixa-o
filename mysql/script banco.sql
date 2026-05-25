CREATE DATABASE IF NOT EXISTS agenda;

USE agenda;

CREATE TABLE contatos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    email VARCHAR(100),
    telefone VARCHAR(14),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cpf VARCHAR(14) UNIQUE,
    email VARCHAR(100),
    telefone VARCHAR(14),
    endereco VARCHAR(100),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE produtos (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    descricao VARCHAR(100),
    preco DECIMAL(10,2),
    estoque INT,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO contatos (nome, email, telefone)
VALUES
('Joao', 'joao@email.com', '11999999999'),
('Otavio', 'otavio@email.com', '11888888888'),clientesclientescontatoscontatosprodutosprodutos
('Enzo', 'enzo@email.com', '11777777777');

INSERT INTO clientes (nome, cpf, email, telefone, endereco)
VALUES
('Aline', '12345678900', 'aline@email.com', '11666666666', 'Rua adolar pohl'),
('Ana', '98765432100', 'ana@email.com', '11555555555', 'Rua casemiro slonczewski'),
('Giovana', '11122233344', 'giovana@email.com', '11444444444', 'Rua alois finder');

INSERT INTO produtos (nome, descricao, preco, estoque)
VALUES
('csmisa', 'camisa boxy', 180.00, 10),
('calça', 'calça moletom', 350.00, 5),
('mosquetao', 'chaveiro retro', 21.90, 3);

SELECT * FROM contatos;
SELECT * FROM clientes;
SELECT * FROM produtos;