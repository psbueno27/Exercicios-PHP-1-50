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
Descritivo: Faça um programa que multiplique 8 por 7 e divida por 2.
*******************************************************************************/

// Declaração de variáveis
$num1 = 8;
$num2 = 7;
$num3 = 2;
$multiplicacao = "";
$divisao = "";

// Processamento
$multiplicacao = $num1 * $num2;
$divisao = $multiplicacao / $num3;

// Saída
echo "A multiplicação entre $num1 e $num2 é igual a $multiplicacao <br>";
echo "A divisão entre $multiplicacao e $num3 é igual a $divisao";

?>