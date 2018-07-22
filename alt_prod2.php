
<h2>Alteraçao de produtos</h2>

<?php
	$id= $_GET["id"];
	$nome = $_POST['nomeP'];
	$categoria = $_POST['categP'];
	$descricao = $_POST['descriP'];

	echo "<p>Nome: ".$nome."</p>";
	echo "<p>categoria: ".$categoria."</p>";
	echo "<p>descricao: ".$descricao."</p>";

	include('conexao.php');

	$sql = "UPDATE produtos SET nomeP='$nome', descriP='$descriP', categP='$categoria' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
	# code...
	echo "Produto alterado";
}else{
	echo "Erro".$sql. "<br>" . $conn->error;
}

$conn->close();
