<?php
/* Classe abstrata: não pode ser instanciada.
Com isso, será possível criar objetos apenas a partir das sublclasses. */
abstract class Cliente
{
    private string $nome;
    private string $email;
    private Situacao $situacao;

    /* Definindo a situação INATIVO como valor padrão 
    para o parâmetro situacao no construtor. */
    public function __construct(
        string $nome, string $email, Situacao $situacao = Situacao::INATIVO
        )
    {
        $this->setNome($nome);
        $this->setEmail($email);
        $this->setSituacao($situacao);
    }

    public function relatorio():string {
        return "<div>
            <h3> {$this->getNome()} </h3>
            <p> <b>Contato:</b> {$this->getEmail()} </p>
        </div>";
    }

    /* Visibilidade protegida: desta forma, este método pode ser usado aqui em Cliente (superclasse) e também nas subclasses.
    O acesso externo (no nosso caso, em index) continua sendo bloqueado. */
    protected function setSituacao(Situacao $situacao):void {
        $this->situacao = $situacao;
    }

    public function getSituacao():Situacao { 
        return $this->situacao;
    }



    private function setNome(string $nome): void 
    {
        $this->nome = $nome;
    }


    private function setEmail(string $email): void 
    {
        if( !filter_var($email, FILTER_VALIDATE_EMAIL) ){
            throw new InvalidArgumentException("E-mail inválido!");
        }

        $this->email = $email;
    }

    public function getNome(): string 
    {
        return $this->nome;
    }


    public function getEmail(): string 
    {
        return $this->email;
    }
    
}
