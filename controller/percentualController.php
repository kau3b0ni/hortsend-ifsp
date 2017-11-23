<?php


function inserePercentual($percentual){
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("UPDATE percentual SET percentual_lucro = ?");

        $stmt->bindValue(1, $percentual);

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("Sistema atualizado.","success");
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

function inserePercentualAuditoria(Percentual $percentual){
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("UPDATE percentual_auditoria SET percentual_old=?, data_modificacao=?, administrador_matricula=? ");

        $stmt->bindValue(1, $percentual->getPercentualLucro());
        $stmt->bindValue(2, $percentual->getDataModificacao());
        $stmt->bindValue(3, $percentual->getAdministradorMatricula());


        if($stmt->execute()){
            if($stmt->rowCount()>0){
                //mostra_alerta("Sistema atualizado.","success");
                echo"ok";
            }
        }

    } catch (PDOException $e) {
        //echo "Problema com a conexão: " . $e->getMessage();
        echo($e->getMessage());
    }
    $db = $database->closeConnection();
}

function verPercentual(){
    try {
        $database = new Conexao();
        $db = $database->openConnection();
        $stmt = $db->prepare("SELECT percentual_lucro FROM percentual");



        if($stmt->execute()){
            while($resultado = $stmt->fetch(PDO::FETCH_OBJ)) {
                return $resultado;
            }
        }

    } catch (PDOException $e) {
        //echo "Problema com a conexão: " . $e->getMessage();
        echo($e->getMessage());
    }
    $db = $database->closeConnection();
}
