<?php

// Exercício 1 – Classe Conta Bancária (uso de private)

// Crie uma classe chamada ContaBancaria que tenha:

// Atributos privados: saldo, titular.

// Um método público depositar($valor) que aumenta o saldo.

// Um método público sacar($valor) que só permite sacar se tiver saldo suficiente.

// Um método público getSaldo() que retorna o saldo.

// 👉 Objetivo: você deve usar private nos atributos para impedir acesso direto, e só manipular o saldo via métodos.

use BcMath\Number;

class ContaBancaria
{
  private $titulo, $saldo = 0;
 

 public function __construct($titulo , $saldo)
 {
   $this->titulo = $titulo;
   $this->saldo = $saldo;
  
 }

 public function deposito($valor1)
 {
    if($valor1 < 0){
      echo 'O deposito deve ser superior a 0,01 <br/>';
      return;
    }

    if($valor1 > 600){
      echo 'O valor maximo para deposito e R$: 600,00 por dia <br/>';
       return;
    }
      $this->saldo += $valor1;
      echo "Voce Depositou R$: " . number_format($valor1, 2, ',', '.'). '<br/>';
  }


 public function sacar($valor1)
 {
   if($valor1 > $this->saldo){
     echo 'Voce nao tem saldo suficiente para saque <br/>';
   
   }else{
     $this->saldo  -= $valor1;
     echo 'Saque de R$' . number_format($valor1,2,',','.'). ' realizado com sucesso. <br/> ' ;
     
   }
 }

 public function verSaldo()
 {
   echo  " Saldo Atual de {$this->titulo}<br/>";
   echo   'R$ ' . number_format($this->saldo,2,',','.') . '<br/>';
 }

}


$conta22 = new ContaBancaria('Rafael' , 500);
echo $conta22->verSaldo();
$conta22->deposito(200);
echo $conta22->verSaldo();
$conta22->sacar(100);
echo $conta22->verSaldo();

echo '<hr/>';





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
//  $this->desconto = $desconto;
// Método público setDesconto($valor) que altera o desconto (máx 50%).
// Método público getPrecoFinal() que retorna o preço com desconto 
// Depois crie uma classe ProdutoDigital que herda de Produto e redefine o desconto para 10% a mais automaticamente.aplicado.
// 👉 Objetivo: misturar public, private e protected, garantindo que só os métodos controlam o acesso.

class Produto
{
 
   private $nome;
   private $preco;


   protected $desconto = 0;

   public function __construct($nome, $preco)
   {
     $this->nome = $nome;
     $this->preco = $preco;
  
   }

   public function nomePreço()
   {
     echo 'O Valor do '. $this->nome . 'E de R$ ' . number_format($this->preco , 2, ',' , '.' ). '<br/>';
   }

   public function setDesconto($valor)
   {
    
     if($valor >= 0.5){
     echo "❌ O desconto não pode ser maior que 50%!<br>";
      $this->desconto = 0.5;
     }else{
      $this->desconto = $valor;
     }
     
   }
   
 
   public function getPrecoFinal()
   {
      if ($this->desconto >= 0.5) {
        // ignora o desconto e retorna preço original
        return number_format($this->preco, 2, ',', '.');
    }
    
        $precoComDesconto = $this->preco -  ($this->preco * $this->desconto);
        return number_format($precoComDesconto, 2, ',' , '.');
   }

}

class ProdutoDigital extends Produto
{
  public function setDesconto($valor)
    {
      $valor = $valor + 0.1;


      if($valor > 0.5){
        $this->desconto = 0.5;
      }else{
        $this->desconto = $valor;
      }
 
    }
}

$produto = new Produto('Computador ', 150);
$produto->setDesconto(0.4);
$produto->nomePreço();
echo 'Valor final com Desconto: R$ ' .$produto->getPrecoFinal();

// 


echo '<hr/>'


?>