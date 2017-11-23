<?php


function insereAdm(Administrador $administrador) {

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("INSERT INTO administrador(nome,usuario_id) VALUES (?,?)") ;
        $stmt->bindValue(1, $administrador->getNome());
        $stmt->bindValue(2, $administrador->getUsuarioId());

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("O administrador foi adicionado.","success");
                //echo ("O administrador foi adicionado.");
            }
        }
        //return header('location:produto-lista.php');

    } catch (PDOException $e) {
        //echo "Problema com a conexão: " . $e->getMessage();
        mostra_alerta("Problema com a conexão: " . $e->getMessage(),"warning");

    }

    $db = $database->closeConnection();

}

function buscaAdmId($usuario_id){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM administrador WHERE usuario_id = ?");
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

function buscaCnpj($cnpj){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM fornecedor WHERE cnpj_fornecedor = ?");
        $stmt->bindParam(1, $cnpj);

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

?>