<?php


function insereCliente(Cliente $cliente) {
    try {
        $database = new Conexao();
        $db = $database->openConnection();


        $stmt = $db->prepare("INSERT INTO cliente(nome_cliente, cpf_cliente, telefone_contato, usuario_id) VALUES (?,?,?,?)") ;

        $stmt->bindValue(1, $cliente->getNome());
        $stmt->bindValue(2, $cliente->getCpf());
        $stmt->bindValue(3, $cliente->getTelefoneContato());
        $stmt->bindValue(4, $cliente->getUsuarioId());


        if($stmt->execute()){

            if($stmt->rowCount()>0){
                echo ("O administrador foi adicionado.");
            } else {
                mostra_alerta("Não foi possível executar a operação!","danger");
            }
        }
        //return header('location:produto-lista.php');

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}

?>