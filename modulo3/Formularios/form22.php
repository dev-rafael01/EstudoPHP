<?php

require 'funcoes.php';
$erro = null ;
$sucesso = null;

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $texto = $_POST['texto'];
}

//Sanitização

$texto = htmlspecialchars($texto);

//removendo espaços antes e depois da palavra
$texto = trim($texto);

 
//Garantir que o texto tem @ e Primeira validação - Se o campo esta preenchido

if(filter_var($texto, FILTER_VALIDATE_EMAIL) == false){
    $erro = 'EMAIL INVALIDO';
}elseif(empty($texto)){
    $erro = 'O campo de texto e obrigadorio';
}elseif(strlen($texto) < 5){
    $erro = 'o texto tem que ter pelo menos 5 caracteres';
}elseif(strlen($texto) > 10){
    $erro = ' o temto tem que ter no maximo 10 caracteres';
}else{
    $sucesso = 'Campo validado com sucesso!';
}



?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Formulario</h1>

    <?php if(exibirErro($erro)) :  ?>
    <p style="color:red">
        <?= $erro ?>
    </p>
    <?php endif; ?>

    <?php if(exibirErro($sucesso)):    ?>
    <p style="color:green">
        <?= $sucesso ?>
    </p>
    <?php endif; ?>

    <form method="POST">
        <input type="text" name="texto" placeholder="Digite o texto">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>