<?php
	//include faz a coneção com o arquivo que tá se conectanto com obanco de dados
	include_once "conexao.php";
	try {
		//consultando as informações no banco de dados
		$consulta = $conectar->query("SELECT * FROM login");
		//fazendo a tabela e colocando a lista lista de cadastro nela
		echo "<a href='formCadastro.php'>Novo cadastro</a>
		<br><br>
		Listagem de usuários";

		echo "
		<table border='1'>
			<tr>
				<td>Nome</td>
				<td>Login</td>
				<td>Ações</td>
			</tr>";
		//laço de repetição que faz com  que apareça as informações do banco de dados
			while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
				echo "<tr>
						<td>$linha[nome]</td>
						<td>$linha[login]</td>
						<td><a href='formEditar.php?id=$linha[id]'>Editar</a> - 
						 	<a href='Excluir.php?id=$linha[id]'>Excluir</a>
						</td>
					</tr>";
			}

		echo "</table>";
		//'RowCount' informa quantos registros foram feitos no banco de dados
		echo $consulta->rowCount() . "Registros exibidos";
	} catch (PDOException $e) {
		echo $e -> getMessage();
	}
?>