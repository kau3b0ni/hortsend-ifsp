<?php


function listaProdutosCooperativa() {
    try {
        $database = new ConexaoCooperativa();
        $db = $database->openConnection();
        $stmt = $db->prepare("SELECT * FROM produto_coopersul");


        if($stmt->execute()) {

            while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {
                return $resultado;
            }

        } else {
            echo "Não foi possível recuperar os dados do banco de dados";
        }

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}


function buscaProdutoCooperativa($id){

    try {
        $database = new ConexaoCooperativa();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM produto_coopersul WHERE id = $id");
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