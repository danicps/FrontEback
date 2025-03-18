<?php

//incia sessão
session_start();

//verifica se carrinho está null
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

if(isset($_GET['produto'])){
    // NOMEVARIAVEL[INDICEVAZIO] = PRODUTO -> PODE SER ADICIONADO 
    // SUBSTITUIDO DO +=
    $_SESSION['carrinho'] = [];
}

if(isset($_GET['deletarCarrinho'])){
    // session_destroy();
    $_SESSION['carrinho'] = [];
}

// var_dump($_SESSION['carrinho']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho</title>
   
</head>
<body>

    <h1>Carrinho de Compras</h1>
<p><a href="?produto=SSD">Adicionar SSD</a></p>
<p><a href="?produto=Disco de memória">Adicionar Disco de memória</a></p>
<p><a href="?produto=Memória RAM">Adicionar Memória RAM</a></p>
<p><a href="?produto=Placa mãe">Adicionar Placa mãe</a></p>

<!-- deletar -->
<p><a href="?deletarCarrinho=True">Deletar Carrinho</a></p>

<ol>
    <?php
    // foreach (array as alias){}
    // foreach (filmes as filmes){filme.nome, filme.desc}
    foreach ($_SESSION['carrinho'] as $produto){
        echo "<li> $produto </li>";
    } 
    ?>

 </ol>
</body>
</html>
