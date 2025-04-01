<?php
include "db/config.php";

$sql = "SELECT * FROM livros";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <title>Lista de Livros</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <h1>Lista de Livros</h1>
    <a href="cadastrar.php">Cadastrar Novo Livro</a>
    <div class="container">
        <?php while ($row = $result->fetch_assoc()): ?>
            <div class="livro">
                <img src="<?php echo $row['imagem']; ?>" alt="Capa do Livro">
                <h3><?php echo $row['nome']; ?></h3>
                <p><?php echo $row['descricao']; ?></p>
                <p>Avaliação: <?php echo $row['avaliacao']; ?></p>
                <a href="editar.php?id=<?php echo $row['id']; ?>">Editar</a>
            </div>
        <?php endwhile; ?>
    </div>
</body>
</html>