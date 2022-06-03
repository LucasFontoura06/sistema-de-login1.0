<?php

$hostname = "localhost";
$bancodedados = "login familia";
$usuario = "root";
$senha = "";

$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

if ($mysqli->connect_errno){
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}