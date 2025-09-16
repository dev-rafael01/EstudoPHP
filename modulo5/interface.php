<?php
include ('funtions.php');

interface metodoPagamento{
    public function getName(): string; 
    public function pagar(float $valor) : bool;
}

class Paypal implements metodoPagamento

{
    public function getName(): string
    {
        return 'Paypal';
    } 

    public function pagar(float $valor) : bool
    {
        echo 'Pagamento via Paypal no valor de R$ ' . $valor . '<br/>';
        return true;
    }
}

class CartaoDeCredito implements metodoPagamento
{
     public function getName(): string
    {
        return 'Cartao de Credito';
    } 
    
    public function pagar(float $valor) : bool
    {
        echo 'Pagamento via Cartao de Credito no valor de R$ ' . $valor . '<br/>';
        return 'sucesso';
    }
}

class Pix implements metodoPagamento
{
      public function getName(): string
    {
        return 'Pix';
    } 
    

    private function gerarQrcode(float $valor): string
    {
        echo 'Gerando Qrcode para paagamento via pix no valor de R$ ' . $valor . '<br/>';
        return 'QRcode <br/>';
    }
    public function pagar( float $valor) : bool
    {
      $qrCode = $this->gerarQrcode($valor);
      echo 'Pagamento via pix no valor de R$ ' . $valor . '<br/>';
      echo 'QR code: ' . $qrCode;
      return true;
    }
}

//nosso sistema

$metodoPagamentoSelecioandoPeloUsuarioo = new Pix();
processarPagamento($metodoPagamentoSelecioandoPeloUsuarioo, 100);

// $pagamento = new Pix();
// // abaixo-> imultavel
//  if ($pagamento->pagar(100) === true) {
//     echo 'APROVADO';
//  }else{
//     echo 'REJEITADO';
//  }



?>