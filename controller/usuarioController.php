<?php



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
				return $db->lastInsertId();
			 }
         }


		

    } catch (PDOException $e) {
        if($e->getCode() == 23000){
            if(strpos($e->getMessage(),"for key 'email'") > 0){
                $msg = "Não foi possível adicionar. O e-mail " . $usuario->getEmail() . " já existe.";
                mostra_alerta($msg,"danger");
            }
            //mostra_alerta("Não foi possível adicionar. Erro: " . $e->getMessage(),"danger");
        }else{
            mostra_alerta("Problema com a conexão. Erro: " . $e->getMessage(),"danger");
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


function buscaUsuario($email){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->bindParam(1, $email);

        if($stmt->execute()){

            while($resultado = $stmt->fetch(PDO::FETCH_OBJ)) {
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



function verificaEmail($email){

    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM usuario WHERE email = ?");
        $stmt->bindParam(1, $email);

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