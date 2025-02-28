<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/index.css">
</head>
<body>
    <main>
        <h1>CADASTRO</h1>

        <form action="pages/menu.php" method="post">
            <!-- NOME USUARIO -->
            <div class="form-input">
                <label for="">Nome</label>
                <input placeholder="Inseria seu nome completo Ex Jhon Doe" name="nome" id="nome" type="text">
            </div>   

            <!-- EMAIL USUARIO -->
            <div class="form-input">
                <label for="">Email</label>
                <input placeholder="Inseria seu email Ex nome@email" name="email" id="email" type="email">
            </div>  

            <!-- SENHA USUARIO -->
            <div class="form-input">
                <label for="">Senha</label>
                <input placeholder="Inseria sua senha" name="senha" id="senha" type="password">
            </div> 

           <!-- BOTÃO DE ENVIAR -->
            <button type="submit">ENVIAR</button>

        </form>
    </main>
</body>
</html>