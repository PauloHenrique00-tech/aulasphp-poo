<?php 
class PessoaJuridica extends Cliente {
    private string $cnpj;
    private int $anoFundacao;
    private string $nomeFantasia;

    public function __construct(
        string $nome, string $email, string $cnpj, int $ano, string $nomeFantasia)

    {
        parent::__construct($nome, $email);

        $this->setCnpj($cnpj);
        $this->setAnoFundacao($ano);
        $this->setNomeFantasia($nomeFantasia);

        /* Como o método foi definido na superclasse como protected,
        agora é possível usá-lo para mudar a situação de PJ. */
        $this->setSituacao(Situacao::PENDENTE);
    }

    private function setCnpj(string $cnpj): void {
        $this->cnpj = $cnpj;
    }

    private function setAnoFundacao(int $ano): void {
        $this->anoFundacao = $ano;
    }

    private function setNomeFantasia(string $nome): void {
        $this->nomeFantasia = $nome;
    }

    public function getCnpj(): string { return $this->cnpj; }
    public function getAnoFundacao(): int { return $this->anoFundacao; }
    public function getNomeFantasia(): string { return $this->nomeFantasia; }
}