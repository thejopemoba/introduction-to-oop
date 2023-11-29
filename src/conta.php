<?php

/* quando definimos uma class, estamos definindo um novo tipo, como por exemplo o 
float ou boolean, porém essa class é do tipo Account, o qual criamos para se adequar a algum 
cenário. */

class Account
{
    public string $holderCpf;
    public string $holderName;     // ---> atributos da class Account
    public float $balance;

    public function toWithdraw(float $amountToWithdraw) 
    {
        if ($amountToWithdraw > $this->saldo) {
            echo "Unavailable balance, try again." . PHP_EOL;
        } else {
            $this->saldo -= $amountToWithdraw;
        }

    }
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


var_dump($secondAccount);



?>