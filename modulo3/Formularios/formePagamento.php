<?php

require 'funcoes.php';

$forma_pagamentos = ['cartao', 'boleto', 'dinheiro'];
$formas_pagamento_user = ['cartao', 'dinheiro'];

$erro = null ;
$sucesso = null;



if($_SERVER['REQUEST_METHOD'] == "POST"){

    if(empty($_POST['forma_pagamento'])){
        $erro = 'Selecione uma forma de pagamento';
    }
    $formaPagamento = $_POST['forma_pagamento'] ?? '';
     
     if(!in_array($formaPagamento, $formas_pagamento_user)){
        $erro = 'Forma de pagamento invalida para seu usuario';
     }else{
      $sucesso = 'Forma de pagamento aceita';
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
        <?php foreach($forma_pagamentos as $forma_pagamento) :    ?>

            <input type="radio" name="forma_pagamento" value="<?=$forma_pagamento ?>">
            <label>
                 <?= $forma_pagamento ?>
            </label>
            <br/>
        <?php endforeach ?>

        <input type="submit" value="Enviar">
    </form>


    <!-- 
    
    
    
     -->
</body>
</html>