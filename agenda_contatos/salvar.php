<?php
include 'conexao.php';
$id = $_POST['id'];
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mysqli->query("UPDATE contatos SET nome='$nome', email='$email', telefone='$telefone' WHERE id=$id");
header("Location: index.php");
?>
