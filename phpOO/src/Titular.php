<?php

class Titular extends Pessoa
{
    private Endereco $endereco;

    public function __construct(Cpf $cpf, string $nome, Endereco $endereco){
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
        $this->endereco = $endereco;
    }

    public function recuperaEndereco(): Endereco
    {
        return $this->endereco;
    }
}