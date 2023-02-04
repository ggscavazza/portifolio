<?php

namespace Genesis\Banco\Modelo\Conta;

class Conta {
    // definir dados da conta
    private object $titular;
    private float $saldo;
    private static $numedoDeContas = 0;

    public function __construct(Titular $titular){
        $this->titular = $titular;
        $this->saldo = 0;

        self::$numedoDeContas++;
    }

    public function __destruct(){
        self::$numedoDeContas--;
    }

    public function saca(float $valorASacar): void
    {
        $tarifaSaque = $valorASacar * 0.05;
        $valorSaque = $valorASacar + $tarifaSaque;

        if ($valorSaque > $this->saldo){
            echo "Saldo insuficiente";
            return;
        }

        $this->saldo -= $valorSaque;
    }

    public function deposita(float $valoADepositar): void{
        if ($valoADepositar < 0){
            echo "Valor precisa ser positivo";
            return;
        }

        $this->saldo += $valoADepositar;
    }

    public function transfere(float $valorATransferir, Conta $contaDestino): void{
        if ($valorATransferir > $this->saldo) {
            echo "Saldo insuficiente";
            return;
        }

        $this->saca($valorATransferir);
        $contaDestino->deposita($valorATransferir);
    }

    public function verificaSaldo(): float{
        return $this->saldo;
    }

    public function verificaCpfTitular(): string{
        return $this->titular->recuperaCpf();
    }

    public function verificaNomeTitular(): string{
        return $this->titular->recuperaNome();
    }

    public static function verificaNumeroContas(): int{
        return self::$numedoDeContas;
    }
}