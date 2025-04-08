<?php
class Cliente
{
    // Atributos (características da Classe)
    public string $nome;
    public int $idade;
    public string $email;

    // Métodos (comportamento da Classe)
    public function exibirDados(): void {}
    public function verificarIdade(int $idade): bool
    {
        return true;
    }
}
