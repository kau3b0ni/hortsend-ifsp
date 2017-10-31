<?php


function insereItemCesta(ItemCesta $item){
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO item_cesta (id_cesta, id_produto, quantidade, 
                                                    nome, valor) VALUES (?,?,?,?,?)");

        $stmt->bindValue(1, $item->getIdCesta());
        $stmt->bindValue(2, $item->getIdProduto());
        $stmt->bindValue(3, $item->getQuantidade());
        $stmt->bindValue(4, $item->getNome());
        $stmt->bindValue(5, $item->getValor());

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                return $db->lastInsertId();
            } else {
                mostra_alerta("Não foi possível executar a operação!","danger");
                //echo("NAO");
            }
        }

    } catch (PDOException $e) {
        //echo "Problema com a conexão: " . $e->getMessage();
        echo($e->getMessage());
    }
    $db = $database->closeConnection();




}