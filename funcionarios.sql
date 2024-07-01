SHOW databases;

CREATE TABLE funcionarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    area VARCHAR(50) NOT NULL,
    nome VARCHAR(100) NOT NULL,
    departamento VARCHAR(50) NOT NULL,
    salario DECIMAL(10, 2) NOT NULL,
    formacao VARCHAR(100) NOT NULL,
    cargo VARCHAR(100) NOT NULL,
    data_inicio DATE NOT NULL,
    modo_trabalho VARCHAR(50) NOT NULL,
    outras_informacoes TEXT
);

USE funcionarios;