<?php

class pedido
{
    use login;

    public function criar()
    {
        echo 'pedido criado';
        $this->log('pedido criado');
    }

    public function deletar()
    {
        echo 'Pedido deletado';
        $this->log('pedido deletado');
    }
}



?>