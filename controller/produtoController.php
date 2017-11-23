<?php



function insereProduto(Produto $produto) {
     
    try {     
		$database = new Conexao();
        $db = $database->openConnection();        
        $stmt = $db->prepare("INSERT INTO produto (nome_produto,preco_custo,preco_venda,unidade,demanda_geral,produto_cooperativa_id) VALUES (?,?,?,?,?,?)") ;
        //o primeiro parametro do método bindValue equivale a posicao na qual deve ser inserido conforme a query
		$stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getPrecoCusto());
        $stmt->bindValue(3, $produto->getPrecoVenda());
        $stmt->bindValue(4, $produto->getUnidade());
        $stmt->bindValue(5, $produto->getDemanda());
        $stmt->bindValue(6, $produto->getPcId());

		if($stmt->execute()){
			 if($stmt->rowCount()>0){
				return $db->lastInsertId();
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





function listaProdutos() {
	try {
		$database = new Conexao();
		$db = $database->openConnection();        
		$stmt = $db->prepare("SELECT * FROM produto
                                        ORDER BY nome_produto");
		
		
		if($stmt->execute()) {
		
			while($resultado = $stmt->fetchAll(PDO::FETCH_OBJ)) {		
				return $resultado;
			}

		} else {
			echo "Não foi possível recuperar os dados do banco de dados";		
		}

	} catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

	$db = $database->closeConnection();	

}

function alteraProduto($id, Produto $produto){
	try {
		$database = new Conexao();
		$db = $database->openConnection();

		$stmt = $db->prepare("UPDATE produto SET nome_produto = :nome_produto,
												 preco_custo = :preco_custo,
												 preco_venda = :preco_venda,
												 unidade = :unidade
												 WHERE id_produto = {$id}");
		
		$stmt->bindValue(':nome_produto', $produto->getNome());
		$stmt->bindValue( ':preco_custo', $produto->getPrecoCusto());
		$stmt->bindValue( ':preco_venda', $produto->getPrecoVenda());
		$stmt->bindValue(     ':unidade', $produto->getUnidade());
		
		if($stmt->execute()){
			if($stmt->rowCount()>0){
			   mostra_alerta("Alteração realizada!","success");
			} else {
			   mostra_alerta("Não foi possível executar a operação!","danger");
			}
		}    
		return header('location:produto-lista.php');  

	} catch (PDOException $e) {
		echo "Problema com a conexão: " . $e->getMessage();
	}

		$db = $database->closeConnection();

}


function buscaProduto($id){

	try { 
		$database = new Conexao();
		$db = $database->openConnection();
		
		$stmt = $db->prepare("SELECT * FROM produto WHERE id_produto = ?");
		$stmt->bindParam(1, $id); 
		
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

function verificaProdutoCooperativa($id){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("SELECT * FROM produto WHERE produto_cooperativa_id = $id");
        $stmt->bindParam(1, $id);

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
  



function removeProduto($id) {
	try { 
		$database = new Conexao();
		$db = $database->openConnection();

		$stmt = $db->prepare("DELETE FROM produto WHERE id_produto = ?");
		$stmt->bindParam(1, $id); 
		
		if($stmt->execute()){
			if($stmt->rowCount()>0){
			   mostra_alerta("Produto removido!","success");
			} else {
			   mostra_alerta("Não foi possível executar a operação!","danger");
			}
		}    


	} catch (PDOException $e) {
		echo "Problema com a conexão: " . $e->getMessage();
	}
	$db = $database->closeConnection();	
}

function atualizaDemanda($demanda, $id_produto){
    try {
        $database = new Conexao();
        $db = $database->openConnection();

        $stmt = $db->prepare("UPDATE produto SET demanda_geral = :demanda											 
												      WHERE id_produto = {$id_produto}");

        $stmt->bindParam(':demanda', $demanda);

        if($stmt->execute()){
            if($stmt->rowCount()>0){
                mostra_alerta("Alteração realizada!","success");
            } else {
                mostra_alerta("Não foi possível executar a operação!","danger");
            }
        }
        return header('location:produto-lista.php');

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }

    $db = $database->closeConnection();

}
	

    

