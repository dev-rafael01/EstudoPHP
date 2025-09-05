<?php

session_start();

$_SESSION['teste'] = 12345;
$_SESSION['nome'] = 'rafael';
$_SESSION['idade'] = 29;

print_r($_SESSION);
?>