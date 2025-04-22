<?php
final class PessoaFisica extends Cliente
{
    private int $idade;
    private string $cpf;

    public function __construct(
        string $nome, string $email, int $idade, string $cpf)
    {
        /* Chamamos o construtor da superclasse (Cliente)
        e repassamos para ele nome e email */
        parent::__construct($nome, $email);

        $this->setIdade($idade);
        $this->setCpf($cpf);
    }

    private function setCpf(string $cpf): void 
    {
        $this->cpf = $cpf;
    }

    public function getCpf(): string 
    {
        return $this->cpf;
    }


    public function getIdade(): int
    {
        return $this->idade;
    }

    private function setIdade(int $idade): void 
    {
        if($idade < 0){
            throw new InvalidArgumentException("Idade não pode ser negativa");
        }

        $this->idade = $idade;
    }


    public function verificarIdade(): string {
        if( $this->idade < 18 ) return "menor de idade";
        if( $this->idade < 60 ) return "adulto";
        return "idoso";
    }
}