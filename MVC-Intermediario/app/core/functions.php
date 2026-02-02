<?php


function dd(...$vars)
{
    echo '<pre style="background-color: #f5f5f5;
    color: #212529;
    padding: 10px;
    border-radius: 5pm;
    font-family: monospce; ">'
    ;
    echo '<strong> Debung Output: </strong><br>';


    foreach ($vars as $var){
     echo '<pre style="background-color: #d1d1d1;
        color: #212529;
        padding: 10px;
        border-radius: 5pm;
        font-family: monospce; ">';
            var_dump($var);
            echo '</pre>';
                   
    }
     $backtrace = debug_backtrace()[0];
     echo '<br><br><strong> arquivo: </strong>: ' . $backtrace['file'] . '<br>';
     echo '<strong> arquivo: </strong>: ' . $backtrace['line'] . '<br>';
     echo '</pre>';
     die();
}

function  config($key, $default = null)
{
    $config = require_once __DIR__ . '/../config/config.php';
    return $config[$key] ?? $default;
}

?>