<?php



if (isset($_POST['acao'])){
    if ($_POST['acao']=="inserir"){
        inserirPessoa();
    }
}

function abrirBd(){
    $conexao = new mysqli("localhost", "root","1990","tech3");
    return $conexao;

}


function inserirPessoa(){
   $bd = abrirBd();
    $sql = "INSERT INTO produtos(nomeP, categP, descriP)  VALUES ('{$_POST["nomeP"]}','{$_POST["categP"]}', '{$_POST["descriP"]}')";
   $bd->query($sql);

   voltarProd();

}

function voltarProd(){
    header("Location:cad_prod.php");
}