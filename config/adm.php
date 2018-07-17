<?php
session_start();



    function validaAcesso($usuario){
        if (empty($usuario)):
            header('Location: ../index.php');
        endif;
    }

    validaAcesso($_SESSION['UserLogado']);
        echo "Ola";
        echo "<br><a href='deslogar.php'>Sair</a>";