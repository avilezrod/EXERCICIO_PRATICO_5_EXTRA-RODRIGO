<?php
include 'conexao.php';
$id = $_GET['id'];
$mysqli->query("DELETE FROM contatos WHERE id=$id");
header("Location: index.php");
?>
