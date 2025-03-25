<h1>VOCE ESTÁ NA LISTA DE CARROS</h1>

<a href="index.php?menu=adicionarCarro">
    <button type="button">ADICIONAR CARRO</button>
</a>

<table>
    <tr>
        <th>Modelo</th>
        <th>Valor</th>
        <th>Ano</th>
        <th>Cor</th>
        <th>Marca</th>
    </tr>

<?php
$sql = "SELECT * FROM carro";
// pedido
$query = mysqli_query($conexao,$sql) or die("Erro na requisição!".mysqli_error($conexao));

// fetch_asso = vai acessar query, e contar os resultados
while($dados = mysqli_fetch_assoc($query)){
    ?>
    <tr>
        <td><?=$dados['modeloCarro']?></td>
        <td><?=$dados['valorCarro']?></td>
        <td><?=$dados['anoCarro']?></td>
        <td><?=$dados['corCarro']?></td>
        <td><?=$dados['marcaCarro']?></td>

    </tr>
<?php

    }

?>
</table>