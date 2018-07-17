<?php

session_start();

if (isset($_SESSION['UserLogado'])){
    include('config/login.php');
}else{
    include('login.php');
}