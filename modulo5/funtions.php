<?php

function processarPagamento(metodoPagamento $formaDePagamento, float $valorPagamento)
{
    echo 'Processando pagamento via ' . $formaDePagamento->getName() . ' Com o valor de R$ ' . $valorPagamento . '<br/>';
    if($formaDePagamento->pagar($valorPagamento)){
        echo 'Pagamento realizado com sucesso ';
    }else{
        echo 'Pagamento nao realizado';
    }
}



?>