<?php


class Conexao{

 private string $conexao;

 public function __construct()
 {
    //Conectar com banco de dados
    
    $this->conexao = 'Cocentando com banco de dados <br/>';

    echo 'Conexão com banco de dados Criada <br/>';

 }

 public function __destruct()
 {
    $this->conexao = '';
    echo 'Conexao encerrada com o banco de dados <br/>';
 }

 public function consulta(){

    echo 'Realizado consulta em banco de dados.. <br/>';
 }

}

$conexao = new Conexao();
$conexao->consulta();


?>