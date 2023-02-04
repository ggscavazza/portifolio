<?php

use Genesis\Banco\Modelo\Conta\Conta;
use Genesis\Banco\Modelo\Conta\Titular;
use Genesis\Banco\Modelo\Cpf;
use Genesis\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF('321.254.158-01'),
        'Gustavo Scavazza',
        new Endereco('São Paulo', 'Sítio da Figueira', 'Av. Eng. Thomaz Magalhães', '225')
    )
);

$conta->deposita(1000);
$conta->saca(100);

echo $conta->verificaSaldo();
