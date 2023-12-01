<?php

/* quando definimos uma class, estamos definindo um novo tipo, como por exemplo o 
float ou boolean, porém essa class é do tipo Account, o qual criamos para se adequar a algum 
cenário. */

class Account
{
    public string $holderCpf;
    public string $holderName;     // atributos da class Account
    public float $balance = 0;    // aqui definimos o saldo como 0 para cada conta criada

    public function toWithdraw(float $amountToWithdraw) // método para sacar
    {
        if ($amountToWithdraw > $this->balance) {
            echo "Unavailable balance, try again." . PHP_EOL;
            return;
        } 
        
        $this->balance -= $amountToWithdraw; 
    }

    public function deposit(float $amountToDeposit): void // método para depositar
    {
        if ($amountToDeposit < 0) {
            echo "The amount to deposit needs to be positive." . PHP_EOL;
            return;
        } 
        
        $this->balance += $amountToDeposit;
    }
    

    public function transfer(float $valueToTransfer, Account $destAccount): void
    {
        if ($valueToTransfer > $this->balance) {
            echo "Unavailable balance, try again.". PHP_EOL;
        return;
        }

        $this->toWithdraw($valueToTransfer);
        $destAccount->deposit($valueToTransfer); 
    }


//Criamos uma função de saque, onde $this é a variável que vamos chamar lá no objeto.

/* para criamos um endereço para armazenar nosso objeto utilizamos a sintaxe, onde
o operador new é usado para criar uma nova instância, instância e objeto são sinonimos, logo 
armazenamos em uma variável $firstAccount */

$firstAccount = new Account();

// para acessar um atributo e/ou atribuir dados, usamos "->":

$firstAccount->holderCpf = '156.498.416-19';
$firstAccount->holderName = 'João Pedro';
$firstAccount->balance = '1500';

// criando uma segunda conta

$secondAccount = new Account();

$secondAccount->holderCpf = '123.456.789-10';
$secondAccount->holderName = 'Beatriz Olivera';
$secondAccount->balance = '2500';

$contaUm = new Account();
$contaUm->deposit('500');
$contaDois = new Account();
$contaUm->transfer('200', $contaDois);
 
echo $contaDois->balance;

?>