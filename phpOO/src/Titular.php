<?php

class Titular{
    private object $cpf;
    private string $nome;

    public function __construct(Cpf $cpf, string $nome){
        $this->cpf = $cpf;
        $this->validaNomeTitular($nome);
        $this->nome = $nome;
    }

    public function recuperaCpf(): string{
        return $this->cpf->recuperaCpf();
    }

    public function recuperaNome(): string{
        return $this->nome;
    }

    private function validaNomeTitular(string $nomeTitular){
        if(strlen($nomeTitular) < 5) {
            echo "Nome precisa ter pelo menos 5 caracteres";
            exit();
        }
    }
}