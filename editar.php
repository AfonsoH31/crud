<?php
include_once "conexao.php";

	try {
		//Variávis que vão receber os dados
		$id = filter_var($_POST['id'], FILTER_SANITIZE_NUMBER_INT);
		$nome = filter_var($_POST['nome']);
		$login = filter_var($_POST['login']);
		//inserindo os dados no banco de dados
		$update = $conectar->prepare("UPDATE login SET nome = :nome, login = :login WHERE id = :id");
		$update->bindParam(':id', $id);
		$update->bindParam(':nome', $nome);
		$update->bindParam(':login', $login);
		$update->execute();
		//faz com que depois que vc executar a inserção do banco de dados, o usuário retorna para o index
		header("location: index.php");
	} catch (PDOException $e) {
		echo $e->getMessage();
	}
?>