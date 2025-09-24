<?php
// Exercício 2 – Classe Funcionário (uso de protected)

// Crie uma classe Funcionario com:

// Atributos protegidos: nome, salario.

// Método público __construct($nome, $salario).

// Método público getInfo() que retorna o nome e o salário.

// Depois crie uma classe Gerente que herda de Funcionario, e adicione:

// Um bônus de 20% no salário, acessando o atributo salario herdado (graças ao protected).

// Um método getSalarioComBonus().

// 👉 Objetivo: testar o protected, que não pode ser acessado fora da classe, mas pode ser acessado por classes filhas.

class Funcionarios
{
    protected  $nome;
    protected  $salario;

    public function __construct($nome , $salario)
    {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    // Método público getInfo() que retorna o nome e o salário.
    public function getInfo()
    {
      return "Nome: ". $this->nome . ' | Salario R$: ' . $this->salario . '<br/>';
      

    }

}
// Depois crie uma classe Gerente que herda de Funcionario, e adicione:

// Um bônus de 20% no salário, acessando o atributo salario herdado (graças ao protected).

class Gerente extends Funcionarios
{
   public function SalarioComBonus()
   {
    return $this->salario += ($this->salario * 0.20);

   }
}


$funcionario = new Funcionarios("Rafael ", 1000);
echo $funcionario->getInfo() .  '<br/>';

$gerente = new Gerente("Claudio" , 1000);
echo 'Salario do Gerente com bonus de 20%. <br/> R$: '.$gerente->SalarioComBonus();

echo '<hr/>';

// Exercício 3 – Classe Produto (uso combinado de public, private e protected)

// Crie uma classe Produto com:

// Atributos privados: nome, preco.

// Um atributo protegido: desconto.

// Método público setDesconto($valor) que altera o desconto (máx 50%).

// Método público getPrecoFinal() que retorna o preço com desconto aplicado.

// Depois crie uma classe ProdutoDigital que herda de Produto e redefine o desconto para 10% a mais automaticamente.

// 👉 Objetivo: misturar public, private e protected, garantindo que só os métodos controlam o acesso.

echo '<hr/>'

// Exercício 1 – Classe Conta Bancária (uso de private)

// Crie uma classe chamada ContaBancaria que tenha:

// Atributos privados: saldo, titular.

// Um método público depositar($valor) que aumenta o saldo.

// Um método público sacar($valor) que só permite sacar se tiver saldo suficiente.

// Um método público getSaldo() que retorna o saldo.

// 👉 Objetivo: você deve usar private nos atributos para impedir acesso direto, e só manipular o saldo via métodos.
?>