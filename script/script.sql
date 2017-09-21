drop database hortsend;
create database hortsend;
use hortsend;

create table usuario(
<<<<<<< HEAD
	id int not null primary key auto_increment,
    email varchar(50) not null unique,
    senha varchar(30) not null,
    nivel_acesso varchar(3)
=======
    id int not null primary key auto_increment,
    email varchar(50) not null unique,
    senha varchar(30) not null,
    nivel_acesso int not null
>>>>>>> f9a800aae0a16e961a982740cec4665a4108384d
);

create table administrador(
    matricula int not null primary key auto_increment,
    nome varchar(50) not null,
<<<<<<< HEAD
	usuario_id int not null,
=======
    usuario_id int not null,
>>>>>>> f9a800aae0a16e961a982740cec4665a4108384d
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

create table cliente(
<<<<<<< HEAD
	id_cliente int not null primary key auto_increment,
    nome_cliente varchar(50) not null,
    cpf_cliente varchar(11) not null,
	telefone_contato varchar(15) not null,
	usuario_id int not null,
=======
    id_cliente int not null primary key auto_increment,
    nome_cliente varchar(50) not null,
    cpf_cliente varchar(11) not null,
    telefone_contato varchar(15) not null,
    usuario_id int not null,
>>>>>>> f9a800aae0a16e961a982740cec4665a4108384d
    FOREIGN KEY (usuario_id) REFERENCES usuario(id)
);

create table endereco(
<<<<<<< HEAD
	id_endereco int not null primary key auto_increment,
=======
    id_endereco int not null primary key auto_increment,
>>>>>>> f9a800aae0a16e961a982740cec4665a4108384d
    id_cliente int not null,
    rua varchar(50),
    numero varchar(50),
    bairro varchar(50),
    cep varchar(50),
    cidade varchar(50),
    uf varchar(50),
    FOREIGN KEY (id_cliente) REFERENCES cliente(id_cliente)
);

create table fornecedor(
    id_fornecedor int not null primary key auto_increment,
    razaosocial_fornecedor varchar(50) not null,
    cpnj_fornecedor varchar(14),
    telefone_contato varchar(15),
<<<<<<< HEAD
	usuario_id int not null,
=======
    usuario_id int not null,
>>>>>>> f9a800aae0a16e961a982740cec4665a4108384d
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
<<<<<<< HEAD
	id int not null primary key auto_increment,
    data_modificacao date,
    percentual_old float,
	administrador_matricula int,
    FOREIGN KEY (administrador_matricula) REFERENCES administrador(matricula)
);

CREATE VIEW cliente_usuario AS select * from cliente c join usuario u on c.usuario_id = u.id;
CREATE VIEW cliente_fornecedor AS select * from fornecedor f join usuario u on f.usuario_id = u.id;
CREATE VIEW cliente_administrador AS select * from administrador a join usuario u on a.usuario_id = u.id;	
=======
    id int not null primary key auto_increment,
    data_modificacao date,
    percentual_old float,
    administrador_matricula int,
    FOREIGN KEY (administrador_matricula) REFERENCES administrador(matricula)
);

CREATE VIEW usuario_usuario AS select * from cliente c join usuario u on c.usuario_id = u.id;
CREATE VIEW usuario_fornecedor AS select * from fornecedor f join usuario u on f.usuario_id = u.id;
CREATE VIEW usuario_administrador AS select * from administrador a join usuario u on a.usuario_id = u.id;	
>>>>>>> f9a800aae0a16e961a982740cec4665a4108384d
