<?php 
$id = $_GET["id"];

 ?>

 <h2>Exlusao de produtos</h2>
 <h2>Produto a ser excluido: <?=$id ?></h2>

 <?php 
 include('conexao.php');

 	$sql = "DELETE FROM produtos WHERE id=$id";


 	if ($conn->query($sql) == TRUE) {
 		# code...
 		echo "OK excluído";

 	}else{
 		echo "Erro".$conn->error;

 	}

 	$conn->close();
 	
 ?>

