<?php

require 'funcoes.php';
$erro = null ;
$sucesso = null;


$tecnologia = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];
$opcaoValidas = ['JAVASCRIPT', 'PHP'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $opcoes = $_POST['opcoes'];
    


    if(count($opcoes) != 2){
        $erro = 'Voce precisa seleciona duas tecnologias,   EXATAMENTE.';
}

    foreach($opcoes as $opcao){
        if(!in_array($opcao, $opcaoValidas)){
            $erro = "A tecnologia $opcao não e validade, selecione tecnologias validas";
            break;
        }
    }
    if(empty($erro)){
        $sucesso = 'Tecnologias salvas com sucesso!';
    } 
    

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
        <select name="opcoes[]" multiple>
            <?php
            foreach($tecnologia as $tec)
            : ?>
            <option value="<?= $tec ?>"><?= $tec ?></option>
                
            

            <?php endforeach ?>


        </select>
        <input type="submit" value="Enviar">
    </form>


    <!-- 
    
    
    
     -->
</body>
</html>