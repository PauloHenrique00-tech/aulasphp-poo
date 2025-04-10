<?php
class Cliente
{
    private string $nome;
    private int $idade;
    private string $email;

    /* Métodos setters: responsável por receber/atribuir dados
    para as propriedades/atributos */
    public function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }

    public function setIdade(int $idade): void 
    {
        $this->idade = $idade;
    }

    public function setEmail(string $email): void 
    {
        $this->email = $email;
    }

    /* Métodos getters: responsáveis por acessar/ler
    os dados */
    public function getNome(): string 
    {
        return $this->nome;
    }

    public function getIdade(): int
    {
        return $this->idade;
    }

    public function getEmail(): string 
    {
        return $this->email;
    }
    
}