<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 21:48
 */

function insereProdutoForn(ProdutoFornecedor $produto) {

    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO produto_fornecedor (id_produto_coo,id_fornecedor,quantidade_demanda,quantidade_estoque) VALUES (?,?,?,?)") ;
        //o primeiro parametro do método bindValue equivale a posicao na qual deve ser inserido conforme a query
        $stmt->bindValue(1, $produto->getIdProdutoCoo());
        $stmt->bindValue(2, $produto->getIdFornecedor());
        $stmt->bindValue(3, $produto->getQuantidadeDemanda());
        $stmt->bindValue(4, $produto->getQuantidadeEstoque());


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



function listaProdutosFornecedor($id_fornecedor){

        try {
            $database = new Conexao();
            $db = $database->openConnection();
            $stmt = $db->prepare("SELECT * FROM produto_fornecedor WHERE id_fornecedor = ?");
            $stmt->bindValue(1,$id_fornecedor);
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

function atualizaEstoque($estoque,$id){
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("UPDATE produto_fornecedor SET quantidade_estoque = ? WHERE id_produto_fornecedor = ?");
        $stmt->bindParam(1, $estoque);
        $stmt->bindParam(2, $id);


        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("Estoque atualizado.","success");
                //echo"ok";
            }
        }

    } catch (PDOException $e) {
        //echo "Problema com a conexão: " . $e->getMessage();
        echo($e->getMessage());
    }
    $db = $database->closeConnection();
}


