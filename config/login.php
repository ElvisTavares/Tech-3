<?php
session_start();
$loginErro = "Nenhum usuário com esses dados";


if ((isset($_POST['email']) && isset($_POST['senha'])) || (isset($_SESSION['UserLogado']))){
    require('conexao.php');

    if (isset($_POST['email']) && isset($_POST['senha'])){
    $queryUser1 = mysqli_query($conn, "SELECT * FROM usuarios WHERE email = '$_POST[email]' AND senha='$_POST[senha]'LIMIT 1");

    if (mysqli_num_rows($queryUser1) != 0){
        if ($queryUser = mysqli_fetch_assoc($queryUser1)){
            $_SESSION['UserLogado'] = $queryUser['id'];
            header("Location: adm.php");
        }else{
            echo $loginErro;

        }
    }else{
        echo $loginErro;
    }
    }else{
        header("Location: adm.php");

    }
}else{
    header("Location: ../login.php");
}