<?php include('dashboard.php'); ?>

<h2>Inclusão de produtos</h2>

<?php
	//obtem os campos do formulario
	$nome = $_POST["nomeP"];
	$categoria = $_POST["catP"];
	$descricao = $_POST["descP"];

	//exibe as informaçoes do produto

	echo "<h3> Nome: $nome</h3>";
	echo "<h3> Categoria: $categoria </h3>";
	echo "<h3> Descrição: $descricao </h3>";


	include('conexao.php');

	$sql = "INSERT INTO produtos(nomeP, categP, descriP) VALUES ('$nome', '$categoria', '$descricao')";

	if ($conn->query($sql)===TRUE) {
		# code...
		echo "<h3> OK, Produto cadastrado</h3>";
	}else{
		echo "Erro: ", $sql . "<br>" . $conn->error;
	}

	$conn->close();