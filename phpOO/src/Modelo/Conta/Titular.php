<?php

namespace Genesis\Banco\Modelo\Conta;

use Genesis\Banco\Modelo\Pessoa;
use Genesis\Banco\Modelo\Cpf;
use Genesis\Banco\Modelo\Endereco;

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco)
    {
        parent::__construct($nome, $cpf);
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}