<?php

$usuario = "root";
$senha = "";
$database = "bd_autojva";
$host= "localhost";

$conn = new mysqli($host, $usuario, $senha, $database);

if($conn->error){
    die("Falha ao conectar com o banco de dados: ". $mysql->error);
}
    
?>