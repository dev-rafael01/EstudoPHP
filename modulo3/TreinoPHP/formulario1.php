<?php

$sucesso = null;
$erro = null;
$mensagem = '';


if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $mensagem = trim($_POST['mensagem']);

    if(empty($mensagem)){
        $erro = 'ERRO! PREENCHA O FORMULARIO';
    }elseif(strlen($mensagem) < 5){
        $erro = 'Texto precisa ter ao menos 5 caracteres';   
     }else{
        $sucesso = 'FOMULARIO ENVIADO COM SUCESSO!';
     }
      
    }
  
 


    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Treino PHP</title>
</head>
<body>
    <h1>Treiando metodos Post</h1>

    <?php if($erro): ?>
     <p style="color: red;"><?= $erro  ?> </p>
     <?php endif;  ?>


     <?php if($sucesso): ?>
     <p style="color: green;"><?= $sucesso  ?> </p>
     <?php endif;  ?>

     <form method="POST">

        <input type="text" name="mensagem" value="<?= htmlspecialchars($mensagem)  ?>">

     

        <input type="submit" value="Enviar">         
        
    </form>


</body>
</html>