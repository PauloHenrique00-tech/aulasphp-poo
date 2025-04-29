<?php
namespace MeuProjeto;
abstract class Calculadora
{
    public static function somar(float $valor1, float $valor2): float
    {
        return $valor1 + $valor2;
    }
}