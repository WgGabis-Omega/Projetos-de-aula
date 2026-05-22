CREATE DATABASE formulario_produtos;
USE formulario_produtos;
CREATE TABLE produtos(
    id_produto INT PRIMARY KEY AUTO_INCREMENT,
    nome_produto VARCHAR(100),
    descricao TEXT
);

CREATE TABLE imagens(
    id_imagens INT PRIMARY KEY AUTO_INCREMENT,
    fk_id_produto INT,
    nome_imagem VARCHAR(100),
    FOREIGN KEY (fk_id_produto) REFERENCES produtos(id_produto)
);