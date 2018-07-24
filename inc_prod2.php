<?php include('dashboard.php'); ?>

<h2>Inclusão de produtos</h2>

<?php
	//obtem os campos do formulario
	$nome = $_POST["nomeP"];
	$categoria = $_POST["catP"];
	$descricao = $_POST["descP"];
	$imagem = $_FILES["imagem"]["name"];
	$imagem_tmp = $_FILES["imagem"]["tmp_name"];

	//exibe as informaçoes do produto

	echo "<h3> Nome: $nome</h3>";
	echo "<h3> Categoria: $categoria </h3>";
	echo "<h3> Descrição: $descricao </h3>";
	echo "<h3> Imagem: $imagem</h3>";

	include('conexao.php');

	$sql = "INSERT INTO produtos(nomeP, categP, descriP) VALUES ('$nome', '$categoria', '$descricao')";

	if ($conn->query($sql)===TRUE) {
		# code...
		$last_id = $conn->insert_id;
		echo "<h3> OK, Produto cadastrado</h3>";

		$destino = "figuras/". $last_id . ".jpg";


		move_uploaded_files($imagem_tmp, $destino);

	}else{
		echo "Erro: ", $sql . "<br>" . $conn->error;
	}

	$conn->close();