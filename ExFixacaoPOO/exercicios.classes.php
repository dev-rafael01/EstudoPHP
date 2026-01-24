<?php

/**
 *  1 - Classe pessoa 
 *   Crie uma classe pessoa com os atributos:
 *  nome(string)
 *  idade(int)
 *  implemente o metodo apresentar() que retorna uma fase:
 *  "Ola, meu nome é {$nome} e tenho {$idade} anos"
 *      Crie dois objetos de pessoa e teste o metodo
 */

class Pessoa1
{
     public string $nome;
     public int $idade;


     public function __construct($nome, $idade)
     {
         $this->nome = $nome;
         $this->idade = $idade;
     }

     public function apresentar()
     {
        return "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos";
     }
}

$dados = new Pessoa1('Rafael', 28);
echo $dados->apresentar();

echo '<hr/>';

/**
 * 2. Classe Conta Bancária
 * Crie uma classe ContaBancaria com
 * titular (string)
 * saldo (float, inicializa com 0)
 * 
 * Métodos:
 * 
 * depositar($valor) → adiciona ao saldo.
 * sacar($valor) → subtrai, se houver saldo suficiente.
 * verSaldo() → retorna o saldo atual.
 * 
 *Crie um objeto e simule um depósito e um saque.
 * 
 */

class ContaBancaria01
 {
   public string $titular;
   public float $saldo = 0;

   public function __construct( string $titular)
   {
        $this->titular = $titular;
        
   }

   public function deposito( float $valor1)
    {
        return $this->saldo += $valor1;
    }

    public function sacar( float $valor2): string 
    {
        if($valor2 > $this->saldo){
            return  'Saldo insuficiente para o saque de R$: ' .$valor2. '<br/>';
        }else{
             $this->saldo -= $valor2;
             return  "Saque de R$: {$valor2} realizado com sucesso";
        }
        
    }
    

    public function verSaldo1()
    {
        return $this->saldo;
    }
 }

$conta = new ContaBancaria01("Rafael");
echo  'Seu deposite foi no valor ' . $conta->deposito(200) . '<br>';
echo  $conta->sacar(120) . '<br>';
echo 'Seu Saldo atual é ' . $conta->verSaldo1() . '<br>';

echo '<hr/>';


/**
 * 3- Classe Produto
 *    Crie uma classe produto com:
 * 
 * nome(string)
 * Preço (float)
 * 
 *  Método:
 *   IxibirProduto() --> retorna:
 * 
 *  "Produto {Nome} Preço R$ {Preço}"
 * 
 * Depois, crie uma lista (Array) com 3 produtos e exibir todas
 * 
 */

    class Produto
    {
        public string $nome;
        public float $preco;

        public function __construct( string $nome, float $preco)
        {
            $this->nome = $nome;
            $this->preco =$preco;
        }


        public function exibirProduto()
        {
            
            return 'Produto: '. $this->nome . 'Preço R$: ' . number_format($this->preco, 2, ',', '.');
        }
        
    }

    $produtos = [

        new Produto("Mause Gamer " , 150.00),
        new Produto("Teclado Megano ", 250.00),
        new Produto("Monito 24/ ", 120,00)
    ];

    foreach($produtos as $produto){
        echo  $produto->exibirProduto() . '<br/>';
    }

    echo '<hr/>';


    /**
     * 4- Classe Carro
     *  Crie uma class carro com:
     *      -> Marca (string)
     *      -> modelo (string)
     *      -> ano (int)
     * 
     *  Metodo
     *       exibirFicha()
     *       "Carro [Marca] [modelo] - ano [ano]"
     * 
     *        Depois, crie uma array de 3 carros diferentes e msotre    a ficha tecnica de cada um
     *     
     */

    class Carro
    {
        public string $marca;
        public string $modelo;
        public int $ano;


        public function __construct(string $marca, string $modelo, int $ano )
        {   
            $this->marca = $marca;
            $this->modelo = $modelo;
            $this->ano = $ano;
        }

        public function exibirFicha()
        {
            return "Carro: {$this->marca} | Modelo: {$this->modelo} | Ano {$this->ano}";
        }       
    }

    $carros = [

        new Carro ("Honda", "CIVIC ", 2023),
        new Carro("Toyota", "COROLLA ", 2020),
        new Carro("Chevrolet", "CELTA ", 2019),
    ];

    foreach($carros as $carro)
    {
        echo $carro->exibirFicha(). '<br/>';
    }




?>