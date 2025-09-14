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
                Carlos Eduardo Galdino Sousa (RA: 25148436-2)        

Data: 28 de Agosto de 2025
Descritivo: Escreva um script que converta minutos em horas e minutos.  
*******************************************************************************/

// Declarações de variáveis
$minutos = 325;

// Processamento
$horas = floor($minutos / 60);
$resto = $minutos % 60;

// Saída
echo "$horas horas(s) e $resto minuto(s)";

?>

