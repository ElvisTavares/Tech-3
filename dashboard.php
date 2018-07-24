<?php
session_start();
    function validaAcesso($usuario){
        if (empty($usuario)):
            header('Location: index.php');
        endif;
    }
    validaAcesso($_SESSION['UserLogado']);

?>

<link rel="stylesheet" href="css/styles.css">

<div class="dash">
    <h2>Painel administrativo</h2>

</div>

<div id="nav">

<ul>
	<li><a href="#">Inicio</a></li>
    <li><a href="cad_prod.php">Cadastro de produtos</a></li>
    <li><a href="list_prod.php">Listar</a></li>
    <li><a href='deslogar.php'>Sair</a><a href=""></a></li>
</ul>
</div>
