<?php

$servidor = "localhost";
$usuario = "root";
$senha = "1990";
$banco = "tech3";


// Create connection
$conn =  mysqli_connect($servidor, $usuario, $senha, $banco);

// ajusta a página de código 
$conn->set_charset("utf8");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}