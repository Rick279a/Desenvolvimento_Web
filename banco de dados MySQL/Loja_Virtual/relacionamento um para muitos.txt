CREATE TABLE tb_imagens (
    id_imagem INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_produto INT NOT NULL,
    FOREIGN KEY (id_produto) REFERENCES tb_produtos(id_produto),
    url_imagem VARCHAR(200) NOT NULL
);

INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (1, 'notebook_1.jpg'), (1, 'notebook_2.jpg'),
(1, 'notebook_3.jpg');

INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (2, 'smarttv_1.jpg'), (2, 'smarttv_2.jpg');

INSERT INTO tb_imagens(id_produto, url_imagem) VALUES (3, 'smartphone_1.jpg');