<?php

require 'funcoes.php';
$erro = null ;
$sucesso = null;


$tecnologia = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];

$tecnologia_banco = [
    ['codigo' => 'html1', 'nome' => 'HTML1'],
    ['codigo' => 'javascript', 'nome' => 'JAVASCRIPT'],
    ['codigo' => 'rh', 'nome' => 'REACT NATIVE'],

];

$tecnolgia_api = [
    'html2' => 'HTML2',
    'css2' => 'CSS2',
    'php' => 'PHP',
];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $opcao = $_POST['opcao'];
    echo $opcao;
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
        <select name="opcao">
            
            <!-- Primeira forma de liga com banco -->

            <!-- abri e fechei a tag php pra criar o foreach -->
         <?php foreach($tecnologia_banco as $tec) : ?>

            <!-- abri a option do HTML  e no value liguei com tag php pra ligar o HTML COM PHP -->
            <option value="<?= $tec['codigo'] ?>">
            <?= $tec['nome'] ?></option>

            <!-- AQUI ESTOU ABRINDO E FECHANDO TAG PAG, POREM NO MEIO COM FUNÇÃO endForeach, isso indica o fechado do foreach -->
            <?php endforeach; ?>





            <!-- FORMA DE LIGA COM API -->

            <?php foreach($tecnolgia_api as $codigo => $nome1) : ?>
            
            <option value="<?=$codigo?>"> <?=$nome1?></option>

            <?php endforeach ?>

        </select>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>