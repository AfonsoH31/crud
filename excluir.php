<?php
include_once "conexao.php";

	try {
		//Variávis que vão receber os dados
		$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
		//inserindo os dados no banco de dados
		$delete = $conectar->prepare("DELETE FROM login WHERE id = :id");
		$delete->bindParam(':id', $id);
		$delete->execute();
		//faz com que depois que vc executar a inserção do banco de dados, o usuário retorna para o index
		header("location: index.php");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>