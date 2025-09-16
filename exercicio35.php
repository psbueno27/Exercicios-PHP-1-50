<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
                Alef Luciano (RA: 25004652-2)
                Daniel de Souza (RA: 25143755-2)
                João Pedro (RA: 25168486-2)
                Juan Pablo (RA: 25181903-2)
                Pedro Bueno (RA: 25181992-2)
                Carlos Eduardo Galdino Sousa (RA: 25148436-2)        
    
Data: 16 de Setembro de 2025
Descritivo: Faça um programa que mostre mensagem diferente para manhã, tarde e noite
**************************/

$hora = date("G");          // Hora no formato 0–23
$diaSemana = date("l");     // Dia da semana por extenso em inglês (Monday, Tuesday...)

$diasPt = [
    "Monday"    => "Segunda-feira",
    "Tuesday"   => "Terça-feira",
    "Wednesday" => "Quarta-feira",
    "Thursday"  => "Quinta-feira",
    "Friday"    => "Sexta-feira",
    "Saturday"  => "Sábado",
    "Sunday"    => "Domingo"
];
$diaSemanaPt = $diasPt[$diaSemana];

if ($hora >= 6 && $hora < 12) {
    $mensagem = "Bom dia!";
} elseif ($hora >= 12 && $hora < 18) {
    $mensagem = "Boa tarde!";
} else {
    $mensagem = "Boa noite!";
}

echo "Hoje é {$diaSemanaPt}. <br>";
echo "Hora atual: {$hora}h <br>";
echo "Mensagem: {$mensagem} <br>";

