<?php
require_once("config/conexao.php");
require_once("model/Administrador.php");

function insereAdministrador(Administrador $administrador) {

	try {     
		$database = new Conexao();
		$db = $database->openConnection();
		    
		$stmt = $db->prepare("INSERT INTO administrador(matricula,nome,usuario_id) VALUES (?,?,?)") ;
		       
		$stmt->bindValue(1, $administrador->getMatricula());
		$stmt->bindValue(2, $administrador->getNome());
		$stmt->bindValue(3, $administrador->getUsuarioId());     
		
		if($stmt->execute()){
						
			 if($stmt->rowCount()>0){
				mostra_alerta("O usuário foi adicionado.","success");
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


/*
function buscaAdministrador($conexao, $email) {

	$query = "select * from administrador where email = '$email'";
	
	return mysqli_query($conexao, $query);
}*/

?>