<?php


trait login
{
    public function log($mensagem)
    {
        echo ' <br/> [LOG}' . $mensagem . '<br/>';
        echo 'Data' .date('d-m-y'). '<br/>'; 
    }
}


?>
