<?php
    include('db/conexao.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <header>
        <h1>Cardápio de Comidas</h1>
    </header>

    <div id="inicio">
        <div class="lista">
            <?php
            $sql = "SELECT * FROM catalogo";
            $query = mysqli_query($conexao, $sql) or die("Erro na requisição!".mysqli_error($conexao));

                while($dados = mysqli_fetch_assoc($query)) {
                    ?>
                    <ul>

                    <div class="card" style="width: 18rem;">
                        <img src="<?=$dados['imagem'] ?>" alt="Imagem do produto">
                        <div class="card-body">
                            <h5><li><?= $dados['nome']?></li></h5>
                                <p class="valor"><li>R$<?= $dados['valor']?></li></p>
                        
                        </div>
                    </div>

                    </ul>
                    <?php
                }
            mysqli_close($conexao);
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>