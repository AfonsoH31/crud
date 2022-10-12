<?php 
	//'try' faz a conexão com o banco de dados e o 'catch' exibe a mensagem de erro
	try {
		/*conexão com o banco de dados

			'mysql:host=localhost' indica qual é o banco de dados e que vai ser conexão local 
			'dbname=pdo' é o nome do banco de dados | pdo é o nome do banco de dados
			"root" é o nome do usuário do banco e logo a frente é a senha

		*/
		$conectar = new PDO('mysql:host=localhost;port=3306;dbname=pdo', 'root', '');
	} 
	catch (PDOException $e) {
		//$e->getMessage(); indica qual o erro
		echo $e->getMessage();
	}	
?>