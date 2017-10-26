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


/*
function buscaAdministrador($conexao, $email) {

	$query = "select * from administrador where email = '$email'";
	
	return mysqli_query($conexao, $query);
}*/

?>