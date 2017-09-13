drop database hortsend;
create database hortsend;
use hortsend;

create table login(
	login_id int not null primary key,
    email varchar(50) not null,
    senha varchar(50) not null,
    nivel_acesso varchar(10)
);

create table administrador(
	matricula int not null primary key,
    nome varchar(50) not null,
    login_id int not null,
	FOREIGN KEY (login_id) REFERENCES login(login_id)
);

create table cliente(
	cliente_id int not null primary key,
    nome_cliente varchar(50) not null,
    cpf_cliente varchar(50) not null,
    login_id int not null,
    FOREIGN KEY (login_id) REFERENCES login(login_id)
);

create table endereco(
	id_endereco int not null primary key,
    cliente_id int not null,
    rua varchar(50),
    numero varchar(50),
    bairro varchar(50),
    cep varchar(50),
    cidade varchar(50),
    FOREIGN KEY (cliente_id) REFERENCES cliente(cliente_id)
);

create table fornecedor(
	id_fornecedor int not null primary key,
    razaosocial_fornecedor varchar(50) not null,
    cpnj_fornecedor varchar(50),
    login_id int not null,
    FOREIGN KEY (login_id) REFERENCES login(login_id)
);

create table produto(
	id_produto int not null primary key,
	nome_produto varchar(50),
    demanda_geral int,
    unidade varchar(50),
    preco_custo float,
    preco_venda float
);

create table produto_fornecedor(
	id int not null primary key,
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