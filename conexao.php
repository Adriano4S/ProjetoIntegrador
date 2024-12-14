<?php
$hostname = "mysql-aula.cuebxlhckhcy.us-east-1.rds.amazonaws.com";
$database = "mysqlaula";
$usuario = "mysqlaula";
$senha = "MySQLAula123";

$mysqli = new mysqli($hostname, $usuario, $senha, $database);

if ($mysqli->connect_errno) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

