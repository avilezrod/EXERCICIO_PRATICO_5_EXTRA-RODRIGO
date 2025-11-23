<?php

$host = "localhost";
$user = "root";
$pass = "";
$dbname = "agenda";

$mysqli = new mysqli($host, $user, $pass);
if ($mysqli->connect_errno) {
    echo "Falha na conexão: " . $mysqli->connect_error;
    exit();
}

$mysqli->query("CREATE DATABASE IF NOT EXISTS $dbname");

$mysqli->select_db($dbname);

$mysqli->query(
    "CREATE TABLE IF NOT EXISTS contatos (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(100),
        email VARCHAR(100),
        telefone VARCHAR(20)
    )"
);
?>
