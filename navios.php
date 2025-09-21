<?php
include 'conexao.php';

// Inserir navio
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $capacidade = $_POST['capacidade'];
    $conn->query("INSERT INTO navios (nome, tipo, capacidade) VALUES ('$nome', '$tipo', $capacidade)");
}
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Navios</title>
</head>
<body>
<h1>Navios</h1>
<form method="POST">
    <input type="text" name="nome" placeholder="Nome do Navio" required>
    <input type="text" name="tipo" placeholder="Tipo" required>
    <input type="number" name="capacidade" placeholder="Capacidade" required>
    <button type="submit">Cadastrar</button>
</form>

<h2>Lista de Navios</h2>
<table border="1">
<tr><th>ID</th><th>Nome</th><th>Tipo</th><th>Capacidade</th></tr>
<?php
$result = $conn->query("SELECT * FROM navios");
while($row = $result->fetch_assoc()){
    echo "<tr><td>{$row['id']}</td><td>{$row['nome']}</td><td>{$row['tipo']}</td><td>{$row['capacidade']}</td></tr>";
}
?>
</table>
<a href="index.php">Voltar</a>
</body>
</html>
