CREATE DATABASE db_store;

-- selecionar o banco --
USE db_store;

CREATE TABLE tb_category(
    id INT(11) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(100) NOT NULL
);

INSERT INTO tb_category(name, description)
VALUES
('Informática', 'Produtos de Informática e acessórios para computadores e notebooks'),
('Escritório', 'Canetas, Cadernos, Folhas, etc'),
('Eletrônicos', 'TVs, Som portátil, Caixa de som');