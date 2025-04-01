<?php
include "db/config.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $descricao = $_POST["descricao"];
    $avaliacao = $_POST["avaliacao"];

    $sql = "INSERT INTO livros (nome, imagem, descricao, avaliacao) VALUES ('$nome', '$imagem', '$descricao', '$avaliacao')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Erro: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Livro</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <h1>Cadastrar Livro</h1>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome do Livro" required>
        <input type="text" name="imagem" placeholder="URL da Imagem" required>
        <textarea name="descricao" placeholder="Descrição" required></textarea>
        <input type="number" step="0.1" name="avaliacao" placeholder="Avaliação (0-10)" required>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>