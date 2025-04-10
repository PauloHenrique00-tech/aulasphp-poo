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
        if($idade < 0){
            throw new InvalidArgumentException("Idade não pode ser negativa");
        }

        $this->idade = $idade;
    }

    public function setEmail(string $email): void 
    {
        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            throw new InvalidArgumentException("E-mail inválido!");
        }

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
