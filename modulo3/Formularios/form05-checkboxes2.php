<?php

require 'funcoes.php';
$erro = null ;
$sucesso = null;


$tecnologias = ['HTML', 'CSS', 'JAVASCRIPT', 'PHP'];
$selecionadas = [];


if($_SERVER['REQUEST_METHOD'] == 'POST'){
   

   if(empty($_POST['tecnologias'])){
    $erro = 'Selecione uma tecnologia';
   }

   $selecionadas = $_POST['tecnologias'] ?? [];

    if(empty($selecionadas)){
        $erro = 'Selecione uma tecnologia';
    } elseif(count($selecionadas) != 1){
         $erro = 'Selecione apenas uma tecnologia';
   } elseif ($selecionadas[0] != 'HTML'){
        $erro = 'Voce deve selecionar HTML';
   } else{
        $sucesso = "HTML SELECIONADO!!";
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
    <h1>Selecione so o HTML</h1>

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

        <?php foreach($tecnologias as $tecnologia) : ?>

        <label>
            <?= $tecnologia   ?>
            <input type="checkbox"
             name="tecnologias[]" 
             value="<?= $tecnologia  ?>"
             <?= in_array($tecnologia , $selecionadas) ?'checked' : '' ?>>
          
        </label>     
        <hr>

        <?php endforeach   ?>
        <input type="submit" value="Enviar">
    </form>


   
</body>
</html>