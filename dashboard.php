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

<h2>Menu</h2>
<ul>
	<li><a href="#">Inicio</a></li>
    <li><a href="cad_prod.php">Cadastro de produtos</a></li>
    <li><a href="blog_adm.php">Listar</a></li>
    <li><a href='deslogar.php'>Sair</a><a href=""></a></li>
</ul>