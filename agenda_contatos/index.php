<?php
include 'conexao.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mysqli->query("INSERT INTO contatos (nome, email, telefone) VALUES ('$nome', '$email', '$telefone')");
}

$result = $mysqli->query("SELECT * FROM contatos");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Agenda de Contatos</h2>
    <form method="post" id="formContato">
        <table>
            <tr>
                <td><label for="nome">Nome:</label></td>
                <td><input type="text" name="nome" id="nome" required></td>
                <td><label for="email">E-mail:</label></td>
                <td><input type="email" name="email" id="email" required></td>
                <td><label for="telefone">Telefone:</label></td>
                <td><input type="tel" name="telefone" id="telefone" required></td>
                <td><button type="submit">Cadastrar</button></td>
            </tr>
        </table>
    </form>
    <br>
    <table border="1">
        <tr>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
        <tr>
            <td><?= htmlspecialchars($row['nome']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= htmlspecialchars($row['telefone']) ?></td>
            <td>
                <a href="editar.php?id=<?= $row['id'] ?>">Editar</a>
                <a href="excluir.php?id=<?= $row['id'] ?>" onclick="return confirm('Excluir esse contato?')">Excluir</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <script src="script.js"></script>
</body>
</html>
