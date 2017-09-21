drop database if exists hortsend;
create database hortsend;
use hortsend;

create table usuario(
    id int not null primary key auto_increment,
    email varchar(50) not null unique,
    senha varchar(30) not null,
    nivel_acesso int not null
);

create table administrador(
    matricula int not null primary key auto_increment,
    nome varchar(50) not null,
    usuario_id int not null,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

create table cliente(
    id_cliente int not null primary key auto_increment,
    nome_cliente varchar(50) not null,
    cpf_cliente varchar(14) not null,
    telefone_contato varchar(14) not null,
    usuario_id int not null,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

create table endereco(
    id_endereco int not null primary key auto_increment,
    id_cliente int not null,
    rua varchar(50),
    numero varchar(8),
    bairro varchar(30),
    cep varchar(9),
    cidade varchar(50),
    uf varchar(2),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

create table fornecedor(
    id_fornecedor int not null primary key auto_increment,
    razaosocial_fornecedor varchar(50) not null,
    cpnj_fornecedor varchar(19),
    telefone_contato varchar(14),
    usuario_id int not null,
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

create table produto(
    id_produto int not null primary key auto_increment,
    nome_produto varchar(50),
    demanda_geral int,
    unidade varchar(10),
    preco_custo float,
    preco_venda float
);

create table produto_fornecedor(
    id int not null primary key auto_increment,
    id_produto int not null,
    id_fornecedor int not null,
    quantidade_demanda int,
    quantidade_estoque int,
    FOREIGN KEY (id_produto) REFERENCES produto(id_produto),
    FOREIGN KEY (id_fornecedor) REFERENCES fornecedor(id_fornecedor)
);

create table percentual(
    percentual_lucro float not null
);

create table percentual_auditoria(
    id int not null primary key auto_increment,
    data_modificacao date,
    percentual_old float,
    administrador_matricula int,
    FOREIGN KEY (administrador_matricula) REFERENCES administrador(matricula)
);

CREATE VIEW usuario_usuario AS select * from cliente c join usuario u on c.usuario_id = u.id;
CREATE VIEW usuario_fornecedor AS select * from fornecedor f join usuario u on f.usuario_id = u.id;
CREATE VIEW usuario_administrador AS select * from administrador a join usuario u on a.usuario_id = u.id; 