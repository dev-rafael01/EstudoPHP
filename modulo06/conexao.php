<?php
require_once 'env.php';

$dsn = "mysql:host=$ENV_HOST;dbname=$ENV_DBNAME"; // String de conexão com o banco de dados.


try{
  $connection = new PDO($dsn, $ENV__USERNAME, $ENV_PASSOWORD);
  echo 'Conexão bem sucedida.';
} catch (PDOException $e){
   echo 'ERRO na Conexão ' . $e->getMessage();
}




