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


function buscaEndereco($cliente_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM endereco WHERE id_cliente = $cliente_id");
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
