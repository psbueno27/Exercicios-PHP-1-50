<?php
/**************************
Curso: Engenharia de Software
Disciplina: Linguagem e Técnicas de Programação
Professor: Flores
Turma: ESOFT-2A
Componentes:
  25168486-2- João Pedro Ferreira Oliveira
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
