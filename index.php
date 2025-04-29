<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 07</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 07</h1>
    <hr>

<?php
/* Sempre que trabalharmos com namespaces, será necessário
especificar através do 'use' quais classes/enums/funções serão
usadas. */
use MeuProjeto\Calculadora;
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;

/* Substituímos TODOS OS REQUIRES anteriores, por um ÚNICO REQUIRE apontando para o autoload */
require_once "vendor/autoload.php";

$clientePF = new PessoaFisica("Tiago", "tiago@gmail.com", 30, "123.456.789-00");
$clientePJ = new PessoaJuridica(
    "João Pedro", "joao@tabajara.com", "32.789.555/000-1", 2019, 
    "Corporação Tabajara");


/* Acessando um método estático (ou seja, sem passar por um objeto) */    
$total = Calculadora::somar(10, 5);
echo $total;
?>
    <h2>Relatórios</h2>

    <h3>PF</h3>
    <?=$clientePF->relatorio()?>
    <!-- Acessamos as opções do Enum através do getSituacao()->name -->
    <p><b>Situação:</b> <?=$clientePF->getSituacao()->name?> </p>

    <h3>PJ</h3>
    <?=$clientePJ->relatorio()?>
    <p><b>Situação:</b> <?=$clientePJ->getSituacao()->name?> </p>

</body>
</html>