<?php


function insereFornecedor(Fornecedor $fornecedor) {
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("INSERT INTO fornecedor (razao,cnpj,telefone,usuario_id) VALUES (?,?,?,?)") ;

        $stmt->bindValue(1, $fornecedor->getRazao());
        $stmt->bindValue(2, $fornecedor->getCnpj());
        $stmt->bindValue(3, $fornecedor->getTelefone());
        $stmt->bindValue(4, $fornecedor->getUsuarioId());

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("Seu cadastro foi efetuado. Faça login.","success");
            }
        }

    } catch (PDOException $e) {
        $erro =  "Problema com a conexão: " . $e->getMessage();
        mostra_alerta($erro,"danger");
    }

    $db = $database->closeConnection();
}



function buscaFornecedor($usuario_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM fornecedor WHERE usuario_id = ?");
        $stmt->bindParam(1, $usuario_id);

        if($stmt->execute()){
            while($resultado = $stmt->fetch(PDO::FETCH_OBJ)) {
                return $resultado;
            }
        }

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}


?>