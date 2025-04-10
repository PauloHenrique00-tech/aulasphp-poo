<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 02</title>
</head>
<body>
    <h1>PHP com POO - Exemplo 02</h1>
    <hr>

<?php
// Carregando/importando a classe
require_once "src/Cliente.php";

// Criando objeto/instância da classe
$clienteA = new Cliente();
$clienteB = new Cliente();

// Inserindo valores para os atributos
$clienteA->setNome("Fulano da Silva");
$clienteA->setIdade(30);
$clienteA->setEmail("fulano@gmail.com");

$clienteB->setNome("Ozzy Osbourne");
$clienteB->setIdade(15);
$clienteB->setEmail("ozzy@email.com");
?>

<h2>Acessando/lendo os dados dos objetos</h2>

<ul>
    <li><b>Nome:</b> <?=$clienteA->getNome()?> </li>
    <li><b>Idade:</b> <?=$clienteA->getIdade()?> </li>
    <li><b>E-mail:</b> <?=$clienteA->getEmail()?> </li>
</ul>


<ul>
    <li><b>Nome:</b> <?=$clienteB->getNome()?> </li>
    <li><b>Idade:</b> <?=$clienteB->getIdade()?> </li>
    <li><b>E-mail:</b> <?=$clienteB->getEmail()?> </li>
</ul>


<h2>Testes de acesso aos recursos 
da classe através do objeto</h2>


<pre><?=var_dump($clienteA, $clienteB)?></pre>

</body>
</html>