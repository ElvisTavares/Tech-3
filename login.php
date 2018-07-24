
<?php
include('cabecalho.php');
?>

<div class="container">
 
    <div class="box">


    <form action="valida_Login.php" method="POST">

        <div class="row">
            <input type="text" placeholder="E-mail" name="email" id="email">
        </div>

        <div class="row">
                <input type="password" placeholder="Senha" name="senha" id="senha">
        </div>

        <div class="row">
            <input type="submit" value="Enviar"><br>
        </div>
    </form>
    </div>
</div>
