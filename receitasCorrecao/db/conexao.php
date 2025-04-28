<?php
include("config.php");

$conexao = mysqli_connect(servidor,usuario,senha,banco) or die("Erro na conexão do banco".mysqli_connect_error());
