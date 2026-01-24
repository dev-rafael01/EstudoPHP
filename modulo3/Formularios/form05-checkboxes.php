<?php

require 'funcoes.php';
$erro = null ;
$sucesso = null;


$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];
$opcaoValidas = ['JAVASCRIPT', 'PHP'];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $linguagens = $_POST['linguagens'];

    if(count($linguagens) != 2){
        $erro = 'Voce precisa selecionar duas tecnologias, EXATAMENTE!';
    }

    foreach($linguagens as $linguagem){
        if(!in_array($linguagem, $opcaoValidas)){
            $erro = 'A tecnologia '. $linguagem . ' não e valida';
            break;
        }
    }

    if(empty($erro)){
        $sucesso = 'DEU TUDO CERTO';
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
         <?php foreach($tecnologias  as $linguagem) : ?>
        <label>
             <?= $linguagem    ?>
        </label>

        <input type="checkbox" name="linguagens[]" value="<?=$linguagem  ?>">
        <hr/>
        <?php endforeach   ?>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>