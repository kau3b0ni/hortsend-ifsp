<?php
require_once("config/conexao.php");
require_once("model/Produto.php");



function insereProduto(Produto $produto) {
     
    try {     
		$database = new Conexao();
        $db = $database->openConnection();        
        $stmt = $db->prepare("INSERT INTO produto (nome_produto,preco_custo,preco_venda,unidade,demanda_geral) VALUES (?,?,?,?,?)") ;
        //o primeiro parametro do método bindValue equivale a posicao na qual deve ser inserido conforme a query
		$stmt->bindValue(1, $produto->getNome());
        $stmt->bindValue(2, $produto->getPrecoCusto());
        $stmt->bindValue(3, $produto->getPrecoVenda());
        $stmt->bindValue(4, $produto->getUnidade());
        $stmt->bindValue(5, 100);

		if($stmt->execute()){
			 if($stmt->rowCount()>0){
				 echo "Operação realizada!";
				 
			 } else {
				 echo "Não foi possível exexutar a operação!";
			 }
		 }       
        
        echo "Registro criado";

    } catch (PDOException $e) {
        echo "Problema com a conexão: " . $e->getMessage();
    }
	$db = $database->closeConnection();
}





function listaProdutos() {
	try {
		$database = new Conexao();
		$db = $database->openConnection();        
		$stmt = $db->prepare("SELECT * FROM produto");
		
		
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
					echo "Operação realizada!";
					
				} else {
					echo "Não foi possível exexutar a operação!";
				}
			}       
			
			echo "Registro criado";

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

	

    



function removeProduto($id) {
	try { 
		$database = new Conexao();
		$db = $database->openConnection();

		$stmt = $db->prepare("DELETE FROM produto WHERE id_produto = ?");
		$stmt->bindParam(1, $id); 
		
		if($stmt->execute()){
			echo "Produto excluído";
			$id = null;
		} else {
			throw new PDOException("Erro: Não foi possível executar a declaração sql");	
		}	

	} catch (PDOException $e) {
		echo "Problema com a conexão: " . $e->getMessage();
	}
	$db = $database->closeConnection();	
}
	

    

