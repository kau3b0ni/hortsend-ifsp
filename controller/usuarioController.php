<?php
require_once("../config/conexao.php");
require_once("../model/Usuario.php");
require_once("../alerta-sessao.php");


function insereUsuario(Usuario $usuario) {
    try {     
		$database = new Conexao();
        $db = $database->openConnection();        
        $stmt = $db->prepare("INSERT INTO usuario(email,senha,nivel_acesso) VALUES (?,?,?)");        
		$stmt->bindValue(1, $usuario->getEmail());
        $stmt->bindValue(2, $usuario->getSenha());
        $stmt->bindValue(3, $usuario->getNivelAcesso());
        

		if($stmt->execute()){
			 if($stmt->rowCount()>0){
				mostra_alerta("O usuário foi adicionado.","success");
			 } else {
				mostra_alerta("Não foi possível executar a operação!","danger");
			 }
         }
         
         
		 //return header('location:produto-lista.php');
		

    } catch (PDOException $e) {
        if($e->getCode() == 23000){
            mostra_alerta("O registro já existe.","danger");
            if ($usuario->getNivelAcesso() == 1){
                return header('location:adm-form.php');
            }           
            //echo "Erro:".$e->getCode()." Registro já existe." ; 
        }else{ 
            echo "Problema com a conexão: " . $e->getCode(); // shows the exception error message 
        } 
                   
    }

	$db = $database->closeConnection();
}


function buscaUsuarioId($email){
    
        try { 
            $database = new Conexao();
            $db = $database->openConnection();
            
            $stmt = $db->prepare("SELECT * FROM usuario WHERE email = ?");
            $stmt->bindParam(1, $email); 
            
            if($stmt->execute()){
    
                    while($resultado = $stmt->fetch(PDO::FETCH_OBJ)) {		
                        return $resultado->id;
                    }
                        
                    } else {
                        echo "Não foi possível exexutar a operação!";
                    }			      

                
                
    
        } catch (PDOException $e) {
            echo "Problema com a conexão: " . $e->getMessage();
        }
    
            $db = $database->closeConnection();	
    
    }