<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- Atividade 1 -->
    <form action="scripts/cotacao.php" method="post">
        <input step="0.01" name="dolar" 
        id="dolar" type="number">
        <button type="submit">Enviar</button>

    </form>

    <hr>

    <!-- Atividade 2 -->
    <form action="scripts/idade.php" method="post">
    <input name="idade" id="idade" type="number">
        <button type="submit">Enviar</button>

    </form>
    
    <hr>
    
    <!-- Atividade 3 -->
    <?php
        include "scripts/aleatorio.php";
    ?>
</body>
</html>