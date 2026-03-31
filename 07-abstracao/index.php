<?php

abstract class PaymentMethod
{
    protected float $amount;

    public function __construct($amount)
    {
        $this->amount = $amount;
    }

    public function displayAmount(): string
    {
        return "Pagamento: R$ " . number_format($this->amount, 2, ',', '.');
    }
    
    abstract public function process();

}

class PixPayment extends PaymentMethod
{
    public function process(): string
    {
        return "Gerando o QR-code para R$ {$this->amount}... PIX realizado com sucesso!";
    }

}

class CardPayment extends PaymentMethod
{
    public function process(): string
    {
        return "Conectando... Pagamento R$ {$this->amount} realizado com sucesso!";
    }

}
// não pode classes abstratas não podem ser instanciadas
// $payment = new PaymentMethod();

$pix = new PixPayment(150.00);
echo $pix->displayAmount() . "<br>";
echo $pix->process() . "<br><br>";

$card = new CardPayment(2500.50);
echo $card->displayAmount() . "<br>";
echo $card->process() . "<br><br>";
