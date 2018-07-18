
<?php

include('dashboard.php');
?>

<form action="produto.php" method="POST">
    <tbody>
        <tr>
            <td>Nome do produto: </td>
            <td><input type="text" name="nomeP" value=""></td>
        </tr>

        <tr>
            <td>Categoria: </td>
            <td><input type="text" name="categP" value=""></td>
        </tr>

        <tr>
            <td>Descrição: </td>
            <td><input type="text" name="descriP" value=""></td>
        </tr>

    <tr>
        <td><input type="hidden" name="acao" value="inserir"></td>
        <td><input type="submit" value="Enviar" name="Enviar"></td>
    </tr>

    </tbody>
</form>