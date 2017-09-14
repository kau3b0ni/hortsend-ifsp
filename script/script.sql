drop database hortsend;
create database hortsend;
use hortsend;

create table login(
	login_id int not null primary key auto_increment,
    email varchar(50) not null,
    senha varchar(50) not null,
    nivel_acesso varchar(10)
);

create table administrador(
	matricula int not null primary key auto_increment,
    nome varchar(50) not null,
	email varchar(50) not null
);

create table cliente(
	cliente_id int not null primary key auto_increment,
    nome_cliente varchar(50) not null,
    cpf_cliente varchar(50) not null,
	telefone_contato varchar(30) not null,
	email varchar(50) not null
    
);

create table endereco(
	id_endereco int not null primary key auto_increment,
    cliente_id int not null,
    rua varchar(50),
    numero varchar(50),
    bairro varchar(50),
    cep varchar(50),
    cidade varchar(50),
    uf varchar(50),
    FOREIGN KEY (cliente_id) REFERENCES cliente(cliente_id)
);

create table fornecedor(
	id_fornecedor int not null primary key auto_increment,
    razaosocial_fornecedor varchar(50) not null,
    cpnj_fornecedor varchar(50),
    telefone_contato varchar(30),
	email varchar(50) not null
);

create table produto(
	id_produto int not null primary key auto_increment,
	nome_produto varchar(50),
    demanda_geral int,
    unidade varchar(50),
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
	percentual_lucro float,
    data_modificacao date,
	administrador_matricula int,
    FOREIGN KEY (administrador_matricula) REFERENCES administrador(matricula)
);