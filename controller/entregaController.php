<?php
/**
 * Created by PhpStorm.
 * User: kaue
 * Date: 31/10/2017
 * Time: 11:20
 */

function insereEntrega(Entrega $entrega) {
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO entrega(id_cesta, valor, data_entrega, 
                                                    estado) VALUES (?,?,?,?)");

        $stmt->bindValue(1, $entrega->getIdCesta());
        $stmt->bindValue(2, $entrega->getValor());
        $stmt->bindValue(3, $entrega->getDataEntrega());
        $stmt->bindValue(4, $entrega->getEstado());

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

function buscaEstadoEntrega($id_cesta){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM entrega WHERE id_cesta = ?");
        $stmt->bindParam(1, $id_cesta);

        if($stmt->execute()){

            while($resultado = $stmt->fetch(PDO::FETCH_ASSOC)) {
                return $resultado;
            }

        } else {
            echo "Não foi possível exexutar a operação!";
        }


    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();
}