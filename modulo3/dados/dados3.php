<?php

// if($_SERVER['REQUEST_METHOD'] === 'POST'){
//     echo ' foi enviado o formulario';
// }else{
//     echo 'ainda não foi enviado o formulario';
// }


//verificar se os dados do formulario forem enviados


if(!empty($_POST['login']) && !empty($_POST['password'])){

    //verificar se o login == admin e senha == admin
    $login = htmlspecialchars($_POST['login']);
    $password = htmlspecialchars($_POST['password']);

    $mensagem = null;

    if($login === 'admin' && $password === 'admin'){
         $mensagem = 'Voce logou com sucesso';
    }else{
         $mensagem = "Usuario ou senha invalidos.";
    }
}



?>





<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>esta certo</title>
</head>
<body>
    <form action="dados3.php" method="POST" >

        <input type="text" name="login" placeholder="Digite sue login" value="<?= $login ?? '' ?>">
        <br>

        <input type="password" name="password" placeholder="Digite sua senha" value="<?= $password ?? '' ?>">

        <input type="submit" value="Enviar">
    </form>
    <?php
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        echo $mensagem;

    }
    ?>

    
    
</body>
</html>

