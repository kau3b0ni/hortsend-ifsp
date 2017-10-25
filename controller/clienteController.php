<?php


function insereCliente(Cliente $cliente) {
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO cliente (nome_cliente,cpf_cliente,telefone_contato,usuario_id) VALUES (?,?,?,?)") ;

        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getCpf());
        $stmt->bindValue(3, $cliente->getTelefoneContato());
        $stmt->bindValue(4, $cliente->getUsuarioId());

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("O cliente foi adicionado.","success");
            }
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }

    $db = $database->closeConnection();
}

function buscaCpf($cpf){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cliente WHERE cpf_cliente = ?");
        $stmt->bindParam(1, $cpf);

        if($stmt->execute()){
            while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {
                return $resultado;
            }
        }

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}

function buscaClienteId($usuario_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cliente WHERE usuario_id = $usuario_id");
        $stmt->bindParam(1, $cpf);

        if($stmt->execute()){
            while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {
                return $resultado;
            }
        }

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}


?>