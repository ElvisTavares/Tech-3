<?php

session_start();



    function validaAcesso($usuario){
        if (empty($usuario)):
            header('Location: ../index.php');
        endif;
    }

    validaAcesso($_SESSION['UserLogado']);


include('dashboard.php');
