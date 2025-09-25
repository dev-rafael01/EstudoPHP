<?php

class Funcionario
{
    protected $nome , $salario = 0;


    public function __construct(string $nome, float $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function dadosFuncionario()
    {
        // $this->salario = 1500;
        echo "Nome: {$this->nome} | Salario: {$this->salario}";
    }
}

class Gerente extends Funcionarios
{

    private $bonus = 0.30;
    public function __construct(string $nome, float $salario, float $bonus)
    {
         
        parent:: __construct($nome, $salario);
        $this->bonus = $bonus;

    }

    public function salarioComBobus()
    {
        return $this->salario + $this->bonus;
    }
}

$funcionario = new Funcionario("Adriano" , 1500);
$funcionario->dadosFuncionario()





?>