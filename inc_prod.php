<?php include('dashboard.php'); ?>

<h2>Inclusao de produtos</h2>

<form method="POST" action="inc_prod2.php">
	<label for="nomeP">Nome do Produto</label>
	<input type="text" name="nomeP" id="nomeP" >

	<label for="catP">Categoria</label>
	<input type="text" name="catP" id="catP" >

	<label for="descP">Descrição</label>
	<input type="text" name="descP" id="descP" >

	<button type="submit">Enviar</button>
	<button type="submit">Limpar</button>

</form>