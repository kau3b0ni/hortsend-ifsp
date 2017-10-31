<?php


function insereEndereco(Endereco $end) {
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO endereco (id_cliente,rua,numero,bairro,cep, cidade, uf) VALUES (?,?,?,?,?,?,?)") ;

        $stmt->bindValue(1, $end->getClienteId());
        $stmt->bindValue(2, $end->getRua());
        $stmt->bindValue(3, $end->getNumero());
        $stmt->bindValue(4, $end->getBairro());
        $stmt->bindValue(5, $end->getCep());
        $stmt->bindValue(6, $end->getCidade());
        $stmt->bindValue(7, $end->getUf());



        if($stmt->execute()){
            if($stmt->rowCount()>0){
               mostra_alerta("O endereco foi adicionado.","success");
                //echo("sucesso");
            }
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        //echo($erro);
        mostra_alerta($erro,"danger");
    }

    $db = $database->closeConnection();
}


function buscaEnderecoCliente($cliente_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM endereco WHERE id_cliente = $cliente_id");
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

function buscaEndereco($id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM endereco WHERE id_endereco = $id");
        $stmt->bindParam(1, $id);

        if($stmt->execute()){
            while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {
                return $resultado['rua'];
            }
        }

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}


function buscaCep($id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT cep FROM endereco WHERE id_endereco = $id");
        $stmt->bindParam(1, $id);

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

function calculaFrete($cep){
    if ($cep == 19470000){
        return 15;
    }else {
        return 50;
    }
}

function escreveEndereco($id){

        try {
            $database = new Conexao();
            $db = $database->openConnection();

            $stmt = $db->prepare("SELECT * FROM endereco WHERE id_endereco = ?");
            $stmt->bindParam(1, $id);

            if($stmt->execute()){
                while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {
                    return $resultado[0]->rua.", ".$resultado[0]->numero." - ".$resultado[0]->bairro." - ".$resultado[0]->cep." - ".$resultado[0]->cidade." - ".$resultado[0]->uf;
                }
            }

        } catch (PDOException $e) {
            echo "Problema com a conexão: " . $e->getMessage();
        }



}
