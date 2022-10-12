<?php
include_once "conexao.php";
	//filter_var faz com que apenas que a variável receba apenas o seu tipo, por exemplo int
	$id = filter_var($_GET['id'], FILTER_SANITIZE_NUMBER_INT);
	$consulta = $conectar->query("SELECT * FROM login WHERE id = '$id'");
	$linha = $consulta->fetch(PDO::FETCH_ASSOC);
?>


<!--O action do form indica para onde essas informações vão-->
<!--O que estou fazendo é um formulário de editar cadastros comum-->
<form action="editar.php" method="post">
	Nome: <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" id="nome"><br>
	Login: <input type="text" name="login" value="<?php echo $linha['login'] ?>" id="login" ><br>
	<input type="hidden" name="id" value="<?php echo $linha['id']?>">
	<input type="submit" name="Editar">
</form>