<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
    <a href="pagina2.php">Pag 2</a>
    <?php
    // include - inclui um código de arquivo estrangeiro
        include "scripts/header.php";
    // include - inclui um código de arquivo estrangeiro
    // apenas uma vez, caso novamente chamado, o segundo
    // chamado será ignorado!
        include_once "scripts/teste.php";
        include_once "scripts/teste.php";

    // diferença do include é que ele gera 
    // erros mais especificados e explicativos
        require_once "scripts/teste2.php";
        require_once "scripts/teste2.php"

    ?>

</body>
</html>