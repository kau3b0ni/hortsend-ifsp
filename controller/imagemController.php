<?php

function insereImagem(Imagem $imagem){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("INSERT INTO imagem(id_imagem,produto_id, url) VALUES (?,?,?)") ;
        $stmt->bindValue(1, $imagem->getIdImagem());
        $stmt->bindValue(2, $imagem->getProdutoId());
        $stmt->bindValue(3, $imagem->getUrl());

        if($stmt->execute()) {
            if ($stmt->rowCount() > 0) {
                mostra_alerta("Produto adicionado", "success");
            }

        }
    } catch (PDOException $e) {
        //echo "Problema com a conexão: " . $e->getMessage();
        mostra_alerta("Problema com a conexão: " . $e->getMessage(),"warning");

    }

    $db = $database->closeConnection();
}

function buscaImagemUrl($produto_id){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT url FROM imagem WHERE produto_id = $produto_id");
        $stmt->bindParam(1, $produto_id);

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