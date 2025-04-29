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
use MeuProjeto\Models\PessoaFisica;
use MeuProjeto\Models\PessoaJuridica;

require_once "src/Enums/Situacao.php"; // Enum
require_once "src/Models/Cliente.php"; // Superclasse
require_once "src/Models/PessoaFisica.php"; // Subclasse
require_once "src/Models/PessoaJuridica.php"; // Subclasse

$clientePF = new PessoaFisica("Tiago", "tiago@gmail.com", 30, "123.456.789-00");
$clientePJ = new PessoaJuridica(
    "João Pedro", "joao@tabajara.com", "32.789.555/000-1", 2019, 
    "Corporação Tabajara");
/* Código abaixo dará erro, pois Cliente é uma classe abstrata, portanto, não podemos criar objeto a partir dela. */
// $clienteGenerico = new Cliente("Fulano", "fulano@gmail.com");
// var_dump($clienteGenerico);

/* O código abaixo dará erro, pois, não é possível
 definir/usar uma subclasse que extenda PessoaJuridica (que é uma classe final) */
 //require_once "src/Models/MEI.php";
 //$clienteMEI = new MEI("AAA", "a@a.com", "123", 2025, "aaaaAA");
 //var_dump($clienteMEI);

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