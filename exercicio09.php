<?php

/******************************************************************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programacão
Professor: Flores
Turma: ESOFT-2A
Componentes:
                Alef Luciano (RA: 25004652-2)
                Daniel de Souza (RA: 25143755-2)
                João Pedro (RA: 25168486-2)
                Juan Pablo (RA: 25181903-2)
                Pedro Bueno (RA: 25181992-2)
Data: 28 de Agosto de 2025
Descritivo: Faça um programa que calcule o aumento de 15% sobre um valor.
*******************************************************************************/

// Declaração de variáveis
$num = 1500;
$porcento = 15;

// Procesamento
$aumento = $num * 0.15;
$reajuste = $num + ($num * $porcento / 100);

//Saída
echo "Valor original: R$ " . number_format($num, 2, ',', '.') . "<br>";
echo "Aumento (15%): R$ " . number_format($aumento, 2, ',', '.') . "<br>";
echo "Valor ajustado: R$ " . number_format($reajuste, 2, ',', '.') . "<br>";

?>

