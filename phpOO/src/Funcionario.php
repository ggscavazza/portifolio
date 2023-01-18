<?php

class Funcionario extends Pessoa
{
    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
    }

    public function recuperaCargo(): string
    {
        return $this->cargo;
    }
}