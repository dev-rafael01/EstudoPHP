<?php

class file
{

    use logger;

    public function created()
    {
        echo 'Arquirvo criado';
        $this->log('Arquirvo criado');
    }

    public function deleted()
    {
        echo 'Arquivo deletado';
        $this->log('Arquivo deletado');
    }
}


?>