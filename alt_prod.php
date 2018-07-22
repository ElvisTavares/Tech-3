<?php

	$id = $_GET["id"];

	include('conexao.php');

	$sql = "SELECT * FROM produtos WHERE id=$id";

	$result = $conn->query($sql);

	$row = $result->fetch_assoc();

	$nome = $row['nomeP'];
	$categoria = $row['categP'];
	$descricao = $row['descriP'];


	?>

	<h2>Alteração de produtos</h2>

	<form method="POST" action="alt_prod2.php?id=<?= $id ?>">
		<label for="nome">Nome</label>
		<input type="text" name="nomeP" id="nomeP" value="<?= $nome ?>" required>

		<label for="categoria">Categoria</label>
		<input type="text" name="categP" id="categP" value="<?= $categoria ?>" required>


		<label for="descricao">Descrição</label>
		<input type="text" name="descriP" id="descriP" value="<?= $descricao ?>" required>

		<input type="submit" name="Enviar" value="Enviar">
		<input type="reset" name="Limpar" value="Limpar">

	</form>