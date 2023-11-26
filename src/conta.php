<?php

/* quando definimos uma class, estamos definindo um novo tipo, como por exemplo o 
float ou boolean, porém essa class é do tipo Account, o qual criamos para se adequar a algum 
cenário. */

class Account
{
    public string $holderCpf;
    public string $holderName;     // ---> atributos da class Account
    public float $balance;

}

/* para criamos um endereço para armazenar nosso objeto utilizamos a sintaxe, onde
o operador new é usado para criar uma nova instância, instância e objeto são sinonimos, logo 
armazenamos em uma variável $firstAccount */

$firstAccount = new Account();

// para acessar um atributo e/ou atribuir dados, usamos "->":

$firstAccount->holderCpf = '156.498.416-19';
$firstAccount->holderName = 'João Pedro';
$firstAccount->balance = '1500';

var_dump($firstAccount, $secondAccount);

?>