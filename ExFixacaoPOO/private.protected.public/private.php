<?php


class Pessoa
{
    private $nome, $idade, $dataNascimento, $cidade;

    public function __construct(string $nome, int $idade, string $dataNascimento,  string $cidade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->dataNascimento = $dataNascimento;
        $this->cidade = $cidade;
    }

    public function dadosPessoas()
    {
        return "Nome: {$this->nome} | Idade {$this->idade} | Data de Nascimento: {$this->dataNascimento} | Cidade: {$this->cidade} <br/> ";
    }
}

$pessoas = 
[
    new Pessoa("Rafael ", 28, "25/01/1997", "Santo Andre"),
    new Pessoa("Victoria", 21 , "30/05/2004" , "São Paulo"),
    new Pessoa("Victor ", 12 , "26/06/2013", "São Bernado do Campo")
];

foreach($pessoas as $pessoa)
{
  echo $pessoa->dadosPessoas();
}




?>