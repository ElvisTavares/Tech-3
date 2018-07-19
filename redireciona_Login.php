<?php

session_start();

if (isset($_SESSION['UserLogado'])){
    include('valida_Login.php');
}else{
    include('login.php');
}