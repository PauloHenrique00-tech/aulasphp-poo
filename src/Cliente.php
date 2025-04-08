<?php
class Cliente
{
    // Atributos (características da Classe)
    public string $nome;
    public int $idade;
    public string $email;

    // Métodos (comportamentos da Classe)
    public function exibirDados(): void 
    {
        echo "<p style='color:red'>
                Este é o cliente... $this->nome</p>";
    }


    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
