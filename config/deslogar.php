<?php

session_start();
unset($_SESSION['UserLogado']); #Destroi a variavel $UserLogado
header('Location: ../index.php');