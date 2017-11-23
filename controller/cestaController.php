<?php
//insere e retorna o id
function insereCesta(Cesta $cesta) {

    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO cesta (id_cliente, data_inicial, periodo, 
                                                    endereco_id, valor_produtos, valor_entrega, 
                                                    valor_total) VALUES (?,?,?,?,?,?,?)");

        $stmt->bindValue(1, $cesta->getIdCliente());
        $stmt->bindValue(2, $cesta->getDataInicial());
        $stmt->bindValue(3, $cesta->getPeriodo());
        $stmt->bindValue(4, $cesta->getEnderecoId());
        $stmt->bindValue(5, $cesta->getValorProdutos());
        $stmt->bindValue(6, $cesta->getValorEntrega());
        $stmt->bindValue(7, $cesta->getValorTotal());

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

function listaCestasCliente($id_cliente){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cesta WHERE id_cliente = ?");
        $stmt->bindParam(1, $id_cliente);

        if($stmt->execute()){

            while($resultado = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
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

function mudaEstadoCesta($id_cesta,$estado){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("UPDATE cesta set estado = ? 
                                        WHERE id_cesta = ?");

        $stmt->bindParam( 1, $estado);
        $stmt->bindParam( 2, $id_cesta);


        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("Estado da cesta foi alterada.","success");
            }
        }


    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }


}


function listaCestas(){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM cesta");


        if($stmt->execute()){

            while($resultado = $stmt->fetchAll(PDO::FETCH_ASSOC)) {
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
