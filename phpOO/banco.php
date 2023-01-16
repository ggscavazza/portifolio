<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$cpfGustavo = new Cpf("123.456.789-10");
$gustavo = new Titular($cpfGustavo, "Gustavo Scavazza");
$primeiraConta = new Conta($gustavo);
$primeiraConta->deposita(valoADepositar: 500);
$primeiraConta->saca(valorASacar: 300);

$cpfAline = new Cpf("987.654.321-10");
$aline = new Titular($cpfAline, "Aline Scavazza");
$segundaConta = new Conta($aline);
$segundaConta->deposita(valoADepositar: 1500);
$segundaConta->saca(valorASacar: 200);

$cpfTeste = new Cpf('123.321.123-10');
$titularTeste = new Titular($cpfTeste, 'Teste');
new Conta($titularTeste);

echo "Saldo: R$ ".$primeiraConta->verificaSaldo().PHP_EOL;
echo "CPF Titular: ".$primeiraConta->verificaCpfTitular().PHP_EOL;
echo "Nome Titular: ".$primeiraConta->verificaNomeTitular().PHP_EOL;
echo "Total de contas criadas: ".Conta::verificaNumeroContas();