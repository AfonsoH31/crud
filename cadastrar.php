<?php
include_once "conexao.php";

	try {
		//Variávis que vão receber os dados
		$nome = filter_var($_POST['nome']);
		$login = filter_var($_POST['login']);
		//inserindo os dados no banco de dados
		$insert = $conectar->prepare("INSERT INTO login (nome, login) VALUES(:nome, :login)");
		$insert->bindParam(':nome', $nome);
		$insert->bindParam(':login', $login);
		$insert->execute();
		//faz com que depois que vc executar a inserção do banco de dados, o usuário retorna para o index
		header("location: index.php");
	} catch (PDOException $e) {
		echo 'erro'. $e->getMessage();
	}
?>