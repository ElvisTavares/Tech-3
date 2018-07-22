<?php include('dashboard.php'); ?>
<h2>Listagem</h2>
<table>
	<thead>
		<tr>
			<th>Nome do produto</th>
			<th>Categoria</th>
			<th>Descrição</th>
		</tr>
	</thead>


<tbody>
<?php
	include ('conexao.php');
	$sql = "SELECT id, nomeP, categP, descriP FROM produtos";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		# code...

		while ($row = $result->fetch_assoc()) {
			# code...
			$id = $row["id"];
		/*	


				echo "<tr><td>".$row["nomeP"]."</td>";
			echo "<td>".$row["categP"]."</td>";
			echo "<td>".$row["descriP"]."</td></tr>";
			*/
		$nome = $row["nomeP"];
			$categoria = $row["categP"];
			$descricao = $row["descriP"];

			echo "<tr><td>".$nome."</td>";
			echo "<td>".$categoria."</td>";
			echo "<td>".$descricao."</td>";

			echo "<td> <a href='alt_prod.php?id=$id'>Alterar</a>
					<a href='exc_prod.php?id=$id' onclick='return confirm(\"confirma a exclusão de $nome?\")'>Exluir</a>
			</td></tr> "; 
		}
	}else{
		echo "0 Resultados";
	}

	$conn->close();

	?>

	</tbody>
</table>