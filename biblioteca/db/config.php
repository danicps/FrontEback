<?php 

DEFINE("SERVIDOR", "localhost");
DEFINE("USUARIO", "root");
DEFINE("SENHA", "");
DEFINE("BANCO", "biblioteca");

// Criando a conexão com o banco de dados
$conn = new mysqli(SERVIDOR, USUARIO, SENHA, BANCO);

// Verificando se a conexão foi bem-sucedida
if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>