<?php
require 'funcoes.php';

if($_SERVER['REQUEST_METHOD'] == "POST"){
    $mensagem = $_POST['mensagem'];
    $resultado = validarMensagem($mensagem);

    if($resultado === true){
        $sucesso = 'FORMULARIO ENVIADO COM SUCESSO!';
    }else{
        $erro = $resultado;
    }
}


?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TREINO PHP</title>
</head>

<style>
    .erro{
        color: red;
        font-size: 14px;
    }
    .sucesso{
        color: green;
        font-size: 14px;
    }

    input[type=text]{
        display: block;
        margin-bottom: 5px;
        padding: 5px;
        width: 250px;
    }
</style>
<body>

    <h1>TREINANDO METODO POST</h1>

    <form method="POST">
        <?php if($sucesso):  ?>
                <p class="sucesso"><?= $sucesso ?></p>
        <?php endif   ?>

        <label for="mensagem">MENSAGEM:</label>
        <input type="text" name="mensagem" id="mensagem" value="<?= htmlspecialchars($mensagem) ?>">

        <?php if($erro):  ?>
           <p class="erro"><?=$erro ?></p>
        <?php endif   ?>

        <input type="submit" value="ENVIAR">
    </form>
    
</body>
</html>