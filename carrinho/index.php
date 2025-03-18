<?php

//incia sessão
session_start();

class Produto{
    public $id;
    public $nome;
    public $valor;
    public $desc;

    public function _construct($id,$nome,$valor,$desc){
        $this->$id = $id;
        $this->$nome = $nome;
        $this->$valor = $valor;
        $this->$desc = $desc;

    }
}

// public - qualquer parte do código mexe no atributo
// private - apenas o que está dentro do class

//verifica se algo está null
if(!isset($_SESSION['carrinho'])){
    $_SESSION['carrinho'] = [];
}

//adiciona um produto
if(isset($_GET['produto'])){
    $produtosDados = new Produto($_GET['id'],$_GET['produto'],$_GET['valor'],$_GET['desc']);
    $_SESSION['carrinho'][] = $produtosDados;
}

// limpar carrinho
if (isset($_GET['LimparCarrinho'])){
    $_SESSION['carrinho'] = [];
}

// remover um item
if(isset($_GET['removerItem'])){
    foreach($_SESSION['carrinho'] as $produto){
        if($produto->id == $_GET['removerItem']){
            unset($_SESSION['carrinho'][$produto]);
            $_SESSION['carrinho'] = array_values($_SESSION['carrinho']);
        }
    }
}

// var_dump($_SESSION['carrinho']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>

    <h1>Carrinho de Compras</h1>
<p><a href="?id=1&produto=Carmed&valor=20,00&desc='Brilho rosa e cheirinho de fini sem igual'">Adicionar Carmed</a></p>
<p><a href="?id=2&produto=Pó Compacto&valor=50,00&desc='Efeito matte prolongado'">Adicionar Pó Compacto</a></p>
<p><a href="?id=3&produto=Gloss Natura&valor=105,99&desc='com cheirinho de Tutti Frutti e hidratação para os lábios'">Adicionar Gloss</a></p>
<p><a href="?id=4&produto=Blush&valor=99,99&desc='efeito profissional com diversos tons'">Adicionar blush</a></p>
<a href="?LimparCarrinho=True">Limpar carrinho</a>

<?php
$valorTotal = 0;
foreach($_SESSION['carrinho'] as $produto){
    $valorTotal += $produto->valor;
}

if($valorTotal == 0){
    echo "O carrinho está vazio";
}else{
    echo "O valor total R$ $valorTotal";
}

?>

<h2>Produtos no Carrinho</h2>
<ol>
    <?php
    // foreach (array as alias){}
    // foreach (filmes as filmes){filme.nome, filme.desc}
    foreach ($_SESSION['carrinho'] as $produto){
        echo "<li>
        <h1> $produto->nome </h1>
        <p> R$ $produto->nome </p>
        <p> $produto->desc </p>
        </li>";
    } 

 ?>

 </ol>
</body>
</html>
