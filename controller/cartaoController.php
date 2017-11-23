<?php

function insereCartao(Cartao $cartao){
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO cartao (id_cliente,nome,numero,validade,codigo) VALUES (?,?,?,?,?)") ;

        $stmt->bindValue(1, $cartao->getIdCliente());
        $stmt->bindValue(2, $cartao->getNome());
        $stmt->bindValue(3, $cartao->getNumero());
        $stmt->bindValue(4, $cartao->getValidade());
        $stmt->bindValue(5, $cartao->getCodigo());


        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("Cartao cadastrado.","success");
            }
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }

    $db = $database->closeConnection();
}

function buscaCartaoCliente($cliente_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cartao WHERE id_cliente = ?");
        $stmt->bindParam(1, $cliente_id);

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

function buscaCartao($cartao_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cartao WHERE id_cliente = ?");
        $stmt->bindParam(1, $cartao_id);

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


function cartaoRequisicaoOperadora($cartao_id){
    if(!empty(buscaCartao($cartao_id))){
        return 0;
    } else {
        return 1;
    }

}