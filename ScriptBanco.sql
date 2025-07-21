Create database controle_produtos;
use controle_produtos;

create table usuarios(
usu_id integer primary key auto_increment,
usu_nome varchar(180),
usu_email varchar(180),
usu_senha varchar(255)
)engine=innoDB;

create table produtos(
pro_id integer auto_increment primary key,
pro_nome varchar(150),
pro_descricao text,
pro_preco decimal(10,2),
pro_url varchar(100),
pro_ativo bool,
usu_id integer not null,
foreign key(usu_id) references usuarios(usu_id)
)engine=innoDb;

INSERT INTO usuarios (usu_nome, usu_email, usu_senha)
VALUES ('João Silva', 'joao@email.com', '$2y$10$eXemploDeHashDeSenha'); -- senha bcrypt('123456')

INSERT INTO produtos (pro_nome, pro_descricao, pro_preco, pro_url, pro_ativo, usu_id)
VALUES ('Notebook Dell', 'Notebook Dell Inspiron 15, i7, 16GB RAM, 512GB SSD', 4999.99, 'upload_fotos_produtos/notebook.jpg', 1, 1);
select * from produtos;

