<?php
include "db/config.php";

$id = $_GET["id"];
$sql = "SELECT * FROM livros WHERE id = $id";
$result = $conn->query($sql);
$livro = $result->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $imagem = $_POST["imagem"];
    $descricao = $_POST["descricao"];
    $avaliacao = $_POST["avaliacao"];

    $sql = "UPDATE livros SET nome='$nome', imagem='$imagem', descricao='$descricao', avaliacao='$avaliacao' WHERE id=$id";

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
    <title>Editar Livro</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <h1>Editar Livro</h1>
    <form action="" method="post">
        <input type="text" name="nome" value="<?php echo $livro['nome']; ?>" required>
        <input type="text" name="imagem" value="<?php echo $livro['imagem']; ?>" required>
        <textarea name="descricao" required><?php echo $livro['descricao']; ?></textarea>
        <input type="number" step="0.1" name="avaliacao" value="<?php echo $livro['avaliacao']; ?>" required>
        <button type="submit">Salvar Alterações</button>
    </form>
</body>
</html>