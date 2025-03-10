<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Includes</title>
</head>
<body>
    <?php
    echo "Olá mundo!";

    $repetir = true;
    $vezes = 10;
    $contador = 1;

    while ($repetir == true){
        echo "<br> Estou repetindo";

    if ($contador == $vezes){
        //break;
        $repetir = false;
    }    
    $contador++;
}

?>
</body>
</html>