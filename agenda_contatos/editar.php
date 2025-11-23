<?php
include 'conexao.php';
$id = $_GET['id'];
$result = $mysqli->query("SELECT * FROM contatos WHERE id=$id");
$contato = $result->fetch_assoc();
?>
<form method="post" action="salvar.php">
    <input type="hidden" name="id" value="<?= $contato['id'] ?>">
    Nome: <input name="nome" value="<?= $contato['nome'] ?>">
    Email: <input name="email" value="<?= $contato['email'] ?>">
    Telefone: <input name="telefone" value="<?= $contato['telefone'] ?>">
    <button type="submit">Salvar</button>
</form>
